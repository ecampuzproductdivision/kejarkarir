<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PermissionController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:PERMISSION_VIEW', only: ['index']),
            new Middleware('permission:PERMISSION_CREATE', only: ['create', 'store']),
            new Middleware('permission:PERMISSION_UPDATE', only: ['edit', 'update']),
            new Middleware('permission:PERMISSION_DELETE', only: ['destroy']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Permission::withCount('roles');

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('display_name', 'like', "%{$search}%")
                  ->orWhere('name', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $permissions = $query->latest()->get();

        return view('permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::orderBy('display_name')->get();

        return view('permissions.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => [
                'required',
                'string',
                'unique:permissions,name',
                'regex:/^[A-Z0-9_]+$/',
            ],
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id',
        ], [
            'code.regex' => 'The Permission Code must be uppercase with no spaces and can contain only letters, numbers, or underscores.',
        ]);

        $permission = Permission::create([
            'name' => strtoupper($request->input('code')),
            'display_name' => $request->input('name'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
            'guard_name' => 'web',
        ]);

        $permission->syncRoles($request->input('roles', []));

        return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        $roles = Role::orderBy('display_name')->get();
        $permission->load('roles');

        return view('permissions.edit', compact('permission', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => [
                'required',
                'string',
                Rule::unique('permissions', 'name')->ignore($permission->id),
                'regex:/^[A-Z0-9_]+$/',
            ],
            'status' => 'required|in:active,inactive',
            'description' => 'nullable|string',
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id',
        ], [
            'code.regex' => 'The Permission Code must be uppercase with no spaces and can contain only letters, numbers, or underscores.',
        ]);

        $permission->update([
            'name' => strtoupper($request->input('code')),
            'display_name' => $request->input('name'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);

        $permission->syncRoles($request->input('roles', []));

        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
    }
}

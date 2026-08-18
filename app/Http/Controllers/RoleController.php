<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class RoleController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:ROLE_VIEW', only: ['index']),
            new Middleware('permission:ROLE_CREATE', only: ['create', 'store']),
            new Middleware('permission:ROLE_UPDATE', only: ['edit', 'update']),
            new Middleware('permission:ROLE_DELETE', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Role::withCount('users');

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

        $roles = $query->latest()->get();

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::orderBy('display_name')->get();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'display_name' => 'required|string|max:255',
            'name'         => [
                'required',
                'string',
                'unique:roles,name',
                'regex:/^[A-Z0-9_]+$/',
            ],
            'status'       => 'required|in:active,inactive',
            'description'  => 'nullable|string',
            'permissions'  => 'nullable|array',
            'permissions.*'=> 'exists:permissions,id',
        ], [
            'name.regex' => 'The Role Code must be uppercase with no spaces (letters, numbers, underscores only).',
        ]);

        $role = Role::create([
            'name'         => strtoupper($request->input('name')),
            'display_name' => $request->input('display_name'),
            'status'       => $request->input('status'),
            'description'  => $request->input('description'),
            'guard_name'   => 'web',
        ]);

        // Spatie's syncPermissions treats plain strings as permission *names*.
        // Resolve to model instances by ID to avoid PermissionDoesNotExist exception.
        $permissionModels = Permission::whereIn('id', $request->input('permissions', []))->get();
        $role->syncPermissions($permissionModels);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::orderBy('display_name')->get();
        $role->load('permissions');

        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'display_name' => 'required|string|max:255',
            'name'         => [
                'required',
                'string',
                Rule::unique('roles', 'name')->ignore($role->id),
                'regex:/^[A-Z0-9_]+$/',
            ],
            'status'       => 'required|in:active,inactive',
            'description'  => 'nullable|string',
            'permissions'  => 'nullable|array',
            'permissions.*'=> 'exists:permissions,id',
        ], [
            'name.regex' => 'The Role Code must be uppercase with no spaces (letters, numbers, underscores only).',
        ]);

        $role->update([
            'name'         => strtoupper($request->input('name')),
            'display_name' => $request->input('display_name'),
            'status'       => $request->input('status'),
            'description'  => $request->input('description'),
        ]);

        // Spatie's syncPermissions treats plain strings as permission *names*.
        // Resolve to model instances by ID to avoid PermissionDoesNotExist exception.
        $permissionModels = Permission::whereIn('id', $request->input('permissions', []))->get();
        $role->syncPermissions($permissionModels);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}

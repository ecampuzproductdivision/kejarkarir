<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware('permission:USER_VIEW', only: ['index']),
            new Middleware('permission:USER_CREATE', only: ['create', 'store']),
            new Middleware('permission:USER_UPDATE', only: ['edit', 'update']),
            new Middleware('permission:USER_DELETE', only: ['destroy']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::with('roles');

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        if ($request->filled('role_id')) {
            $query->whereHas('roles', function ($q) use ($request) {
                $q->where('id', $request->input('role_id'));
            });
        }

        $users = $query->latest()->get();
        $roles = Role::orderBy('display_name')->get();

        return view('users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::orderBy('display_name')->get();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => [
                'required',
                'string',
                Password::defaults()->mixedCase()->numbers()->symbols(),
                'confirmed',
            ],
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        $role = Role::find($request->input('role_id'));
        if ($role) {
            $user->assignRole($role->name);
        }

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::orderBy('display_name')->get();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => [
                'nullable',
                'string',
                Password::defaults()->mixedCase()->numbers()->symbols(),
                'confirmed',
            ],
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        $role = Role::find($request->input('role_id'));
        if ($role) {
            $user->syncRoles([$role->name]);
        }

        if ($request->filled('password')) {
            $user->update([
                'password' => $request->input('password'),
            ]);
        }

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Prevent deleting your own account
        if ($user->id === Auth::id()) {
            return redirect()->route('users.index')->with('error', 'You cannot delete your own account.');
        }

        // Prevent deleting a SUPER_ADMIN user
        if ($user->hasRole('SUPER_ADMIN')) {
            return redirect()->route('users.index')->with('error', 'Super Admin users cannot be deleted.');
        }

        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

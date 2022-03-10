<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        $guards = array_keys(config('auth.guards'));

        return view('admin.role.create', compact('permissions', 'guards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'  => 'required|max:255',
                'guard_name'  => [
                    'required',
                    Rule::unique('roles')->where(function ($query) use ($request) {
                        return $query
                            ->whereName($request->name)
                            ->whereGuardName($request->guard_name);
                    }),
                ],
            ],
            [
                'guard_name.unique' => "The role name has already been taken for the $request->guard_name guard.",
            ]
        );

        $role = Role::create(['name' => $request->input('name'), 'guard_name' => $request->input('guard_name')]);
        $role->syncPermissions($request->input('permissions'));

        return redirect()->route('admin.role.index')->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        $guards = array_keys(config('auth.guards'));

        return view('admin.role.edit', compact('role', 'permissions', 'guards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->validate(
            $request,
            [
                'name'  => 'required|max:255',
                'guard_name'  => [
                    'required',
                    Rule::unique('roles')->where(function ($query) use ($request, $role) {
                        return $query
                            ->whereName($request->name)
                            ->whereGuardName($request->guard_name)
                            ->where('id', '!=', $role->id);
                    }),
                ],
            ],
            [
                'guard_name.unique' => "The role name has already been taken for the $request->guard_name guard.",
            ]
        );

        $role->update(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permissions'));

        return redirect()->route('admin.role.index')->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('admin.role.index')->with('success', 'Role deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::paginate(30);
        
        return view('admin.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guards = array_keys(config('auth.guards'));
        return view('admin.permission.create', compact('guards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'permission'  => 'required|max:255',
                'guard_name'  => [
                    'required',
                    Rule::unique('permissions')->where(function ($query) use ($request) {
                        return $query
                            ->whereName($request->permission)
                            ->whereGuardName($request->guard_name);
                    }),
                ],
            ],
            [
                'guard_name.unique' => "The permission name has already been taken for the $request->guard_name guard.",
            ]
        );

        $permission = new Permission();
        $permission->name = $request->permission;
        $permission->guard_name = $request->guard_name;
        $permission->save();

        return redirect()->route('admin.permission.index')->with('success', 'Permission created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $guards = array_keys(config('auth.guards'));
        return view('admin.permission.edit', compact('permission', 'guards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate(
            [
                'permission'  => 'required|max:255',
                'guard_name'  => [
                    'required',
                    Rule::unique('permissions')->where(function ($query) use ($request, $permission) {
                        return $query
                            ->whereName($request->name)
                            ->whereGuardName($request->guard_name)
                            ->whereNotIn('id', [$permission->id]);
                    }),
                ],
            ],
            [
                'guard_name.unique' => "The permission name has already been taken for the $request->guard_name guard.",
            ]
        );

        $permission->name = $request->permission;
        $permission->guard_name = $request->guard_name;
        $permission->save();
        

        return redirect()->route('admin.permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('admin.permission.index');
    }
}

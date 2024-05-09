<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //
    public function index()
    {

        $roles = Role::paginate(25);

        return view('roles.roles', compact('roles'));
    }
    public function create()
    {
        $permissions = Permission::all();

        return view('roles.role_create', compact('permissions'));
    }
    public function store(Request $request)
    {

        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->selectedPermissions);

        return redirect('roles');
    }
}

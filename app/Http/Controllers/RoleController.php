<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RoleController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('Role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all();

        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        //abort_if(Gate::denies('Role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('roles.create');
    }

    public function store(Request $request)
    {
        
        //$request->validated(); 
        $data = new Role();
        $data->title=$request->title;
        

        //dd( $data);
        $data->save();
        $roleId = Role::max('id');
        return redirect()->route('roles.index');
    }

    public function show(Role $Role)
    {
        abort_if(Gate::denies('Role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('roles.show', compact('Role'));
    }

    public function edit(Role $Role)
    {
        abort_if(Gate::denies('Role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('roles.edit', compact('Role'));
    }

    public function update(Request $request, Role $Role)
    {
        $Role->update($request->validated());

        return redirect()->route('roles.index');
    }

    public function destroy(Role $Role)
    {
        abort_if(Gate::denies('Role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Role->delete();

        return redirect()->route('roles.index');
    }
}

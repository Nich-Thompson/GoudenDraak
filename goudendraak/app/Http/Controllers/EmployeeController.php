<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        $employees = User::all()->sortBy('name');

        return view('employee.index', [
            'employees' => $employees
        ]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('employee.create', [
            'roles' => $roles,
        ]);
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $roles = Role::all();
        foreach ($roles as $role) {
            if ($request->input($role->name)) {
                $user->assignRole($role->name);
            }
        }

        return redirect(route('medewerkers.index'));
    }


    public function edit($id)
    {
        $employee = User::find($id);
        $roles = Role::all();
        return view('employee.edit', [
            'employee' => $employee,
            'roles' => $roles,
        ]);
    }

    public function update(Request $request, $id)
    {
        $employee = User::find($id);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->save();

        $roles = Role::all();
        foreach ($roles as $role) {
            $employee->removeRole($role->name);
            if ($request->input($role->name)) {
                $employee->assignRole($role->name);
            }
        }

        return redirect(route('medewerkers.index'));
//        return redirect(route('medewerkers.edit', $id));
    }

    public function destroy($id)
    {
        $employee = User::find($id);

        $employee->delete();
        return redirect(route('medewerkers.index'));
    }
}

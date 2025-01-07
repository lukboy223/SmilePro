<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Validation\Rules;

class employeeController extends Controller
{
    public function index()
    {
        $employees = db::table('employee')
            ->join('person', 'employee.PersonId', '=', 'person.id')
            ->select('employee.id', 'employee.Number', 'employee.EmployeeType', 'employee.Specialization', 'person.FirstName', 'person.middleName', 'person.LastName')
            ->simplePaginate(25);
        // dd($employees);
        return view('employee.index', [
            'employees' => $employees
        ]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Email'             => 'required | email   | max:255 | lowercase | unique:'.User::class,
            'Username'          => 'required | string  | max:255',
            'Password'          => 'required | string  | max:255 | min:8', Rules\Password::defaults(),
            'DateOfBirth'       => 'required | date',
            'Number'            => 'required | max:50 | unique:'.Employee::class, 
            'EmployeeType'      => 'required',
            'Specialization'    => 'required | max:255',
            'FirstName'         => 'required | string  | max:50',
            'MiddleName'        => 'nullable | string  | max:10',
            'LastName'          => 'required | string  | max:50',
        ]);
        // dd($request->all());
        
        $userId = DB::table('users')->insertGetId([
            'Email'     => $request->Email,
            'Name'  => $request->Username,
            'Password'  => $request->Password,
        ]);
        
        $personId = DB::table('person')->insertGetId([
            'UserId' => $userId,
            'DateOfBirth' => $request->DateOfBirth,
            'FirstName' => $request->FirstName,
            'middleName' => $request->middleName,
            'LastName' => $request->LastName,
        ]);
        DB::table('employee')->insert([
            'PersonId' => $personId,
            'Number' => $request->Number,
            'EmployeeType' => $request->EmployeeType,
            'Specialization' => $request->Specialization,
        ]);

        return redirect()->route('employee.index')->with('success', 'Medewerker is succesvol toegevoegd');
    }
}

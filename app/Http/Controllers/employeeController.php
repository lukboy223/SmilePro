<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Validation\Rule;
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

    public function edit(int $id)
    {
        $employee = DB::table('employee')
            ->join('person', 'employee.PersonId', '=', 'person.id')
            ->join('users', 'person.UserId', '=', 'users.id')
            ->select('employee.id', 'users.Email', 'users.Name', 'employee.Number', 'employee.EmployeeType', 'employee.Specialization', 'person.FirstName', 'person.MiddleName', 'person.LastName', 'person.DateOfBirth')
            ->where('employee.id', $id)
            ->first();
        // dd($employee);
        return view('employee.update', [
            'employee' => $employee
        ]);
    }
    public function update(Request $request, $id)
    {
        $employee = DB::table('employee')
        ->join('person', 'employee.PersonId', '=', 'person.id')
        ->join('users', 'person.UserId', '=', 'users.id')
        ->select('users.id as user_id', 'Person.id as person_id', 'employee.id' , 'users.Email', 'users.Name', 'employee.Number', 'employee.EmployeeType', 'employee.Specialization', 'person.FirstName', 'person.MiddleName', 'person.LastName', 'person.DateOfBirth')
        ->where('employee.id', $id)
        ->first();

        $request->validate([
            'Email'             => 'required | email   | max:255 | lowercase | unique:users,Email,' . $employee->user_id,
            'Username'          => 'required | string  | max:255',
            'DateOfBirth'       => 'required | date',
            'Number'            => 'required | max:50 | unique:employee,Number,' . $employee->id, 
            'EmployeeType'      => 'required',
            'Specialization'    => 'required | max:255',
            'FirstName'         => 'required | string  | max:50',
            'MiddleName'        => 'nullable | string  | max:10',
            'LastName'          => 'required | string  | max:50',
        ]);
        // dd($request->all());
        
        $userId = DB::table('users')->where('id', $employee->user_id)->update([
            "Email" => $request->Email,
            "Name" => $request->Username
        ]);
        
        $personId = DB::table('Person')->where('id', $employee->person_id)->update([
            "FirstName" => $request->FirstName,
            "MiddleName" => $request->MiddleName,
            "LastName" => $request->LastName,
            "DateOfBirth" => $request->DateOfBirth
        ]);

        $employee = DB::table("Employee")->where('id', $employee->id)->update([
            "Number" => $request->Number,
            "EmployeeType" => $request->EmployeeType,
            "Specialization" => $request->Specialization,
        ]);

        return redirect()->route('employee.index')->with('success', 'Medewerker is succesvol bijgewerkt');
    }

    public function destroy($id){
        $employee = DB::table('employee')
            ->join('person', 'employee.PersonId', '=', 'person.id')
            ->join('users', 'person.UserId', '=', 'users.id')
            ->select('users.id as user_id', 'Person.id as person_id', 'employee.id' , 'users.Email', 'users.Name', 'employee.Number', 'employee.EmployeeType', 'employee.Specialization', 'person.FirstName', 'person.MiddleName', 'person.LastName', 'person.DateOfBirth')
            ->where('employee.id', $id)
            ->first();
        // dd($employee);
        DB::table('employee')->where('id', $employee->id)->delete();
        DB::table('person')->where('id', $employee->person_id)->delete();
        DB::table('users')->where('id', $employee->user_id)->delete();
        return redirect()->route('employee.index')->with('success', 'Medewerker is succesvol verwijderd');
    }
}

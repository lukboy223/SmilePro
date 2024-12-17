<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Controllers\Controller;


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
            'Username' => 'required',
            'Password' => 'required',
            'Number' => 'required | max:50', 
            'EmployeeType' => 'required ',
            'Specialization' => 'required | max:255',
            'FirstName' => 'required | max:50',
            'middleName' => 'nullable | max:10',
            'LastName' => 'required | max:50',
        ]);

        $userId = DB::table('users')->insertGetId([
            'Username' => $request->Username,
            'Password' => $request->Password,
        ]);

        $personId = DB::table('person')->insertGetId([
            'UserId' => $userId,
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

    }
}

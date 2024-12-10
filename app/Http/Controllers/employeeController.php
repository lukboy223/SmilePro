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
            ->select('employee.id','employee.Number', 'employee.EmployeeType', 'employee.Specialization', 'person.FirstName', 'person.middleName', 'person.LastName')
            ->simplePaginate(25);
            // dd($employees);
        return view('employee.index', [
            'employees' => $employees
        ]);
    }
}

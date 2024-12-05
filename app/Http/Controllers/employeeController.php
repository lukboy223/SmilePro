<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employee')
            ->join('person', 'employee.PersonId', '=', 'person.id')
            ->select('employee.*', 'person.FirstName', 'person.LastName')
            ->get();
        dd($employees);
        return view('employee.index', [
            'employees' => $employees
        ]);
    }
}

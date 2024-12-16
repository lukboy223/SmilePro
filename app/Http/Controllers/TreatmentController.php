<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{
    public function index(){
        $treatments = DB::table('treatment')
        ->join('patient', 'treatment.patientId', '=', 'patient.id')
        ->join('employee', 'treatment.employeeId', '=', 'employee.id')
        ->join('person as employee_person', 'employee.personId', '=', 'employee_person.id')
        ->join('person as patient_person', 'patient.personId', '=', 'patient_person.id')
        ->select(
            'treatment.*',
            'patient.id as patient_id', 'patient_person.FirstName as patient_first_name', 'patient_person.MiddleName as patient_middle_name', 'patient_person.LastName as patient_last_name',
            'employee.id as employee_id', 'employee_person.FirstName as employee_first_name', 'employee_person.MiddleName as employee_middle_name', 'employee_person.LastName as employee_last_name'
        )
        ->simplePaginate(15);
        // dd($treatments);
        return view('treatment.index', [
            'treatments' => $treatments
        ]);

    }
}

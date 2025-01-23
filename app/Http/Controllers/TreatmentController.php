<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
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
    public function edit(string $id)
    {
        $treatments = Treatment::findOrFail($id);
        return view('Treatment.edit', ['treatments' => $treatments]);
    }

    public function update(Request $request, string $id)
    {
        $treatments = Treatment::findOrFail($id);

        

        $validatedData = $request->validate([

            'EmployeeId' => 'required|max:255',
            'Date' => 'required|date',
            'Time' => 'required|date_format:H:i:s',
            'treatmentType' => 'required|max:255',
            'description' => 'required|max:255',
            'cost' => 'required|numeric|min:0|max:20000|decimal:2',
            'Status' => 'required|max:255',
        ]);
        

        DB::table('treatment')->where('id', $id)->update($validatedData);


            // $treatments->update([
            //     'EmployeeId' => $request['EmployeeId'],
            //     'Date' => $request['Date'],
            //     'Time' => $request['Time'],
            //     'treatmentType' => $request['treatmentType'],
            //     'description' => $request['description'],
            //     'cost' => $request['cost'],
            //     'Status' => $request['Status'],
            // ]);
       
    

        return redirect()->route('treatment.index')->with('success', 'de afspraak is succesvol gewijzigd.');
    }
}

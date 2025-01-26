<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Footnote\Event\FixOrphanedFootnotesAndRefsListener;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = DB::table('patient')
            ->join('person', 'patient.PersonId', '=', 'person.id')
            ->select('patient.*', 'person.*')
            ->simplePaginate(10); // Paginate data

        return view('patients.index', [
            'persons' => $persons,
        ]); // Ensure the view path is correct
    }

    // Other methods...

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create'); // Ensure the view path is correct
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|string|max:255',
            'MiddleName' => 'nullable|string|max:255',
            'LastName' => 'required|string|max:255',
            'Number' => 'required|string|max:10|unique:patient,Number',
            'DateOfBirth' => 'required|date',
            'MedicalRecord' => 'required|string|max:255',
        ]);

        // Create a new person and store in the database
        $person = Person::create([
            'FirstName' => $request->FirstName,
            'MiddleName' => $request->MiddleName,
            'LastName' => $request->LastName,
            'DateOfBirth' => $request->DateOfBirth,
            'UserId' => auth()->id(), // Provide UserId if it is required
        ]);

        // Create a new patient and store in the database
        $patient = Patient::create([
            'PersonId' => $person->id,
            'MedicalRecord' => $request->MedicalRecord,
            'Number' => $request->Number,
        ]);

       

        return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::findOrFail($id);
        $person = $patient->person;
        return view('patients.update', compact('patient', 'person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'FirstName' => 'required|string|max:255',
            'MiddleName' => 'nullable|string|max:255',
            'LastName' => 'required|string|max:255',
            'Number' => 'required|string|max:10|unique:patient,Number,' . $id,
            'DateOfBirth' => 'required|date',
            'MedicalRecord' => 'required|string|max:255',
        ]);

        $patient = Patient::findOrFail($id);
        $person = $patient->person;

        $person->update([
            'FirstName' => $request->FirstName,
            'MiddleName' => $request->MiddleName,
            'LastName' => $request->LastName,
            'DateOfBirth' => $request->DateOfBirth,
        ]);

        $patient->update([
            'Number' => $request->Number,
            'MedicalRecord' => $request->MedicalRecord,
        ]);

        return redirect()->route('patients.index')->with('success', 'Patient updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
    
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully.');
}}
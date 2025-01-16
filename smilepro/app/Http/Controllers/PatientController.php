<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Patient;

use DB;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = DB::table('patients')
            ->join('persons', 'patients.PersonId', '=', 'persons.Id')
            ->select('patients.*', 'persons.*')
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
            'person_id' => 'required|exists:persons,id',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'number' => 'required|string|max:10',
            'birth_date' => 'required|date',
            'medical_record' => 'required|string|max:255',
        ]);

        Person::create($request->all());

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

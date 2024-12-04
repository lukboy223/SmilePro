<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Persons = Person::all();
        return view('Patients.index', compact('Persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Persons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'FirstName' => 'required|string|max:50',
            'MiddleName' => 'nullable|string|max:5',
            'LastName' => 'required|string|max:50',
            'BirthDate' => 'required|date',
            'IsActive' => 'required|boolean',
            'Note' => 'nullable|string|max:255',
        ]);

        Person::create($validated);

        return redirect()->route('Persons.index');
    }

    // Other methods...
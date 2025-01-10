<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = DB::table('invoice')
            ->join('patient', 'invoice.PatientId', '=', 'patient.id')
            ->join('Person', 'patient.PersonId', '=', 'Person.id')
            ->select('invoice.*', 'patient.Number as patient_number', 'Person.FirstName', 'Person.LastName')
            ->simplePaginate(10); // Paginate data

        return view('invoice.index', [
            'invoices' => $invoices,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'PatientId' => 'required | exists:patient,id',
                'TreatmentId' => 'required | exists:treatment,id',
                'Number' => 'required',
                'Date' => 'required | date',
                'Amount' => 'required | decimal:2 | max:999.99'
            ]);

        $invoice = DB::table('invoice')->insert([
            'PatientId' => $request->PatientId,
            'TreatmentId' => $request->TreatmentId,
            'Number' => $request->Number,
            'Date' => $request->Date,
            'Amount' => $request->Amount,
        ]);

        return redirect()->route('invoice.index')->with('success', 'Facatuur succesvol aangemaakt.');

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
        Invoice::destroy($id);

        return redirect()->route('invoice.index')->with('success', 'Factuur succesvol geannuleerd.');
    }
}
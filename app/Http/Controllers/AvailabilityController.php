<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Availability;

class AvailabilityController extends Controller
{
    public function index()
    {
        $availabilities = Availability::simplePaginate(25); // Haal de data op met paginatie
        return view('availabilities.index', ['availabilities' => $availabilities]);
    }

    public function create()
    {
        return view('availabilities.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'EmployeeId' => 'required|integer',
            'FormDate' => 'required|date',
            'ToDate' => 'required|date|after_or_equal:FormDate',
            'FormTime' => 'required|date_format:H:i',
            'ToTime' => 'required|date_format:H:i|after:FormTime',
            'Status' => 'required|string',
        ]);

        Availability::create($data);

        return redirect(route('availability.index'))->with('success', 'Availability created successfully');
    }

    public function edit(Availability $availability)
    {
        return view('availabilities.edit', ['availability' => $availability]);
    }

    public function update(Availability $availability, Request $request)
    {
        $data = $request->validate([
            'EmployeeId' => 'required|integer',
            'FormDate' => 'required|date',
            'ToDate' => 'required|date|after_or_equal:FormDate',
            'FormTime' => 'required|date_format:H:i',
            'ToTime' => 'required|date_format:H:i|after:FormTime',
            'Status' => 'required|string',
        ]);

        $availability->update($data);

        return redirect(route('availability.index'))->with('success', 'Availability updated successfully');
    }

    public function destroy(Availability $availability)
    {
        $availability->delete();
        return redirect(route('availability.index'))->with('success', 'Availability deleted successfully');
    }
}
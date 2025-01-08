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
}
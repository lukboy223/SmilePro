<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Availability;


class AvailabilityController extends Controller
{
    public function index()
    {
        // Haal alle gegevens op uit de 'beschikbaarheid'-tabel
        $availabilities = Availability::all();

        // Stuur de gegevens naar de view 'beschikbaarheid.index'
        return view('availability.index', ['availabilities' => $availabilities]);

    }
}

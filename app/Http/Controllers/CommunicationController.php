<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communication;

class CommunicationController extends Controller
{
    public function index()
    {
        // Haal alle gegevens op uit de 'communicatie'-tabel
        $communications = Communication::all();

        // Stuur de gegevens naar de view 'communicatie.index'
        return view('communication.index', ['communications' => $communications]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communication;

class CommunicationController extends Controller
{
    public function index()
    {
        // Haal alle gegevens op uit de 'beschikbaarheid'-tabel
        $communications = Communication::all();

        // Stuur de gegevens naar de view 'beschikbaarheid.index'
        return view('Communication.index', ['communications' => $communications]);
    }
// test
}

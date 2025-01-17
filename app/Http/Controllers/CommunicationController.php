<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communication;

class CommunicationController extends Controller
{
    public function index()
    {
        $communications = Communication::simplePaginate(25); // Haal de data op met paginatie en wordt doorgegeven aan de view met 25 items per pagina
        return view('communications.index', ['communications' => $communications]);
    }
}
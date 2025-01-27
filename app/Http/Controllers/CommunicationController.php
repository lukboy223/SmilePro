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

    public function create()
    {
        return view('communications.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'PatientId' => 'required|integer',
            'EmployeeId' => 'required|integer',
            'Message' => 'required|string',
            'SentDate' => 'required|date|date_format:Y-m-d',
        ]);

        Communication::create($data);

        return redirect(route('communications.index'))->with('success', 'Communication created successfully');
    }
}
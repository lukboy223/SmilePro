<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    // index method
    public function index()
    {
        // Get all feedbacks
        $feedbacks = Feedback::simplePaginate(25); // Get the data with pagination

        // Return the feedbacks
        return view('feedbacks.index', ['feedbacks' => $feedbacks]);
    }

    
    // Store a newly created feedback in storage.
    public function store(Request $request)
    {
        // Validatie van de invoer
        $data = $request->validate([
            'PatientId' => 'required|integer',
            'Rating' => 'required|integer|between:1,5',
            'PracticeEmail' => 'required|email',
            'PracticePhone' => 'required|string',
            'Message' => 'required|string|max:1000',
        ]);

        // Feedback opslaan in de database
        Feedback::create($data);

        // Succesbericht teruggeven en doorverwijzen naar de feedbackpagina
        return redirect(route('feedback.index'))->with('success', 'De feedback sended successfully');
    }
}

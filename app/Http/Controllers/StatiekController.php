<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment; // Import the Treatment model
use Carbon\Carbon; // Import Carbon for date manipulation

class StatiekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch treatments from the database
        $treatments = Treatment::orderBy('Date', 'desc')->get();

        // Group treatments by year
        $groupedTreatments = $treatments->groupBy(function($date) {
            return Carbon::parse($date->Date)->format('Y');
        });

        // Calculate the total cost and total appointments for each year
        $totalCosts = $groupedTreatments->map(function($yearlyTreatments) {
            return $yearlyTreatments->sum('cost');
        });

        $totalAppointments = $groupedTreatments->map(function($yearlyTreatments) {
            return $yearlyTreatments->count();
        });

        // Paginate the grouped treatments
        $currentPage = request()->get('page', 1);
        $perPage = 1; // Number of years per page
        $paginatedGroupedTreatments = $groupedTreatments->forPage($currentPage, $perPage);

        // Create a LengthAwarePaginator instance
        $paginatedGroupedTreatments = new \Illuminate\Pagination\LengthAwarePaginator(
            $paginatedGroupedTreatments,
            $groupedTreatments->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        // Pass the paginated grouped treatments, total costs, and total appointments to the view
        return view('statistieken.index', compact('paginatedGroupedTreatments', 'totalCosts', 'totalAppointments'));
    }

    // Other methods...
}
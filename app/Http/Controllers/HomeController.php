<?php

namespace App\Http\Controllers;

use App\Models\Tupad;
use App\Models\Official;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $electedOfficials = Official::whereIn('position', [1, 2])->count();
        $appointedOfficials = Official::whereNotIn('position', [1, 2])->count();
        $newlyApplicant = Tupad::where('status', 'new')->count();
        $recentApplicant = Tupad::where('status', 'recent')->count();

        return view('admin.dashboard')->with([
            'elected' => $electedOfficials,
            'appointed' => $appointedOfficials,
            'new' => $newlyApplicant,
            'recent' => $recentApplicant
        ]);
    }
}

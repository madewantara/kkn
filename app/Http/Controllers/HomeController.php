<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $warga = DB::table('wargas')->count();
        $covid = DB::table('covids')->count();
        return view('dashboard', ['warga' => $warga, 'covid' => $covid]);
    }
}

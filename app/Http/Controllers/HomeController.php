<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

use App\AllClub;

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

        $uttaraClubs = AllClub::where('type','=','uttara')
                      ->get();
         $travelClubs = AllClub::where('type','=','travel')
                      ->get();


        $birthday[Carbon::now()->format('Y-m-d')] = AllClub::whereRaw("DATE_FORMAT(birth, '%m-%d') = DATE_FORMAT(now(),'%m-%d')")
        ->orWhereRaw("DATE_FORMAT(birth,'%m-%d') = '02-29' and DATE_FORMAT(birth, '%m') = '02' AND 
        LAST_DAY(NOW()) = DATE(NOW())")
        ->selectRaw('name, number, email, birth')

        ->get();
     
     
        return view('admin.index')->with(compact('uttaraClubs','travelClubs','birthday'));
    }
    

}

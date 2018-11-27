<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\tour;
use App\destination;
use App\category;
use App\tourcategory;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function detail()
    {
        return view('detail');
    }

    public function tour($id)
    {
        $tour = tour::with(['destination', 'category.categoryname'])->find($id);
        $tourcategory = tourcategory::with(['categoryname'])->where('idTour', $id)->get();
        // $destination = destination
        // dd($tour);
        return view('tour', compact(['user'], ['tour'], ['destinations'], ['tourcategory']));
    }

    public function destination()
    {
        return view('destination');
    }

    public function checkout()
    {
        return view('checkout');
    }
    
}

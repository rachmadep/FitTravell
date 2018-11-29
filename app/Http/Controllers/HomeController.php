<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\User;
use App\tour;
use App\booking;
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
        $tours = tour::whereNotNull('fakeprice')->get();
        $tour = tour::whereNull('fakeprice')->take(3)->get();
        // $tour = tour::orderBy('id', 'desc')->take(3)->get();
        // dd($tour);whereNull('field2')
        return view('home', compact(['tours'], ['tour']));
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

    public function booking($id)
    {
        $user = Auth::user();
        $tour = tour::find($id);

        $booking = new booking;
        $booking->idTour = $id;
        $booking->idUser = $user->id;
        $booking->date = date('Y-m-d');
        $booking->payment = 'Not Yet Paid';
        $booking->save();
        $ids = $booking->id;
        // dd($booking);

        //$tourcategory = tourcategory::with(['categoryname'])->where('idTour', $id)->get();
        // $destination = destination
        // dd($tour);
        // return Redirect::to('checkout')->with(['id'=>$booking->id]);
        return redirect()->route('checkout', $ids)->with('message', 'State saved correctly!!!');
        // return view('tour', compact(['user'], ['tour'], ['destinations'], ['tourcategory']));
    }

    public function destination()
    {
        return view('destination');
    }

    public function checkout($id)
    {
        $booking = booking::find($id);
        return view('checkout', compact(['booking']));
    }

    public function createInvoice(Request $request, $id)
    {
        $booking = booking::with(['user', 'tour'])->find($id);
        $booking->departur = $request->departur;
        $booking->save();
        // dd($booking);
        return redirect()->route('invoice', $id)->with('message', 'State saved correctly!!!');
    }

    public function showInvoice($id)
    {
        $booking = booking::with(['user', 'tour'])->find($id);
        // dd($booking);
        return view('invoice', compact(['booking']));
    }
    
}

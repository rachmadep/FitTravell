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

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        // dd($users->name);
        return view('profile', compact(['user']));

    }

    public function showOrder()
    {
        $user = Auth::user();
        $booking = booking::with(['tour'])->where('idUser', $user->id)->get();
        // dd($booking);
        return view('order', compact(['booking']));

    }

    public function uploadOrder(Request $request, $id)
    {
        // dd($request);
        $booking = booking::with(['tour'])->where('id', $id)->first();
        if( $request->hasFile('image')) {
          $file = $request->file('image');
          $ext = strtolower($file->getClientOriginalExtension());
          $Namagambar = time().'.'.$ext;
          $request->file('image')->move(public_path('img/proof'), $Namagambar);
          $booking->proof = $Namagambar;
        }
        $booking->payment = 'Awaiting review of Payments';
        $booking->save();
        // dd($booking);
        return redirect('/order');

    }

    public function showInvoice()
    {
        // $users = User::find($id);
        // dd($users);
        return view('invoice');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        if ( !empty ( $request->password ) ) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        // return redirect('/profile')->with(['id'=>$id]);
        return redirect()->to('/profile/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

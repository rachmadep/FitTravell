<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\tour;
use App\destination;
use App\category;
use App\tourcategory;
use Auth;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $tours = tour::all();
        $categorys = category::all();
        $destinations = destination::all();
        return view('admin/tour', compact(['user'], ['tours'], ['destinations'], ['categorys']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $destinations = destination::all();
        $categorys = category::all();

        return view('admin/tour-create', compact(['user'], ['destinations'], ['categorys']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request);
        $tour = new tour;
        $tour->name = $request->name;
        $tour->duration = $request->duration;
        $tour->fakeprice = $request->fakeprice;
        $tour->price = $request->price;
        $tour->person = $request->person;
        $tour->description = $request->description;
        $tour->facilities = $request->facilities;
        $tour->schedule = $request->schedule;
        $tour->bring = $request->bring;
        $tour->term = $request->term;
        $tour->idDestination = $request->idDestination;
        if( $request->hasFile('image')) {
          $file = $request->file('image');
          $ext = strtolower($file->getClientOriginalExtension());
          $Namagambar = time().'.'.$ext;
          $request->file('image')->move(public_path('img/tour'), $Namagambar);
          $tour->image = $Namagambar;
        }
        $tour->save();

        foreach ($request->idCategory as $value) {
            $tourcategory = new tourcategory;
            $tourcategory->idTour = $tour->id;
            $tourcategory->idCategory = $value;
            $tourcategory->save();
          
        }


        return redirect('/adm/tour');
    }

    public function destinationStore(Request $request)
    {   
        // dd($request);
        $destination = new destination;
        $destination->name = $request->name;
        $destination->save();

        return redirect('/adm/tour');
    }

    public function categoryStore(Request $request)
    {   
        // dd($request);
        $category = new category;
        $category->name = $request->name;
        $category->save();

        return redirect('/adm/tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/user-edit');
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
        //
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

<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $user = Auth::user();
    }

    public function index()
    {
        $user = Auth::user();
        return view('admin/dashboard', compact(['user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        $user = Auth::user();
        return view('admin/setting', compact(['user']));
    }

    public function user()
    {
        $user = Auth::user();
        return view('admin/user', compact(['user']));
    }

    public function tour()
    {
        $user = Auth::user();
        return view('admin/tour', compact(['user']));
    }

    public function order()
    {
        $user = Auth::user();
        return view('admin/order', compact(['user']));
    }

    public function ordercompleted()
    {
        $user = Auth::user();
        return view('admin/ordercompleted', compact(['user']));
    }

    public function salehistory()
    {
        $user = Auth::user();
        return view('admin/salehistory', compact(['user']));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

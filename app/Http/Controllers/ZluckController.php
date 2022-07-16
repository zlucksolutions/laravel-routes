<?php

namespace App\Http\Controllers;

use App\Models\Zluck;
use Illuminate\Http\Request;

class ZluckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo json_encode(array('message' => 'Welcome to Zluck'));
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
     * @param  \App\Models\Zluck  $zluck
     * @return \Illuminate\Http\Response
     */
    public function show(Zluck $zluck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zluck  $zluck
     * @return \Illuminate\Http\Response
     */
    public function edit(Zluck $zluck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zluck  $zluck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zluck $zluck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zluck  $zluck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zluck $zluck)
    {
        //
    }
}

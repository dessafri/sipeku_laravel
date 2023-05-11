<?php

namespace App\Http\Controllers;

use App\Models\SekolahModel;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sekolah');
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
     * @param  \App\Models\SekolahModel  $sekolahModel
     * @return \Illuminate\Http\Response
     */
    public function show(SekolahModel $sekolahModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SekolahModel  $sekolahModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SekolahModel $sekolahModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SekolahModel  $sekolahModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SekolahModel $sekolahModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SekolahModel  $sekolahModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SekolahModel $sekolahModel)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\PertanyaanModel;
use Illuminate\Http\Request;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peran');
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
     * @param  \App\Models\PertanyaanModel  $pertanyaanModel
     * @return \Illuminate\Http\Response
     */
    public function show(PertanyaanModel $pertanyaanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PertanyaanModel  $pertanyaanModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PertanyaanModel $pertanyaanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PertanyaanModel  $pertanyaanModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PertanyaanModel $pertanyaanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PertanyaanModel  $pertanyaanModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PertanyaanModel $pertanyaanModel)
    {
        //
    }
}
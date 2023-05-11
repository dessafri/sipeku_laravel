<?php

namespace App\Http\Controllers;

use App\Models\IndikatorModel;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('indikator',[
            'title' => 'Kelola Indikator',
            'active' => 'indikator'
        ]);
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
     * @param  \App\Models\IndikatorModel  $indikatorModel
     * @return \Illuminate\Http\Response
     */
    public function show(IndikatorModel $indikatorModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndikatorModel  $indikatorModel
     * @return \Illuminate\Http\Response
     */
    public function edit(IndikatorModel $indikatorModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IndikatorModel  $indikatorModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndikatorModel $indikatorModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndikatorModel  $indikatorModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndikatorModel $indikatorModel)
    {
        //
    }
}
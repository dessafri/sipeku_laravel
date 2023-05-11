<?php

namespace App\Http\Controllers;

use App\Models\HasilModel;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hasil');
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
     * @param  \App\Models\HasilModel  $hasilModel
     * @return \Illuminate\Http\Response
     */
    public function show(HasilModel $hasilModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasilModel  $hasilModel
     * @return \Illuminate\Http\Response
     */
    public function edit(HasilModel $hasilModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HasilModel  $hasilModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HasilModel $hasilModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasilModel  $hasilModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasilModel $hasilModel)
    {
        //
    }
}
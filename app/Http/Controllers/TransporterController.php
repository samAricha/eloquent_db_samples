<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransporterRequest;
use App\Http\Requests\UpdateTransporterRequest;
use App\Models\Transporter;

class TransporterController extends Controller
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
     * @param  \App\Http\Requests\StoreTransporterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransporterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Http\Response
     */
    public function show(Transporter $transporter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Http\Response
     */
    public function edit(Transporter $transporter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransporterRequest  $request
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransporterRequest $request, Transporter $transporter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transporter  $transporter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transporter $transporter)
    {
        //
    }
}

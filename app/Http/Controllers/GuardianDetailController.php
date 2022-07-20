<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuardianDetailRequest;
use App\Http\Requests\UpdateGuardianDetailRequest;
use App\Models\GuardianDetail;

class GuardianDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreGuardianDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuardianDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuardianDetail  $guardianDetail
     * @return \Illuminate\Http\Response
     */
    public function show(GuardianDetail $guardianDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuardianDetail  $guardianDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(GuardianDetail $guardianDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuardianDetailRequest  $request
     * @param  \App\Models\GuardianDetail  $guardianDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuardianDetailRequest $request, GuardianDetail $guardianDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuardianDetail  $guardianDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuardianDetail $guardianDetail)
    {
        //
    }
}

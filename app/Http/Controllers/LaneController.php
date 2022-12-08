<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLaneRequest;
use App\Http\Requests\UpdateLaneRequest;
use App\Models\Lane;
use Inertia\Inertia;

class LaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Lane/index');
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
     * @param  \App\Http\Requests\StoreLaneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lane  $lane
     * @return \Illuminate\Http\Response
     */
    public function show(Lane $lane)
    {
        return Inertia::render('Lane/show', [
            'lane' => $lane
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lane  $lane
     * @return \Illuminate\Http\Response
     */
    public function edit(Lane $lane)
    {
        return Inertia::render('Lane/edit', [
            'lane' => $lane
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaneRequest  $request
     * @param  \App\Models\Lane  $lane
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaneRequest $request, Lane $lane)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lane  $lane
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lane $lane)
    {
        //
    }
}

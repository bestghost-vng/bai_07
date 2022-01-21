<?php

namespace App\Http\Controllers;

use App\Models\Dislike;
use App\Http\Requests\StoreDislikeRequest;
use App\Http\Requests\UpdateDislikeRequest;

class DislikeController extends Controller
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
     * @param  \App\Http\Requests\StoreDislikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDislikeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dislike  $dislike
     * @return \Illuminate\Http\Response
     */
    public function show(Dislike $dislike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dislike  $dislike
     * @return \Illuminate\Http\Response
     */
    public function edit(Dislike $dislike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDislikeRequest  $request
     * @param  \App\Models\Dislike  $dislike
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDislikeRequest $request, Dislike $dislike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dislike  $dislike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dislike $dislike)
    {
        //
    }
}

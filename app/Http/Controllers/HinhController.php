<?php

namespace App\Http\Controllers;

use App\Models\Hinh;
use App\Http\Requests\StoreHinhRequest;
use App\Http\Requests\UpdateHinhRequest;

class HinhController extends Controller
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
     * @param  \App\Http\Requests\StoreHinhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHinhRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hinh  $hinh
     * @return \Illuminate\Http\Response
     */
    public function show(Hinh $hinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hinh  $hinh
     * @return \Illuminate\Http\Response
     */
    public function edit(Hinh $hinh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHinhRequest  $request
     * @param  \App\Models\Hinh  $hinh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHinhRequest $request, Hinh $hinh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hinh  $hinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hinh $hinh)
    {
        //
    }
}

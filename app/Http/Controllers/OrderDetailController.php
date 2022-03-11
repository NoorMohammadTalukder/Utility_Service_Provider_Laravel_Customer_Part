<?php

namespace App\Http\Controllers;

use App\Models\orderDetail;
use App\Http\Requests\StoreorderDetailRequest;
use App\Http\Requests\UpdateorderDetailRequest;

class OrderDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreorderDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(orderDetail $orderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(orderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderDetailRequest  $request
     * @param  \App\Models\orderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderDetailRequest $request, orderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderDetail $orderDetail)
    {
        //
    }
}

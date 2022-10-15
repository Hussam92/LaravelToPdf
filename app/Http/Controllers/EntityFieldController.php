<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntityFieldRequest;
use App\Http\Requests\UpdateEntityFieldRequest;
use App\Models\EntityField;

class EntityFieldController extends Controller
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
     * @param  \App\Http\Requests\StoreEntityFieldRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntityFieldRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EntityField  $entityField
     * @return \Illuminate\Http\Response
     */
    public function show(EntityField $entityField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EntityField  $entityField
     * @return \Illuminate\Http\Response
     */
    public function edit(EntityField $entityField)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntityFieldRequest  $request
     * @param  \App\Models\EntityField  $entityField
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntityFieldRequest $request, EntityField $entityField)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EntityField  $entityField
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntityField $entityField)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarouselItems; // import CarouselItems model
use Illuminate\Http\Request;

class CarouselItemsController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        return CarouselItems::all();
    }

    /**
    * Store a newly created resource in storage.
    * CREATE
    */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * READING
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * UPDATE
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE
     */
    public function destroy(string $id)
    {
        //
    }
}

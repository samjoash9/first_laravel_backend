<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarouselItems; // import CarouselItems model
use Illuminate\Http\Request;
use App\Http\Requests\CarouselItemRequest;
use Illuminate\Validation\ValidationException;

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
   public function store(CarouselItemRequest $request)
   {
        $validated = $request->validated();

        $carousel = CarouselItems::create($validated);
        
        return $carousel;
   }

    /**
     * Display the specified resource.
     * READING
     * shows 1 row at a time only
     */ 
    public function show(string $id)
    {
        return CarouselItems::findOrFail($id);
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
        $carousel = CarouselItems::findOrFail($id);
        $carousel->delete();
        return $carousel;
    }
}

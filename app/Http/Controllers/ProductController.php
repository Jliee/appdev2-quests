<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ACT 3

class ProductController extends Controller
{
    public $products = [
        [
            'id' => 0,
            'name' => 'Product 0',
            'price' => 100
        ],[
            'id' => 1,
            'name' => 'Product 1',
            'price' => 77
        ],[
            'id' => 2,
            'name' => 'Product 2',
            'price' => 88
        ],[
            'id' => 3,
            'name' => 'Product 3',
            'price' => 99
        ],[
            'id' =>4,
            'name' => 'Product 4',
            'price' => 11
        ]
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'message' => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Product with IS: " . $id . " updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with id " . $id . " has been deleted"
        ]);
    }
}

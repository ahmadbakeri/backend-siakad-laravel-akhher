<?php

namespace App\Http\Controllers\Api;

use App\Models\Toplist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ToplistResource;

class ToplistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toplists = Toplist::with('subject')->get();
        return ToplistResource::collection($toplists->load('subject.lecturer', 'subject.lessons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

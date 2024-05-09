<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd("olá");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addDoc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Doc $doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doc $doc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doc $doc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doc $doc)
    {
        //
    }
}

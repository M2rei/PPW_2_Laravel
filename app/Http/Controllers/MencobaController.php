<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MencobaController extends Controller
{
    public function boomesport(){
        return view('boom');
    }

    public function prxesport(){
        return view('prx');
    }
    public function fnaticesport(){
        return view('fnatic');
    }
    public function fpxesport(){
        return view('fpx');
    }
    public function berandaesport(){
        return view('layouts/home');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
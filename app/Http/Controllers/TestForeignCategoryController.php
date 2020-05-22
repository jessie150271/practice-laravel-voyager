<?php

namespace App\Http\Controllers;

use App\TestForeignCategory;
use Illuminate\Http\Request;

class TestForeignCategoryController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TestForeignCategory  $testForeignCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $cgy = TestForeignCategory::findOrFail($id);
        return $cgy->items;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestForeignCategory  $testForeignCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TestForeignCategory $testForeignCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestForeignCategory  $testForeignCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestForeignCategory $testForeignCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestForeignCategory  $testForeignCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestForeignCategory $testForeignCategory)
    {
        //
    }
}

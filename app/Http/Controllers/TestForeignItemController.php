<?php

namespace App\Http\Controllers;

use App\TestForeignItem;
use Illuminate\Http\Request;

class TestForeignItemController extends Controller
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
     * @param  \App\TestForeignItem  $testForeignItem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = TestForeignItem::findOrFail($id);
        dd($item->category->name);
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestForeignItem  $testForeignItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TestForeignItem $testForeignItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestForeignItem  $testForeignItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestForeignItem $testForeignItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestForeignItem  $testForeignItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestForeignItem $testForeignItem)
    {
        //
    }
}

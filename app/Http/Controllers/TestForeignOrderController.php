<?php

namespace App\Http\Controllers;

use App\TestForeignOrder;
use Illuminate\Http\Request;

class TestForeignOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TestForeignOrder::get();
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
     * @param  \App\TestForeignOrder  $testForeignOrder
     * @return \Illuminate\Http\Response
     */
    public function show($testForeignOrder)
    {
        // return TestForeignOrder->find();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestForeignOrder  $testForeignOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(TestForeignOrder $testForeignOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestForeignOrder  $testForeignOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestForeignOrder $testForeignOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestForeignOrder  $testForeignOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestForeignOrder $testForeignOrder)
    {
        //
    }

    public function checkout()
    {
        //新增訂單
        $order_1 = TestForeignOrder::findOrFail(1);
        $item_1 = \App\TestForeignItem::findOrFail(1);
        $item_2 = \App\TestForeignItem::findOrFail(2);

        $order_1 -> items()->save($item_1);
        $order_1 -> items()->save($item_2);


        $order_2 = TestForeignOrder::findOrFail(2);
        $order_2 ->items()->attach([1,2]);
    }
    public function modifyOrder($id)
    {
        //刪除訂單
        $order_1 = TestForeignOrder::findOrFail(1);
        $order_1 -> items()->detach($id);
    }
}

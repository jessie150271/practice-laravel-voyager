<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //全部
        // $items = Item::get();
        $items = Item::orderBy('id', 'asc')->get();
        return $items;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST
        $item = new Item([
            'category' => 1,
            'name' => 'ItemController Store',
            'photo' => 'https://www.gravatar.com/avatar/d93c49405a6b8f3fecc5b88448f36807?s=96',
            'price' => 5000,
            'sort' => 99
        ]);
        $item->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //單筆
        $item = Item::findOrFail($id);
        return $item;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //更新
        $item = Item::find($id);
        $item->price = 0;
        $item->save();
        return redirect('/items/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
        // $item->delete(22);
        Item::destroy($item->id);
        return 'destroy done.'.$item->id;
    }
}

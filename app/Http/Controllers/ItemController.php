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
        // $item = new Item([
        //     'category' => 1,
        //     'name' => 'ItemController Store',
        //     'photo' => 'https://www.gravatar.com/avatar/d93c49405a6b8f3fecc5b88448f36807?s=96',
        //     'price' => 5000,
        //     'sort' => 99
        // ]);
        Item::create($request->all());
        // $data = $request->all();
        // return $data;
        // $item = new Item([
        //     'category' => $request->input('category'),
        //     'name' => $request->input('name'),
        //     'photo' => $request->input('photo'),
        //     'price' => $request->input('price'),
        //     'sort' => $request->input('sort')
        // ]);
        
        // $item->save();
        // return redirect('/');
        return 'insert sucess.';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //單筆
        $item = Item::findOrFail($item->id);
        return $item;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //更新
        $updateItem = Item::find($item->id);
        $updateItem->price = 0;
        $updateItem->save();
        return redirect('/items/' . $item->id);
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
        return 'destroy done.' . $item->id;
    }
}

<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Requests\ValidationRequest;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();

        // $stores = Store::where('user_id', Auth::id())->get();
        return view('store.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRequest $request)
    {
        $store = new Store;
        $store->name = $request->name;
        $store->address =$request->address;
        $store->carsNumber = $request->carsNumber;
        $store->save();
        return redirect('store')->with('success', 'Store has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);
        return view('store.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::find($id);
        return view('store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $carsNumber = $request->input('carsNumber');

        $store = Store::find($id);
        $store->name = $name;
        $store->address = $address;
        $store->carsNumber = $carsNumber;
        $update = $store->save();
        return redirect('store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Store::find($id)->delete();
        return redirect('store')->with(['success' => 'Item has been deleted']);
    }
}

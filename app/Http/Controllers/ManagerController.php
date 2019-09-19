<?php

namespace App\Http\Controllers;

use App\Store;
use App\User;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('manager.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores= Store::all();
        return view('manager.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone= $request->phone;
        $user->store->name= $request->name;
        $user->store->address=$request->address;
        $user->store->carsNumber=$request->carsNumber;
        if ($request->hasFile('avatar')) {

            $avatar = $request->file('avatar');
            $path = $request->file('avatar')->store('manager/avatar');

        }
        $user->avatar= $path;
        $user->save();

        return redirect('manager')->with('success', 'Manager has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user =User::find($id);
        return view('manager.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('manager.edit', compact('user'));

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
        $user = User::find($id);
        if ($request->hasFile('avatar')) {
            $logo = $request->file('avatar');
            $path = $request->file('avatar')->store('user/avatar');
            $user->avatar = $path;
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->phone = $request->input('password');
        $user->store->name = $request->input('name');
        $user->store->address = $request->input('address');
        $user->store->carsNumber = $request->input('carsNumber');


        $update = $user->save();
        return redirect('manager');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id)->delete();
        return redirect('manager')->with('success','Manager has been  deleted');

    }
    public function managerStore($id){

        $user =User::find($id);
        $store =$user->store;
        return view('manager.store',compact('store'));
    }
    public function storeCars($id){


        $user =User::find($id);
        $store=$user->store;
        //$store = Store::find($id);
        $cars = $store->cars ;
        return view('car.index',compact('cars','store'));
    }


}

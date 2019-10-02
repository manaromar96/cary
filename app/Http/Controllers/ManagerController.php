<?php

namespace App\Http\Controllers;

use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function showProfile($id)
    {
        $user =User::find($id);
        return view('manager.show',compact('user'));
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
    public function update(Request $request)
    {
        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $logo = $request->file('avatar');
            $path = $request->file('avatar')->store('manager/avatar');
            $user->avatar= $path;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone = $request->input('phone');


        $update = $user->save();
        if(Auth::user()->role_id !=1){
                return redirect('manager');

            }
            else
            {
                return redirect('/allUser');

            }

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
        $stores =$user->stores;
        return view('manager.store',compact('stores'));
    }
    public function storeCars($id){
          //dd($id);
        $store =Store::find($id);
        $cars = $store->cars ;
        return view('manager.cars',compact('cars'));
    }
    public function managerCars($id){
        $user = User::find($id);
        //dd($user);
        $cars = $user->cars;
        return view('manager.showManagerCars',compact('cars'));
    }


}

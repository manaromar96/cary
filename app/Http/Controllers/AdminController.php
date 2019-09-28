<?php

namespace App\Http\Controllers;

use App\Car;
use App\Role;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function client()
    {

        $users = User::all();
        return view('admin.client',compact('users'));
    }
    public function user()
    {
        $users = User::all();
        return view('admin.all',compact('users'));
    }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function showAllStore()
    {
            $stores =Store::all();
        return view('manager.store',compact('stores'));
}
    public function register()
    {

        $roles = Role::whereIn('name',['Manager','Client'])->get();
        return view('admin.register', compact('roles'));
    }
    protected function createRegister(Request $request)
    {
//        $users= User::create($request->all());

        $user=new User();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password= Hash::make($request->get('password'));
        $user->phone=$request->get('phone');
        $user->role_id=$request->get('role_id');
        $user->save();
        return redirect('admin')->with('success', 'User has been added');
    }
}

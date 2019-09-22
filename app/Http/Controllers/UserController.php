<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
//        @foreach($users as $user)
//            if ($user && $user->role_id==1) {
//            return view('manager.index',compact('users'));
//        }
//            else {
//            return view('user.index',compact('users'));
//        }
//        @endforeach

        return view('user.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::all();
        return view('user.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $user = new User();
        $user= User::create($request->all());
//
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = $request->password;
//        $user->phone= $request->phone;

        if ($request->hasFile('avatar')) {

            $avatar = $request->file('avatar');
            $path = $request->file('avatar')->store('user/avatar');
            $user->avatar= $path;
            $user->save();
        }



        return redirect('user')->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('profile', compact('user'));

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
        return view('user.edit', compact('user'));
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

            $update = $user->save();
            return redirect()->back();

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
        return redirect('user')->with('success','User has been  deleted');
    }

    public function yourCar(Request $request ,$id){ ////Not done yet
        //dd($id);
        $user =Auth::user();
        $cars =$user->cars;

       // dd($cars);
        return view('user.yourCar',compact('cars','user'));

    }
}

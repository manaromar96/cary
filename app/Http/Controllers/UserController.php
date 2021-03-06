<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarBrand;
use App\Sale;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;



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
            $user->password = bcrypt($request->input('password'));
            $user->phone = $request->input('phone');

            $update = $user->save();
            return redirect('profile');

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

    public function showYourCar(Request $request ,$id)
    { ////Not done yet
        //dd($id);
        $car = Car::find($id);
        // dd($cars);
        return view('user.showYourCar', compact('car'));

    }
    public function dashboard()
    {

        $user=Auth::user();
        $sales=$user->sales;
        $client = new Client();
        $request = $client->request('get', 'https://api.darksky.net/forecast/1e13a3cfa21b5c8af2e02ee8f8b1f53a/31.5017765,34.1866839');
        $response = $request->getBody()->getContents();
        $weather  = json_decode($response);

//        $request_currancy = $client->request('get', 'https://api.exchangeratesapi.io/latest?base=USD');
//        $response_currancy = $request_currancy->getBody()->getContents();
//        $currancy= dd(json_decode($response_currancy));
//        dd($currancy);

        return view('user.dashboard', compact('sales','weather'));
    }




}

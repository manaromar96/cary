<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\CarModel;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $brands = CarBrand::all();
//        $models = CarModel::all();
//        $clients = Client::all();

//        if(Auth::user()->role_id == 2){
//        return redirect('/manager');
//    }
//        if(Auth::user()->role_id == 3){
//            return redirect('/profile');
//        }
//        else
//            return view('home');
    }

    public function profile(){
        $user = auth()->user();

        if ($user && $user->role_id==1){
            return view('admin.profile',compact('user'));
//            return redirect('/admin/dashboard');
        }
        elseif ($user && $user->role_id==2){
            return view('manager.profile',compact('user'));
//            return redirect('/manager/dashboard');

        }
        else {
            return view('user.profile',compact('user'));
//            return redirect('/User/dashboard');
        }
//        return view('user.profile',compact('user'));

    }
    public function dashboard(){
        $user = auth()->user();

        if ($user && $user->role_id==1){
//            return view('admin.profile',compact('user'));
            return redirect('/admin/dashboard');
        }
        elseif ($user && $user->role_id==2){
//            return view('manager.profile',compact('user'));
            return redirect('/manager/dashboard');

        }
        else {
//            return view('user.profile',compact('user'));
            return redirect('/User/dashboard');
        }
//        return view('user.profile',compact('user'));

    }
}

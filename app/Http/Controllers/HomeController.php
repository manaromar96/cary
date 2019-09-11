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
        $brands = CarBrand::all();
        $models = CarModel::all();
//        $clients = Client::all();

        if(Auth::user()->role_id == 2){
           return view('client.profile','clients');
        }
        if(Auth::user()->role_id == 1){
            return redirect('manager/profile');
        }
        else
            return view('home');
    }
}

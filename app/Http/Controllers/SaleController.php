<?php

namespace App\Http\Controllers;

use App\Car;
use App\Sale;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();
        $user = Auth::user();
        return view('user.yourCar',compact('sales','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sale= Sale::all();
        return view('car.buy',compact('sale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//  dd($request );
        $sale = new Sale();
        $sale->car_id = $request->car_id ;
        $sale->store_id = $request->store_id;
        $sale->user_id = Auth::id();
        $sale->save();

        $store = Store::where('id',$request->store_id)->decrement('carsNumber',1);;
        $car = Car::where('id',$request->car_id)->update(['status'=>'Sold']);
//        dd($store , $car);
        $car = Car::find($request->car_id);
        return view('car.bill',compact('car'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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


    public function managerSale()
    {
        $manager =Auth::user();
//        $store=$manager->stores->sales->get();
        $stores=$manager->stores;
        foreach ($stores as $store){
            $sales=$store->sales;
        }
        dd($sales);
    }
}

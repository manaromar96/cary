<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarImages;
use App\CarModel;
use App\ImageStore;
use App\Store;
use Illuminate\Http\Request;
use App\CarBrand;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $models = CarModel::all();
        $brands = CarBrand::all();
        $stores = Store::all();

        return view('car.create',compact('models','brands','stores'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request);
        $car= Car::create($request->all());
        if ($request->hasFile('photo')) {
            $images = $request->file('photo');
            $imagesPath = [];
            foreach ($images as $image) {
                $imagesPath [] = new CarImages([
                    'photo' => $image->store('car/images')
                ]);
            }
                $car->carImages()->saveMany($imagesPath);
            }


        return redirect('car')->with('success', 'Car has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        $store = Store::find($id);
        return view('car.show', compact('car','store'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('car.edit', compact('car'));
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

        $car = Car::find($id);

        $type= $request->input('type');
        $model= $request->input('model');
        $color= $request->input('color');
        $price= $request->input('price');
        if ($request->hasFile('photo')) {
            $images = $request->file('photo');
            foreach ($images as $image) {
                $imagesPath [] = new CarImages([
                    'photo' => $image->store('car/images')
                ]);
            }
            $car->carImages()->saveMany($imagesPath);

        }
        $car->type = $type;
        $car->model = $model;
        $car->color =$color;
        $car->price=$price;
        $update = $car->save();
        return redirect('car');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::find($id)->delete();
        return redirect('car')->with(['success' => 'car has been deleted']);
    }

    public function buy($id){
        $car = Car::find($id);
        $store = $car->store ;
        $user= $car->user;

        return view('car.buy',compact('car'));
    }
    public function bill($id){
        $car = Car::find($id);
        $store = $car->store;
        return view('car.bill',compact('car'));
    }
}


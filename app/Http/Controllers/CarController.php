<?php

namespace App\Http\Controllers;

use App\Car;
use App\CarModel;
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


        return view('car.create',compact('models','brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car;
        $car->type = $request->type;
        $car->model = $request->model;
        $car->color = $request->color;
        $car->price = $request->price;
        $car->save();
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
        return view('car.show', compact('car'));
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
        $type= $request->input('type');
        $model= $request->input('model');
        $color= $request->input('color');
        $price= $request->input('price');


        $car = Car::find($id);
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
}

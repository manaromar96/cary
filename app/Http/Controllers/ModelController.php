<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\CarModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = CarModel::all();
        return view('model.index', compact('models'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brands = CarBrand::all();
        return view('model.create',compact('brands'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new CarModel;
        $model->modelYear = $request->modelYear;
        $model->VIN =$request->VIN;
        $model->brand_id =$request->brand_id;
        $model->save();
        return redirect('model')->with('success', 'Model has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = CarModel::find($id);
        return view('model.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = CarModel::find($id);
        return view('model.edit', compact('model'));
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
        $modelYear = $request->input('modelYear');
        $vin = $request->input('VIN');

        $model = CarModel::find($id);
        $model->modelYear = $modelYear;
        $model->VIN = $vin;
        $update = $model->save();
        return redirect('model');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        CarModel::find($id)->delete();
        return redirect('model')->with(['success' => 'Model has been deleted']);
    }
}

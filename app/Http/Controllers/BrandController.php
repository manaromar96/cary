<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\Store;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = CarBrand::all();
        return view('brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new CarBrand;
        $brand->name = $request->name;

        if ($request->hasFile('logo')) {

            $logo = $request->file('logo');
            //dd($logo);

            new CarBrand([
                'logo' => $logo->store('brand/logo')
            ]);
            }
        $brand->logo= $logo->getClientOriginalName();
        $brand->save();

        return redirect('brand')->with('success', 'Car Brand has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = CarBrand::find($id);
        return view('brand.show', compact('brand'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = CarBrand::find($id);
        return view('brand.edit', compact('brand'));
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
        $brand = CarBrand::find($id);
        if ($request->hasfile('logo')) {
            $file = $request->file('logo');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/', $name);
            $brand->logo = $name;
        }

        $brand->name = $request->input('name');

        $update = $brand->save();
        return redirect('brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $brand=CarBrand::find($id)->delete();
        return redirect('brand')->with('success','Car Brand has been  deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\Store;
use GuzzleHttp\Client;
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
        $brands = CarBrand::all();


        return view('brand.create',compact('brands'));
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
            $path = $request->file('logo')->store('brand/logo');

        }
        $brand->logo= $path;
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
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $path = $request->file('logo')->store('brand/logo');
            $brand->logo= $path;
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
    public function weather(){
        $client = new Client();
        $request = $client->request('get', 'https://samples.openweathermap.org/data/2.5/box/city?bbox=12,32,15,37,10&appid=b6907d289e10d714a6e88b30761fae22');
        $response = $request->getBody()->getContents();
        dd(json_decode($response));
    }
    function currency()
    {
        $client = new Client();
        $request = $client->request('get', 'https://api.exchangeratesapi.io/latest?base=USD');
        $response = $request->getBody()->getContents();
        dd(json_decode($response));

    }
    function prayerTimes()
    {
        $client = new Client();
        $request = $client->request('get', 'http://api.aladhan.com/v1/calendarByCity?city=gaza&country=Palesine&method=2&month=08&year=2018');
        $response = $request->getBody()->getContents();
        dd(json_decode($response));
    }

}

<?php

namespace App\Http\Controllers;

use App\Car;
use App\Sale;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;



class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('manager.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores= Store::all();
        return view('manager.create',compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone= $request->phone;
        $user->store->name= $request->name;
        $user->store->address=$request->address;
        $user->store->carsNumber=$request->carsNumber;
        if ($request->hasFile('avatar')) {

            $avatar = $request->file('avatar');
            $path = $request->file('avatar')->store('manager/avatar');
        }
        $user->avatar= $path;
        $user->save();

        return redirect('manager')->with('success', 'Manager has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user =User::find($id);
        return view('manager.profile',compact('user'));
    }
    public function showProfile($id)
    {
        $user =User::find($id);
        return view('manager.show',compact('user'));
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
        return view('manager.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $logo = $request->file('avatar');
            $path = $request->file('avatar')->store('manager/avatar');
            $user->avatar= $path;
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->phone = $request->input('phone');


        $update = $user->save();

                return redirect('/profile');



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
        return redirect('manager')->with('success','Manager has been  deleted');

    }
    public function managerStore($id){

        $user =User::find($id);
        $stores =$user->stores;
        return view('manager.store',compact('stores'));
    }
    public function storeCars($id){
          //dd($id);
        $store =Store::find($id);
        $cars = $store->cars ;
        return view('manager.cars',compact('cars'));
    }
    public function managerCars($id){
        $user = User::find($id);
        //dd($user);
        $cars = $user->cars;
        return view('manager.showManagerCars',compact('cars'));
    }
//    public function dashboard(){
//
////        $stores=Auth::user()->stores;
////        $cars=Auth::user()->cars;
//        $sale=Sale::all();
//        dd($sale);
//        return view('manager.dashboard',compact('stores','cars'));
//
//    }
    public function dashboard()
    {

           $stores=Auth::user()->stores;
        $cars=Auth::user()->cars;
//
//        dd($cars);
//        foreach (\Illuminate\Support\Facades\Auth::user()->cars as $car) {
//                   foreach( $car->sales as $sales){
//
//                       dd(count($car->sales));
//
//
//        $sale =Sale::with('cars')->where('user_id','=',Auth::id())->get();
//                    $sale =Car::with('sales')->where('store_id','=',Auth::user()->stores->id)->get();

//        $sale =Sale::with('car')->where('user_id','=',Auth::id())->get();

//        dd($sale);
//        foreach ($cars as $car){
//         $sale= Sale::whereIn('car_id','=',$car->id);
//           dd($sale);
//        }
        $cars=Auth::user()->cars;

        foreach ($cars as $car){
            dd($car->id);
            $carSale =Sale::with('car')->where('car_id','=', $car->id)->get();
            dd(($carSale));
        }

//    dd(count($sale));

//    $sales=Sale::where('car_id','=',$car->id);
//    dd($sales);
//}

//        }
//        return view('manager.dashboard',compact('stores','cars','sale'));
    }
    }
//       }   @foreach( $car->sales as $sales)

//                                <li><i class="fa fa-table"></i><a href="{{route('showYourCar',[$sales->car->id])}}">
//                                        {{ $sales->car->type }}
//                                    </a></li>

//        dd($rows->sales);
//        return view('manager.dashboard',compact('stores','cars'));

//        {
//            $unit_types_count = UnitType::where('name', $row[0])->where('project_id', $this->proj_id)->count();
//            if ($unit_types_count == 0){
//                UnitType::create([
//                    'name'       => $row['unit_type'],
//                    'created_by' => $this->user_id,
//                    'project_id' => $this->proj_id,
//                ]);
//            }
//        }




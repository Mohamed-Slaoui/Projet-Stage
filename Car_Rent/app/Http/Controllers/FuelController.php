<?php

namespace App\Http\Controllers;

use App\Models\fuel;
use App\Http\Requests\StorefuelRequest;
use App\Http\Requests\UpdatefuelRequest;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    public function show_fuels(){
        $fuel = fuel::all();
        return view('Admin.Fuel',compact('fuel'));
    }

    public function store_fuel(Request $req){
        //-----------validation
        $this->validate($req,[
            'fuel_name' =>'required'
        ]);


        $new_fuel = new fuel();

        $new_fuel->fuel_type = $req->fuel_name;
        $new_fuel->save();

        return redirect()->route('back_fuel')->with([
            'success' => 'Data inserted successfully'
        ]);
    }

    public function remove_fuel($id){
        $removed = fuel::where('id',$id)->delete();

        return redirect()->route('back_fuel')->with([
            'success' => 'Data deleted successfully'
        ]);
    }
}

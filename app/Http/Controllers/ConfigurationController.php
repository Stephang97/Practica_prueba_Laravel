<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    public function index()
    {
        //Method GET
        return $confApi = Configuration::all();
    }


    public function store(Request $request)
    {
        //Method POST
        $confApi = Configuration::create($request->all());

        return $confApi;
    }


    public function update(Request $request,$id)
    {
        //Method PATCH
        $confApi = Configuration::find($id);

        $confApi-> language =$request-> get("language");
        $confApi-> country =$request-> get("country");
        $confApi-> state =$request-> get("state");

        $confApi ->save();
        return $confApi;
    }

  
    public function destroy($id)
    {
               //Method DELETE
               $confApi = Configuration::find($id);
               $confApi->delete();
       
       
               return "delete succesfull";
    }
}
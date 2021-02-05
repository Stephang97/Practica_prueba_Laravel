<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index()
    {
        //Method GET
        return $peopleApi = People::all();
    }

    
    public function store(Request $request)
    {
        //Method POST
        $peopleApi = People::create($request->all());

        return $peopleApi;
    }

    public function update(Request $request,$id)
    {
        //Method PATCH
        $peopleApi = People::find($id);

        $peopleApi-> nameUser =$request-> get("nameUser");
        $peopleApi-> nameFull =$request-> get("nameFull");
        $peopleApi-> email =$request-> get("email");
        $peopleApi-> cellphone =$request-> get("cellphone");
        $peopleApi-> age =$request-> get("age");
        $peopleApi-> dateBorn =$request-> get("dateBorn");

        $peopleApi ->save();
        return $peopleApi;
    }

    
    public function destroy( $id)
    {
        //Method DELETE
        $peopleApi = People::find($id);
        $peopleApi->delete();


        return "delete succesfull";
    }
}
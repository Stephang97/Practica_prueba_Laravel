<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        //Method GET
        return $roleApi = Role::all();
    }

    public function store(Request $request)
    {
        //Method POST
        $roleApi = Role::create($request->all());

        return $roleApi;
    }

    public function update(Request $request,  $id)
    {
        //Method PATCH
        $roleApi = Role::find($id);
        
        $roleApi-> description =$request-> get("description");

        $roleApi ->save();
        return $roleApi;
    }

 
    public function destroy( $id)
    {
        //Method DELETE
        $roleApi = Role::find($id);
        $roleApi->delete();


        return "delete succesfull";
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\make4;
class mohaController extends Controller
{{

    public function index()
    {

        $data = make4::get();
       // dd($data);


       return view('welcome', compact('data'));
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {
     //  dd($request->all());
     $storeData = new make4;

     $storeData->name = $request->name;
     $storeData->email = $request->email;
     $storeData->phone = $request->phone;
     $storeData->save();
    }
}

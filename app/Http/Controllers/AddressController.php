<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(){
        return view('address.address');
    }

    public function store(Request $request){
        
        Address::create($request->all());
        return back();
    }
}

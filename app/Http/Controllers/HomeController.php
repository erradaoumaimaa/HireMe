<?php

namespace App\Http\Controllers;
Use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //automatic index execute
    public function index(){
      $services = Service::paginate(6);
      return view('home')->with(['services' => $services]);
    }

    public function show($id){
        $service = Service::find($id);
        return view('show')->with(['services' => $service]);
    }
}

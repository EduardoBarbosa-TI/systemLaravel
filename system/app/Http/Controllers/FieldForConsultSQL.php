<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FieldForConsultSQL extends Controller
{
    public function index(){
        return view('consult/fieldConsult');
    }

    public function createConsult(Request $request){
        dd($request);
    }
}

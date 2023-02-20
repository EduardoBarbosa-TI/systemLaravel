<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function index(){
        return view('index');
    }

    public function consultCreate(Request $request)
    {
        $fieldModel = new Field;
        $fieldModel->fieldConsult($request->textArea);
        

        return to_route('search.index');
        
    }
}

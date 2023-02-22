<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FieldController extends Controller
{
    public function index(){
    
        $fieldModel = new Field;
        $dataBaseTables = $fieldModel->tablesConsult();
        $mensagemSuccess = session('mensagem.success');

        return view('index')->with('dataBaseTables', $dataBaseTables)
            ->with('mensagemSuccess', $mensagemSuccess);
    }

    public function consultCreate(Request $request)
    {
        $fieldModel = new Field;
        if(Str::startsWith($request->textArea,'select')){
             $responseSelect = $fieldModel->fieldConsultSelect($request->textArea);
        }else{
            $fieldModel->fieldConsult($request->textArea);
        }
        dd($responseSelect);
        
        return to_route('search.index')->with('responseSelect',$responseSelect)
            ->with('mensagem.success', "Comando válido !");
    }

}

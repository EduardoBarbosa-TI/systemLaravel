<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FieldController extends Controller
{
    private $fieldModel;
    private $dataBaseTables;
    private $mensagemSuccess;

    public function __construct(){
        $this->fieldModel = new Field;
        $this->dataBaseTables = $this->fieldModel->tablesConsult();
        $this->mensagemSuccess = session('mensagem.success');
    }

    public function index(){
        

        return view('index')->with('dataBaseTables', $this->dataBaseTables)
            ->with('mensagemSuccess', $this->mensagemSuccess);
    }

    public function consultCreate(Request $request)
    {
        
        if(Str::startsWith($request->textArea,'select')){
             $responseSelect = $this->fieldModel->fieldConsultSelect($request->textArea);
        }else{
            $this->fieldModel->fieldConsult($request->textArea);
        }
        
        
        return view('fieldResult')->with('responseSelect', $responseSelect)
            ->with('dataBaseTables', $this->dataBaseTables)
            ->with('mensagemSuccess', $this->mensagemSuccess);
            
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Field extends Model
{
    public function fieldConsultSelect($request): array
    {   
        return DB::select($request);   
    }
    public function fieldConsult($request)
    {
        DB::unprepared($request);
    }

    public function tablesConsult(): array
    {  
        return DB::select("show tables from `system`");  
    }

}

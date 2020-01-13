<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pais extends Model
{
    //
    // Fetch departments
    public static function getPais(){

        $value=DB::table('pais')->orderBy('id', 'asc')->get();

        return $value;
    }

    // Fetch employee by department id
    public static function getpaisCiudad($paisid=0){

        $value=DB::table('ciudads')->where('pais_id', $paisid)->get();

        return $value;
    }

}

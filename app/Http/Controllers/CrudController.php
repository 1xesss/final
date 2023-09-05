<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index(){
        $alumnos = DB::select("SELECT id, nombre, apellido, email FROM alumnos1");
        return view("home")->with("alumnos", $alumnos);


    }
    public function create(Request $request){
        return $request->txtnombre;

    }
}

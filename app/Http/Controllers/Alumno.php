<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alumno extends Controller
{
    //
    public function index(Request $request) {

    	$titulo = 'Alumnos';

    	return view('alumnos',compact('titulo'));
    }
}

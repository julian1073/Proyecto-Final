<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class gestionarDatosController extends Controller
{
    public function gestionarDatos(Request $request){



    	$name = $request->input('nombre');
    	$apellido = $request->input('apellido');
    	$tipoDocumento = $request->input('tipoDocumento');
    	$numId = $request->input('numId');
    	$ciudad = $request->input('ciudad');
    	$edad = $request ->input('edad');
    	$turno = $request->input('turno');
    	$prioridad = $request->input('prioridad');

    	//dd(Session::has('matriz'));
    	if (Session::has('matriz')) { //si existe un elemento en la session
    		
    		$dato = Session::get('matriz');
    		$dato[] = array(
    			'nombre' => $name,
    			'apellido' =>  $apellido,
    			'tipoDocumento' => $tipoDocumento,
    			'numId' => $numId,
    			'ciudad' => $ciudad,
    			'edad' => $edad,
    			'turno'	=> $turno,
    			'prioridad' => $prioridad,
    		);
    		Session::put('matriz', $dato);
    		//echo "Se inserto un nuevo valor";

    	}
    	else{

    		$matriz[]=array(
    			'nombre' => $name,
    			'apellido' =>  $apellido,
    			'tipoDocumento' => $tipoDocumento,
    			'numId' => $numId,
    			'ciudad' => $ciudad,
    			'edad' => $edad,
    			'turno'	=> $turno,
    			'prioridad' => $prioridad,

    		);
    		Session::put('matriz', $matriz);


    	}
    	//dd($request->session()->get('matriz'));
    	
        
        $datos = [
    		'usuarios' => $request->session()->get('matriz')
    	];

    	

    	return view('mostrarPacientes', $datos);
    }
}

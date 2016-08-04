<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    

    public function index()
    {

    	return View('home.index');
    }

    public function proyectoDmf() {

    	return View('home.proyectos');
    }

    public function proyectoMythra()
    {
    	return View('home.proyecto_mythra');
    }

    public function curriculum(){
        return View('home.curriculum');
    }

    public function contacto(Request $request) 
    {

        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'texto'=> 'required'
        ]);
        
    // send email
        mail("moi1432@gmail.com", $request->asunto,$request->texto);

        
        echo json_encode(['estado'=>1]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contacto;

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
        
    
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->asunto = $request->asunto;
        $contacto->email = $request->email;
        $contacto->mensaje = $request->texto;
        $contacto->save();

       // mail("moi1432@gmail.com", $request->asunto,$request->texto.$request->email);

        
        echo json_encode(['estado'=>1]);
    }


    public function curriculumDescargado() 
    {

    }   
}

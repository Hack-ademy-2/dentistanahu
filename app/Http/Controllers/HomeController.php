<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view ('index');
    }
    
    public function programadas(){

        !session('citas') ? $nuevaCita = [] : $nuevaCita = session ('citas');
        
        return view ('layouts.programadas', compact ('nuevaCita'));
    }

    public function cita() {
        return view ('layouts.cita');
    }

    public function nosotros() {
        return view ('layouts.nosotros');
    }

    public function contacto() {
        return view ('layouts.contacto');
    }

    public function solicitud(Request $request) {
        /* $request->session()->flush(); */
        $nuevaCita=$request->except('_token');
        $request->session()->push('citas',$nuevaCita);
        return redirect()->route('programadas');
    }

    public function nuevocontacto(Request $request) {
        /* $request->session()->flush(); */
        $nuevoContacto=$request->except('_token');
        $request->session()->push('nuevocontacto',$nuevoContacto);
        return redirect()->route('index');
    }

}

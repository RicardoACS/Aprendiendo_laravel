<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->middleWare('example', ['only' => ['home']]);
    }

    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contactos');
    }
    public function saludos($nombre = 'Invitado'){

        $html = "<h2>Contenido HTML</h2>";
        $script = "<script>alert('Problem XSS')</script>";
    
        $consolas = [
            /* "Play Station 4",
            "Xbox One",
            "Wii U" */
        ];
    
        return view('saludos', compact('nombre', 'html', 'script', 'consolas'));
    }
    public function mensaje(CreateMessageRequest $createMeesageRequest){

        /* $this->validate($this->request, [
            'nombre'    => 'required',
            'email'     => 'email | required',
            'mensaje'   => 'required | min:5'
        ]); */

        $data =  $this->request->all();

        /* return  redirect()
                ->route('contacto')
                ->with('info', 'Tu mensaje ha sido enviado.'); */

        //retorna a la página anterior
        return back()->with('info', 'Tu mensaje ha sido enviado.');
    }
}

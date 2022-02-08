<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CadastroUsuarioController extends Controller
{
    public function index(){
        return view('cadastro');
}
    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6','confirmed'],
            
        ],
        [

           'email.required' => 'Por favor digite o seu email!',
           'password.required' => 'Por favor digite a sua senha!',
           'password.min' => 'Sua senha precisa ter no minimo 6 digitos!',
           'password.confirmed' => 'As suas senhas não coincidem!'
   
        ]);

        $email = $request->email;
        $password = $request->password;

        $usuarioCriado = User::create([
            'email' => $email,
            'password' => $password
        ]);
    }
}
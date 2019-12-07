<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ControllerUser extends Controller{

	public function cadastro(Request $request){
		$usuario = new User;
		$usuario->name = $request->nome;
		$usuario->email = $request->email;
		$usuario->password = Hash::make($request->senha);
		$usuario->remember_token = str_random(10);
		$usuario->save();
		return ControllerUser::lista();
	}

	public function edita(Request $request){
		$id = $request->id;
		$usuario = new User;
		$dados = $usuario->find($id);
		return view('usuario.edita-usuario',['dados' => $dados]);
	}

	public function atualiza(Request $request){
		$id = $request->id;
		$usuario = new User;
		$usuario = User::find($id);
		$usuario->name = $request->nome;
		$usuario->email = $request->email;
		if(!empty($request->senha)){
			$usuario->password = Hash::make($request->senha);
		}
		$usuario->save();
		return redirect('/lista-usuario');
	}		
	
	public function apaga(Request $request){
		$id = $request->id;
		$usuario = new User;
		$usuario = User::find($id);
		$usuario->delete();
		return ControllerUser::lista();
	}

	public function lista(){
		$usuario = new User;
		$dados = $usuario->all();
		return view('usuario.lista-usuario',['dados' => $dados]);
	}
    
}

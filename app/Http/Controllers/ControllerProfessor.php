<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Professor;


class ControllerProfessor extends Controller
{
	public function cadastro(Request $request){

		$professor = new Professor;
		$professor->nome =  $request->nome;
		$professor->cpf =  $request->cpf;
		$professor->endereco =  $request->endereco;
		$professor->bairro =  $request->bairro;
		$professor->cep =  $request->cep;
		$professor->cidade =  $request->cidade;
		$professor->estado =  $request->estado;
		$professor->telefone =  $request->telefone;
		$professor->save();
		return ControllerProfessor::lista();

	}

	public function edita(Request $request){

		$id = $request->id;
		$professor = new Professor;
		$dados = $professor->find($id);
		return view('professor.edita-professor',['dados' => $dados]);

	}

	public function atualiza(Request $request){

		$professor = new Professor;
		$professor = Professor::find($request->id);
		$professor->nome =  $request->nome;
		$professor->cpf =  $request->cpf;
		$professor->endereco =  $request->endereco;
		$professor->bairro =  $request->bairro;
		$professor->cep =  $request->cep;
		$professor->cidade =  $request->cidade;
		$professor->estado =  $request->estado;
		$professor->telefone =  $request->telefone;
		$professor->save();
		return redirect('/lista-professor');

	}

	public function apaga(Request $request){

		$id = $request->id;
		$professor = new Professor;
		$professor = Professor::find($id);
		$professor->delete();
		return ControllerProfessor::lista();
	
	}

	public function lista(){

		$professor = new Professor;
		$dados = $professor->all();
		return view('professor.lista-professor',['dados' => $dados]);

	}

}

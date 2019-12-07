<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerTurma extends Controller
{
    public function cadastro(Request $request){

		$turma = new Turma;
		$turma->nome_turma = $request->nome_turma;
		$turma->save();
		return redirect('/lista-turma');

	}

	public function edita(Request $request){

		$id = $request->id;
		$turma = new Turma;
		$dados = $turma->find($id);
		return view('turma.edita-turma',['dados' => $dados]);

	}

	public function atualiza(Request $request){

		$id = $request->id;
		$turma = new Turma;
		$turma = Turma::find($id);
		$turma->nome_turma = $request->nome_turma;
		$turma->save();
		return redirect('/lista-turma');

	}

	public function apaga(Request $request){

		$id = $request->id;
		$turma = new Turma;
		$turma = Turma::find($id);
		$turma->delete();
		return redirect('/lista-turma');
	
	}

	public function lista(){

		$turma = new Turma;
		$dados = $turma->all();
		return view('turma.lista-turma',['dados' => $dados]);

	}
}

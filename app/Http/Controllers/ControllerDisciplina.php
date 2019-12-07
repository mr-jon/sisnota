<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Disciplina;


class ControllerDisciplina extends Controller
{
    public function cadastro(Request $request){

		$disciplina = new Disciplina;
		$disciplina->nome_disciplina =  $request->nome_disciplina;
		$disciplina->save();
		return redirect('/lista-disciplina');

	}

	public function edita(Request $request){

		$id = $request->id;
		$disciplina = new Disciplina;
		$dados = $disciplina->find($id);
		return view('disciplina.edita-disciplina',['dados' => $dados]);

	}

	public function atualiza(Request $request){

		$disciplina = new Disciplina;
		$disciplina = Disciplina::find($request->id);
		$disciplina->nome_disciplina =  $request->nome_disciplina;
		$disciplina->save();
		return redirect('/lista-disciplina');

	}

	public function apaga(Request $request){

		$id = $request->id;
		$disciplina = new Disciplina;
		$disciplina = Disciplina::find($id);
		$disciplina->delete();
		return redirect('/lista-disciplina');
	
	}

	public function lista(){

		$disciplina = new Disciplina;
		$dados = $disciplina->all();
		return view('disciplina.lista-disciplina',['dados' => $dados]);

	}
}

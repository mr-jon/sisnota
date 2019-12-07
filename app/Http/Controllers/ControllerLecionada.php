<?php

namespace App\Http\Controllers;

use App\Lecionada;
use App\Professor;
use App\Turma;
use App\Disciplina;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerLecionada extends Controller
{

	public function cadastro(Request $request){

		$lecionada = new Lecionada;
		$lecionada->id_professor = $request->id_professor;
		$lecionada->id_disciplina = $request->id_disciplina;
		$lecionada->id_turma = $request->id_turma;
		$lecionada->ano_letivo = $request->ano_letivo;
		$lecionada->save();
		return redirect('/lista-lecionada');

	}

	public function edita(Request $request){

		$id = $request->id;
		$lecionada = new Lecionada;		
		//Array com as condições que seram utilizadas no SELECT feito no banco pelo Eloquent
		$where = ['id'=>$id];
		//Na linha abaixo eu estou trazendo todas as informações referente ao ID passado
		$disciplinaLecionada = $lecionada->with('turmas','professores','disciplinas')->find($where);
		/*Na linha acima eu recebo um Array. Para acessar alguma informação desse array eu preciso especificar a chave. O mesmo vale quando eu for acessar ele no View.

			Exemplo a baixo: 
			echo $disciplinaLecionada[0]->id | Aqui eu tenho o ID da disciplina Lecionada 
			echo $disciplinaLecionada[0]->professores->nome | Aqui eu tenho o nome do professor leciona ela 
		*/

		$professor = new Professor;
		$professores = $professor->all();

		$turma = new Turma;
		$turmas = $turma->all();
		
		$disciplina = new Disciplina;
		$disciplinas = $disciplina->all();

		return view('lecionada.edita-lecionada',
						['professores' => $professores , 
						 'turmas' => $turmas,
						 'disciplinas' => $disciplinas,
						 'disciplinaLecionada' => $disciplinaLecionada]);
		
	}


	public function atualiza(Request $request){

		$id = $request->id_lecionada;
		$lecionada = new Lecionada;
		$lecionada = Lecionada::find($id);
		$lecionada->id_professor = $request->id_professor;
		$lecionada->id_disciplina = $request->id_disciplina;
		$lecionada->id_turma = $request->id_turma;
		$lecionada->ano_letivo = $request->ano_letivo;
		$lecionada->save();
		return redirect('/lista-lecionada');

	}


	public function apaga(Request $request){

		$id = $request->id;
		$lecionada = new Lecionada;
		$lecionada = Lecionada::find($id);
		$lecionada->delete();
		return redirect('/lista-lecionada');

	}


	public function lista(){

		$lecionada = new Lecionada;
		$dados = $lecionada->with('turmas','professores','disciplinas')->get();
		return view('lecionada.lista-lecionada',['dados' => $dados]);

	}

	public function listaParaCadastro(){

		$professor = new Professor;
		$professores = $professor->all();

		$turma = new Turma;
		$turmas = $turma->all();
		
		$disciplina = new Disciplina;
		$disciplinas = $disciplina->all();
		
		return view('lecionada.cadastro-lecionada',
			['professores' => $professores , 
			 'turmas' => $turmas,
			 'disciplinas' => $disciplinas]);

	}
}

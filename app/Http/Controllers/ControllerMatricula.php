<?php

namespace App\Http\Controllers;

use App\Matricula;
use App\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerMatricula extends Controller
{

	public function cadastro(Request $request){

		$matricula = new Matricula;
		$matricula->id_aluno = $request->id_aluno;
		$matricula->data_matricula = $request->data_matricula;
		$matricula->save();
		return redirect('/lista-matricula');

	}

	public function edita(Request $request){

		$id = $request->id;
		$matricula = new Matricula;		
		//Array com as condições que seram utilizadas no SELECT feito no banco pelo Eloquent
		$where = ['id'=>$id];
		//Nesta linha eu estou trazendo todas as informações referente ao ID passado
		$matriculaEscolhida = $matricula->with('alunos')->find($where);
		/*Na linha acima eu recebo um Array. Para acessar alguma informação desse array eu preciso especificar a chave. O mesmo vale quando eu for acessar ele no View.

			Exemplo a baixo: 
			echo $disciplinaLecionada[0]->id | Aqui eu tenho o ID da disciplina Lecionada 
			echo $disciplinaLecionada[0]->professores->nome | Aqui eu tenho o nome do professor leciona ela 
		*/
			$aluno = new Aluno;
			$alunos = $aluno->all();
			return view('matricula.edita-matricula',['matriculaEscolhida' => $matriculaEscolhida,'alunos' => $alunos ]);

		}


		public function atualiza(Request $request){

			$id = $request->id_matricula;
			$matricula = new Matricula;
			$matricula = Matricula::find($id);
			$matricula->id_aluno = $request->id_aluno;
			$matricula->data_matricula = $request->data_matricula;
			$matricula->save();
			return redirect('/lista-matricula');

		}


		public function apaga(Request $request){

			$id = $request->id;
			$matricula = new Matricula;
			$matricula = Matricula::find($id);
			$matricula->delete();
			return redirect('/lista-matricula');

		}


		public function lista(){

			$matricula = new Matricula;
			$dados = $matricula->with('alunos')->get();
			return view('matricula.lista-matricula',['dados' => $dados]);

		}

		public function listaParaCadastro(){

			$aluno = new Aluno;
			$dados = $aluno->all();
			return view('matricula.cadastro-matricula',['dados' => $dados ]);

		}


	}

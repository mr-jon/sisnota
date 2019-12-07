<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nota;
use App\Aluno;
use App\Disciplina;

use Barryvdh\DomPDF\Facade as PDF;

class ControllerNota extends Controller
{

	public function filtro_busca (Request $request){

		/* Estou preparando os dados para a view onde será selecionado para fazer a busca.*/
		$aluno = new Aluno;
		$alunos = $aluno->all();
		$disciplina = new Disciplina;
		$disciplinas = $disciplina->all();

		return view('nota.filtro-busca',['alunos' => $alunos , 'disciplinas' => $disciplinas]);
	}


	public function busca_nota (Request $request){
		/*
			1- Buscar no banco algun resgistro que atenda as informações passadas;

			CASO 1 - Registro encontrado
				* Eu retorno para a view as informações que estão no BD.
				* O usuário manitupulas as informações e depois o sistema salva no bando.
				* Por fim o sistema redireciona para a tela de de filtro para fazer uma nova busca

			CASO 2 - Registro não encontrado
				* Se não for encontrado o sistema cria um novo registro no banco, sem notas e manda para a view onde o
				usuário pode fazer o cadastro
		*/


		////////////////////////////////////// BUSCANDO NO BANCO AS INFORMAÇÕES
				$id_aluno = $request->id_aluno;
				$id_disciplina = $request->id_disciplina;
				$ano_letivo = $request->ano_letivo;

		//Array com as condições que seram utilizadas no SELECT feito no banco pelo Query Builder
				$where = ['id_aluno' => $id_aluno,
				'id_disciplina' => $id_disciplina, 
				'ano_letivo' => $ano_letivo];

		//Na linha abaixo eu estou trazendo todas as informações que atendem as condições do array $where
				$notas = DB::table('notas')->where($where)->first();

		if($notas != null){//Se entrar no IF estou executando o CASO 1

			//Estrou buscando no banco as informações do aluno e disciplina para manitular na view
			$aluno = Aluno::find($id_aluno);
			$disciplina = Disciplina::find($id_disciplina);
			//Esse array tem todas as informações que eu vou utilizar na view
			$informacoes = ['aluno' => $aluno,'disciplina' => $disciplina, 'ano_letivo' => $ano_letivo ];
			return view('nota.edita-nota',['notas' => $notas,'informacoes' => $informacoes]);

		}else{//Se entrar no ELSE estou executando o CASO 2

			$nota = new Nota;
			$nota->id_aluno = $request->id_aluno;
			$nota->id_disciplina = $request->id_disciplina;
			$nota->ano_letivo = $request->ano_letivo;
			$nota->save();
			return ControllerNota::busca_nota($request);

		}
		
	}


	public function salva_nota(Request $request){

		$id_aluno = $request->id_aluno;
		$id_disciplina = $request->id_disciplina;
		$ano_letivo = $request->ano_letivo;

		//Array com as condições que seram utilizadas no SELECT feito no banco pelo Query Builder
		$where = ['id_aluno' => $id_aluno,
				  'id_disciplina' => $id_disciplina, 
				  'ano_letivo' => $ano_letivo];

		//Na linha abaixo eu estou trazendo todas as informações que atendem as condições do array $where
		$temp = DB::table('notas')->where($where)->first();

		$nota = new Nota;
		$nota = Nota::find($temp->id); 
		$nota->p_bim_1nota = $request->p_bim_1nota;
		$nota->p_bim_1trab = $request->p_bim_1trab;
		$nota->p_bim_2nota = $request->p_bim_2nota;
		$nota->p_bim_2trab = $request->p_bim_2trab;
		$nota->p_bim_recu = $request->p_bim_recu;
		$nota->s_bim_1nota = $request->s_bim_1nota;
		$nota->s_bim_1trab = $request->s_bim_1trab;
		$nota->s_bim_2nota = $request->s_bim_2nota;
		$nota->s_bim_2trab = $request->s_bim_2trab;
		$nota->s_bim_recu = $request->s_bim_recu;
		$nota->t_bim_1nota = $request->t_bim_1nota;
		$nota->t_bim_1trab = $request->t_bim_1trab;
		$nota->t_bim_2nota = $request->t_bim_2nota;
		$nota->t_bim_2trab = $request->t_bim_2trab;
		$nota->t_bim_recu = $request->t_bim_recu;
		$nota->q_bim_1nota = $request->q_bim_1nota;
		$nota->q_bim_1trab = $request->q_bim_1trab;
		$nota->q_bim_2nota = $request->q_bim_2nota;
		$nota->q_bim_2trab = $request->q_bim_2trab;
		$nota->q_bim_recu = $request->q_bim_recu;
		$nota->save();
		return redirect('/filtro-busca-nota'); 
	}	

}

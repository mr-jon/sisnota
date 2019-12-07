<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerAluno extends Controller
{
	public function cadastro(Request $request){

		$aluno = new Aluno;
		$aluno->nome = $request->nome;
		$aluno->data_nascimento = $request->datanascimento;
		$aluno->endereco = $request->endereco;
		$aluno->bairro = $request->bairro;
		$aluno->cep = $request->cep;
		$aluno->cidade = $request->cidade;
		$aluno->estado = $request->estado;
		$aluno->telefone = $request->telefone;
		$aluno->nacionalidade = $request->nacionalidade;
		$aluno->naturalidade = $request->naturalidade;
		$aluno->cpf = $request->cpf;
		$aluno->nome_pai = $request->nome_pai;
		$aluno->cpf_pai = $request->cpf_pai;
		$aluno->nome_mae = $request->nome_mae;
		$aluno->cpf_mae = $request->cpf_mae;
		$aluno->save();
		return ControllerAluno::lista();
	}

	public function edita(Request $request){

		$id = $request->id;
		$aluno = new Aluno;
		$dados = $aluno->find($id);
		return view('aluno.edita-aluno',['dados' => $dados]);

	}

	public function atualiza(Request $request){

		$id = $request->id;
		$aluno = new Aluno;
		$aluno = Aluno::find($id);
		$aluno->nome = $request->nome;
		$aluno->data_nascimento = $request->datanascimento;
		$aluno->endereco = $request->endereco;
		$aluno->bairro = $request->bairro;
		$aluno->cep = $request->cep;
		$aluno->cidade = $request->cidade;
		$aluno->estado = $request->estado;
		$aluno->telefone = $request->telefone;
		$aluno->nacionalidade = $request->nacionalidade;
		$aluno->naturalidade = $request->naturalidade;
		$aluno->cpf = $request->cpf;
		$aluno->nome_pai = $request->nome_pai;
		$aluno->cpf_pai = $request->cpf_pai;
		$aluno->nome_mae = $request->nome_mae;
		$aluno->cpf_mae = $request->cpf_mae;
		$aluno->save();
		return redirect('/lista-aluno');
	}

	public function apaga(Request $request){

		$id = $request->id;
		$aluno = new Aluno;
		$aluno = Aluno::find($id);
		$aluno->delete();
		return ControllerAluno::lista();
	
	}

	public function lista(){
		$aluno = new Aluno;
		$dados = $aluno->all();
		return view('aluno.lista-aluno',['dados' => $dados]);
	}

}

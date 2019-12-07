<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nota;
use App\Aluno;

use Barryvdh\DomPDF\Facade as PDF;

class ControllerRelatorio extends Controller
{
    public function relatorio() {
		$notas = Nota::with('aluno')->get();
		$pdf = PDF::loadView('relatorio.notas', compact('notas'));
		return $pdf->stream('notas.pdf');
	}


	public function lista_aluno(){
		$aluno = new Aluno;
		$dados = $aluno->all();
		return view('relatorio.boletim-individual',['dados' => $dados]);
	}

	public function gera_boletim(Request $request){
		$id_aluno = $request->id_aluno;
		$ano_letivo = $request->ano_letivo;
		
		$where = ['id_aluno' => $id_aluno,'ano_letivo' => $ano_letivo];

		$dados = DB::table('notas')
            ->join('alunos', 'notas.id_aluno', '=', 'alunos.id')
            ->join('disciplinas', 'notas.id_disciplina', '=', 'disciplinas.id')
            ->select('notas.*', 'disciplinas.nome_disciplina', 'alunos.nome')
            ->where($where)->get();

        $pdf = PDF::loadView('relatorio.pdf-boletim-individual', compact('dados'));
		return $pdf->stream('notas.pdf');

	}

}

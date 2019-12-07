<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecionada extends Model
{
	protected $table = 'lecionadas';
	public $timestamps = false;

	public function professores(){
		return $this->belongsTo(Professor::class,'id_professor')->withDefault();
	}

	public function turmas(){
		return $this->belongsTo(Turma::class,'id_turma')->withDefault();
	}

	public function disciplinas(){
		return $this->belongsTo(Disciplina::class,'id_disciplina')->withDefault();
	}

}

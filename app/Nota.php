<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model{

	protected $table = 'notas';
	public $timestamps = false;

	public function aluno(){

		return $this->belongsTo('App\Aluno','id_aluno','id');

	}

	public function disciplina(){

		return $this->belongsTo('App\Disciplina','id_disciplina','id');

	}

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';
	public $timestamps = false;

	public function alunos(){
		return $this->belongsTo(Aluno::class,'id_aluno');
	}
}

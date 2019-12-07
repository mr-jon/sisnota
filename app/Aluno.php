<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //protected $dateFormat = 'U';
	protected $table = 'alunos';
	public $timestamps = false;

	public function matricula(){

		return $this->hasMany('App\Matricula','id_aluno','id');
	}

	public function nota(){

		return $this->hasMany('App\Nota','id_aluno','id');
	}

}

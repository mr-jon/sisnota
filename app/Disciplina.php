<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
	protected $table = 'disciplinas';
	public $timestamps = false;

	public function lecionada(){
		return $this->hasMany('App\Lecionada','id_disciplina','id');
	}

	public function nota(){

		return $this->hasMany('App\Nota','id_disciplina','id');
	}
}

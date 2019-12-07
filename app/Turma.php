<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
    public $timestamps = false;

    public function lecionadas(){
    	return $this->hasMany(Lecionada::class, 'id_turma');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'professores';
    public $timestamps = false;

    public function lecionadas(){
    	return $this->hasMany(Lecionada::class, 'id_professor');
    }

}

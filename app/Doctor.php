<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor  extends Authenticatable
{
        public function pacientes(){
        return $this->belongsToMany('\App\Paciente','doctor_paciente')
            ->withPivot('id_Paciente','status'); 
    }
}

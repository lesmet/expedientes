<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public function doctors(){
        return $this->belongsToMany('\App\Doctor','doctor_paciente')
            ->withPivot('id_Doctor','status');
    }
 

}

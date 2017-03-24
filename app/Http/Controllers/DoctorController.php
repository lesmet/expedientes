<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DoctorController extends Controller
{
   use AuthenticatesUsers;
   protected $loginView ='Doctores.login';
   
  protected $guard='doctores';
  
  public function authenticated(){
      return redirect ('doctor/area');
  }
  
  function __construct (){
      $this->middleware('auth:doctores',['only' =>['secret']]);
  }
  
  public function secret(){
      return 'hola';
  }
  
}

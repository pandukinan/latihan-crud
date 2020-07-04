<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
  public function welcome (){
  return view ('welcome');
}
  public function data_table (){
  return view ('adminlte.data_table');
}
};

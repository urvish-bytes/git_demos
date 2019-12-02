<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

class User_Controller extends Controller{

 public $restful = true;

 public function get_index(){
  return View::make('users.index');
 }
}


?>
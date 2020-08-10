<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
   public function list()
   {
       $clients = ['Osée', 'Mukaya', 'Tshimanga'];
       return view('clients.index',['clients'=>$clients]);
   }
}

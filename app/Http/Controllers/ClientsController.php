<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
   public function list()
   {
       $clients = Client::all();
       return view('clients.index',['clients'=>$clients]);
   }
   public function store()
   {
    request()->validate([
        'pseudo'=>'required',
        'email'=>'required|email'
    ]);
    $pseudo = request('pseudo');
    $email = request('email');

    $client = new Client();
    $client->name = $pseudo;
    $client->email = $email;

    $client->save();
    return back();
   }
}

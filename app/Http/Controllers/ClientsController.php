<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Entreprise;
class ClientsController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }


    public function create(){
        $client = new Client();
        $entreprises = Entreprise::all();
        return view('clients.create', compact('entreprises', 'client')); 
    }

    public function store(){
        
        // It works to sauf que y'a pas de validation. si on a des required dans les champs input on peut directement utiliser ca
        // $data = request([
        //     'name',
        //     'email',
        //     'status'
        // ]);

        $data = request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'status'=> 'required',
            'entreprise_id' => 'required',
        ]);

        //1er methode

        // $pseudo = request('name');
        // $email = request('email');
        // $status = request('status');
        // $client = new Client();
        // $client->name = $pseudo;
        // $client->email = $email;
        // $client->status = $status;
        // $client->save();

        Client::create($data);
        return back();
    }

    public function show(Client $client){
        // $client = Client::where('id', $client)->firstOrFail();

        return view('clients.show', compact('client'));
    }


    public function edit(Client $client){
        $entreprises = Entreprise::all();
        return view('clients.edit', compact('client', 'entreprises'));
    }

    public function update(Client $client){
        $data = request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'status'=> 'required',
            'entreprise_id' => 'required',
        ]);

        $client ->update($data);

        return redirect('clients/'.$client->id);
    }

    public function destroy(Client $client) {
        $client->delete();
        return redirect('clients');
    }
}

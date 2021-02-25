<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;

use Illuminate\Http\Request;

class EntreprisesController extends Controller
{
    public function list(){
        $entreprises = Entreprise::all();
        return view('entreprises.index', compact('entreprises'));
    }

    public function create(){
        $name = request('name');

        $entreprise = new Entreprise();
        $entreprise->name = $name;

        $entreprise->save();
        return back();
    }
}

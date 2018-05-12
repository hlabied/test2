<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personne;
class ControllerPersonne extends Controller
{
  public function show()
  {

$personnes = Personne::all();


return view('show',['personnes'=>$personnes]);

  }

  public function create()
  {
  return view('create');
  }

  public function store(Request $req)
  {
    // $req->validate([
    //     'nom' => 'required|min:5',
    //     'prenom' => 'required',
    //     'age' => 'required',
    // ]);

  $messages=  $req->validate([
      'nom' => 'required|min:3',
      'prenom' => 'required',
      'age' => 'required',
    ]);

$personne = new personne();
$personne->nom = $req->nom;
$personne->prenom = $req->prenom;
$personne->age = $req->age;
$personne->save();
return redirect('personnes');

  }
}

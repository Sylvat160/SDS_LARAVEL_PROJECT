<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Tuteur;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class UfrController extends Controller
{
    public function index () {

    
        return view('authentification');
    }
    public function inscriA () {
       
        return view('inscriA');
    }
    public function acceuil () {
        return view('acceuil');
    }
    public function liste () {
        $etudiants = Etudiant::All();
       
        return view('liste', ['etudiants' => $etudiants]);
    }

    public function edit ($id) {
        $etudiant = Etudiant::find($id);
        return view('modifier', ['etudiant' => $etudiant]);
    }

    public function tuteur ($id) {
        $tuteurs = Tuteur::find($id) ;
        return view('tuteur', ['tuteurs' => $tuteurs]); 
    }
}

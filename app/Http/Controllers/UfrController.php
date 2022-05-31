<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class UfrController extends Controller
{
    public function index () {

        // $sds_la = \App\Ufr::where('nomUfr', 'SDS-LA')->first();
        $sds_la = Admin::all();
        dd($sds_la);

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
}

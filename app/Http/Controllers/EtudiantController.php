<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EtudiantController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nomE'=> 'required|min:5|max:50',
            'date_naissance'=>'required',
            'mailE'=>'required|unique:etudiants',
            'numeroE'=>['required', 'min:8' , 'max:20', ],

        ]);
        
        $filename=time().'.'.$request->avatar->extension();
       
        // $name=Storage::disk('local')->put('avatars' , $request->file('avatar'));
        $request->file('avatar')->storeAs('avatar' , $filename , 'public');
        
        

        //dd($request->input('nomE'));
        Etudiant::create([
            'nomE'=>$request->input('nomE'),
            'prenomE' =>$request->input('prenomE'),
            'date_naissance' =>$request->input('date_naissance'),
            'mailE' => $request->input('mailE'),
            'numeroE'=>$request->input('numeroE'),
        ]);

        return back()->with('success' , 'Etudiant ajoute avec succes');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\FormationMail;
use Illuminate\Support\Facades\Mail;
use Session;

class FormationMailController extends Controller
{
    public function sendMail(Request $request){

        $data = [
            'nom' => $request->nom,
            'postnom' => $request->postnom,
            'nom_ecole' => $request->nomEcole,
            'telephone' => $request->telephone,
            'mail' => $request->email,
            'commune' => $request->commune,
            'districk' => $request->districk,
            'ville' => $request->ville,
            'province' => $request->province,
        ];
        //Mail::to(['kicprojet21@gmail.com','fomation@yeccolapp.education'])->send(new FormationMail($data));
        //return back();
        Session::flash('SendMail',"Le mail envoyer avec succes");
        return back();//$data; //"send to mail";
    }
}

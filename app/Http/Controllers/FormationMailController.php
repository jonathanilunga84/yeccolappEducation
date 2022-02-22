<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\FormationMail;
use Illuminate\Support\Facades\Mail;
use Session;

class FormationMailController extends Controller
{
    public function sendMail(Request $request){

        $validator = validator::make($request->all(),[
            "identite"=>"required|min:2|max:50",
            "telephone"=>"required|min:9|max:50",
            "email"=>"max:50",
            "categorie"=>"required|max:50",
            "commune"=>"required|min:2|max:50",
            "district"=>"required|max:50",
            "ville"=>"required|min:2|max:50",
            "province"=>"required|min:2||max:50"

        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>0, 'error'=>$validator->messages()]);
        }
        else{
            $data = [
                'identite' => $request->identite,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'categorie'=>$request->categorie,
                'commune' => $request->commune,
                'district' => $request->district,
                'ville' => $request->ville,
                'province' => $request->province,
            ];
            Mail::to(['kicprojet21@gmail.com','formation@itmafrica.com','formation@yeccolapp.education'])->send(new FormationMail($data));
            return response()->json(['status'=>1, 'messageSucces'=>'Votre projet est bien envoyer']);
        }

       /* $data = [
            'nom' => $request->nom,
            'postnom' => $request->postnom,
            'nom_ecole' => $request->nomEcole,
            'telephone' => $request->telephone,
            'mail' => $request->email,
            'commune' => $request->commune,
            'districk' => $request->districk,
            'ville' => $request->ville,
            'province' => $request->province,
        ];*/
    //Mail::to(['kicprojet21@gmail.com','fomation@yeccolapp.education'])->send(new FormationMail($data));
        //return back();
        //Session::flash('SendMail',"Le mail envoyer avec succes");
        //return back();//$data; //"send to mail";
    }
}

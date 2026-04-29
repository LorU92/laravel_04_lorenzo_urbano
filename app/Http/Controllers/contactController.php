<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class contactController extends Controller
{
    public function contattaci(){
        return view('contattaci');
    }

    public function thankYou(){
        return view('thankyou');
    }

    public function submit(Request $request){
        // dd($request->all());

        // SALVO IN VARIABILI I DATI INSERITI DALL'UTENTE
        $name = $request->input('userName');
        $email = $request->input('userEmail');
        $message = $request->input('userMessage');


        // logica per spedire mail all'utente
        // Manda la mail a $email e spedisci il contenuto di ContactMail(dati utili per la view di risposta)
        Mail::to($email)->send(new ContactMail($name, $email, $message));

        // REINDIRIZZATI AD UNA NUOVA PAGINA
            return redirect()->route('thankyou.page');

        // RENDIRIZZATI AD UNA PAGINA E CON AVVISO 
        // return redirect()->route('homepage')->with('status', 'mail inviata con successo');
    }


}

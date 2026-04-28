<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutusController extends Controller{

    public $arrayAboutus=[
        ['id'=>1, 
        'name'=>"Lorenzo", 
        'surname'=>'Urbano', 
        'ruolo'=>'Direttore artistico', 
        'descrizione'=>'Lorenzo Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil quia est vel voluptatum sit error cupiditate impedit dolore, earum iusto magnam vero odio. Et, facilis. Quis accusantium nostrum velit at.'],

        ['id'=>2, 
        'name'=>"Anastasia", 
        'surname'=>'Campailla', 
        'ruolo'=>'Direttore artistico',
        'descrizione'=>'Anastasia Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil quia est vel voluptatum sit error cupiditate impedit dolore, earum iusto magnam vero odio. Et, facilis. Quis accusantium nostrum velit at.'],

        ['id'=>3, 
        'name'=>"Stefania", 
        'surname'=>'Urbano', 
        'ruolo'=>'Social Media',
        'descrizione'=>'Stefania Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil quia est vel voluptatum sit error cupiditate impedit dolore, earum iusto magnam vero odio. Et, facilis. Quis accusantium nostrum velit at.'],

        ['id'=>4, 
        'name'=>"Federica", 
        'surname'=>'Urbano', 
        'ruolo'=>'Social Media',
        'descrizione'=>'Federica Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil quia est vel voluptatum sit error cupiditate impedit dolore, earum iusto magnam vero odio. Et, facilis. Quis accusantium nostrum velit at.']

    ];

    public function aboutus() {
        return view('aboutus', ['persone'=>$this->arrayAboutus]); 
    }

    public function chisiamoPersone($_idPersona){
        // per estrapolare al click del bottone solo i dati dello studente di cui ho cliccato il bottone
        foreach ($this->arrayAboutus as $persona) {
            if ($_idPersona == $persona['id']) {
                // fammi vedere la vista che si porta con se il parametro (ovvero il singolo dato dell'array quindi $persona dell'array)
                return view('chisiamo.personaAbout', ['aboutPersona'=>$persona]);
            }
        }
    }
}

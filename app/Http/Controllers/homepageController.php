<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller{

    public $arrayArticoli=[
        ['id'=>1, 
        'titolo'=>"Gli eredi dei pittori </br> dell'800.", 
        'sottotitolo'=>'PALAZZO REALE, MILANO', 
        'testo'=>'ALorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quia facere atque exercitationem earum at labore quam, enim rem possimus, alias ut deleniti voluptatem? Culpa adipisci consequatur voluptatibus suscipit vitae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam nulla soluta quos quibusdam unde explicabo qui. Modi assumenda placeat iure, quisquam voluptas cumque eius et eveniet, doloribus repellendus officiis vel!'],

        ['id'=>2, 
        'titolo'=>"Un capolavoro </br> torna in Italia.", 
        'sottotitolo'=>'REGGIA DI VENARIA, VENARIA', 
        'testo'=>'BLorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quia facere atque exercitationem earum at labore quam, enim rem possimus, alias ut deleniti voluptatem? Culpa adipisci consequatur voluptatibus suscipit vitae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam nulla soluta quos quibusdam unde explicabo qui. Modi assumenda placeat iure, quisquam voluptas cumque eius et eveniet, doloribus repellendus officiis vel!'],

        ['id'=>3, 
        'titolo'=>"Vivere come una artista. </br> Vestire come un artista.", 
        'sottotitolo'=>'PALAZZO REALE, MILANO', 
        'testo'=>'CLorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis quia facere atque exercitationem earum at labore quam, enim rem possimus, alias ut deleniti voluptatem? Culpa adipisci consequatur voluptatibus suscipit vitae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam nulla soluta quos quibusdam unde explicabo qui. Modi assumenda placeat iure, quisquam voluptas cumque eius et eveniet, doloribus repellendus officiis vel!']
    ];

    public function homepage() {
        return view('homepage', ['articoli'=>$this->arrayArticoli]); 
    }

    public function news() {
        return view('news', ['articoli'=>$this->arrayArticoli]); 
    }

    public function articoliCompleti($_idArticoli){
        // per estrapolare al click del bottone solo i dati dello studente di cui ho cliccato il bottone
        foreach ($this->arrayArticoli as $articolo) {
            if ($_idArticoli == $articolo['id']) {
                // fammi vedere la vista che si porta con se il parametro (ovvero il singolo dato dell'array quindi $articolo dell'array)
                return view('articoli.articolo', ['articolo'=>$articolo]);
            }
        }
    }

}

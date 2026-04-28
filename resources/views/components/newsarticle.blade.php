<div class="linea"></div>
<div class="col-12 col-md-6 articletitle-custom">
    <h1 class="titlearticle">{!!$titolo!!}</h1>
    <h3 class="sottotitlearticle">{{$sottotitolo}}</h3>
    <button class="button-news">
        <a href="{{route('articoloDettaglio', ['_idArticoli'=>$id])}}" ><h4>LEGGI TUTTO<h4></a>
        </button>
    </div>
    <div class="col-12 col-md-6 articletext-custom">{{$testo}}</div>
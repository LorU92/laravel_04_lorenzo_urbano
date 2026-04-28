<div class="col-12 col-md-3 d-flex justify-content-center my-5">
    <div class="card cardcustom-about" style="width: 18rem;">
        <img src="https://picsum.photos/200/150" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$name}} {{$surname}}</h5>
            <p class="card-text">{{$descrizione}}</p>
            <button class="button-about">
                <a href="{{route('chisiamoPersona', ['_idPersona'=>$id])}}" ><h4 class="textscopriabout">SCOPRI DI PIU'</h4></a>
            </button>
        </div>
    </div>
</div>
<x-layout>

    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- header -->
    <div class="container-fluid header-container">
        <div class="row">
            <x-hdtitle></x-hdtitle>
            <x-hdpink></x-hdpink>
        </div>
    </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    <!-- section articoli -->
    <section class="container-fluid">
        <h1 class="article-custom">NEWS</h1>
        <!-- articoli row -->
         <div class="row">
            @foreach($articoli as $articolo)
                  <x-newsarticle
                    titolo="{!!$articolo['titolo']!!}"
                    sottotitolo="{{$articolo['sottotitolo']}}"
                    id="{{$articolo['id']}}"
                    testo="{{$articolo['testo']}}">
                </x-newsarticle>
            @endforeach
            <div class="linea"></div>
         </div>
    </section>
    <!-- numeri incrementali -->
    <section class="container">
        <div class="row justify-content-center">
            <h3 class="title-number">ARTE IN NUMERI</h3>
            <div class="col-12 d-flex flex-column justify-content-center">
                <p class="text-number"><span class="numeri" id="firstnumber">0</span>MUSEI NEL MONDO RICONOSCIUTI</p>
                <p class="text-number"><span class="numeri" id="secondnumber">0</span>OPERE D'ARTE RICONOSCIUTE</p>
                <p class="text-number"><span class="numeri" id="thirdnumber">0</span>ARTISTI INTERNAZIONALI RICONOSCIUTI</p>
            </div>
        </div>
    </section>
    <!-- footer -->
    <x-footer></x-footer>

</x-layout>
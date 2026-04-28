<x-layout>

    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- header -->
    <div class="container-fluid header-container">
        <div class="row">
            <x-hdtitle></x-hdtitle>
        </div>
    </div>
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
    <!-- footer -->
    <x-footer></x-footer>

</x-layout>
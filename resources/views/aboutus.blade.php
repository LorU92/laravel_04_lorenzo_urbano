<x-layout>

    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- header -->
    <div class="container-fluid header-container">
        <div class="row">
            <x-hdtitle></x-hdtitle>
        </div>
    </div>
    <!-- abut us titolo -->
    <section class="container-fluid">
        <h1 class="article-custom">ABOUT US</h1>
        <div class="linea"></div>
        <!-- about us row -->
        <div class="row">
              @foreach( $persone as $persona )
                <x-aboutperson
                name="{{$persona['name']}}"
                surname="{{$persona['surname']}}"
                id="{{$persona['id']}}"
                descrizione="{{$persona['descrizione']}}">      
                </x-aboutperson>
              @endforeach
        </div>
    <!-- footer -->
    <x-footer></x-footer>

</x-layout>
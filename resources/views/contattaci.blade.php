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
        <h1 class="article-custom">CONTATTACI</h1>
        <div class="linea"></div>
        <!-- contattaci -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                {{-- FORM --}}
                {{-- ELEMENTI LATO BACKEND DI UN FORM:
                NEGLI INPUT
                1. ATTRIBUTO NAME - ETICHETTA
                NEL TAG DI APERTURA DEL FORM
                2. ATTRIBUTO METHOD - VALORE GET O POST 
                3. ATTRIBUTO ACTION - VALORE ROTTA DELLA FUNZIONE CHE DEVE SCATTARE NEL MOMENTO IN CUI IL CLIENTE CLICCA IL BOTTONE / SI RICHIAMA ATTRAVERSO LA ROTTA POST. NON RICHIAMI DIRETTAMENTE LA LOGICA (CONTROLLER) MA LA ROTTA.
                
                csrf (cross site request forgery--}}

                <form class="p-5 my-5 form-custom rounded" method="POST" action="{{route('contact.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label form-label-custom">NOME</label>
                        <input type="text" class="form-control form-control-custom" id="userName" placeholder="" name="userName">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label form-label-custom">EMAIL</label>
                        <input type="email" class="form-control form-control-custom" id="userEmail" aria-describedby="emailHelp" placeholder="" name="userEmail">
                    </div>
                    <div class="mb-3">
                        <label for="userMessage" class="form-label form-label-custom">SCRIVICI</label>
                        <textarea name="userMessage" class="form-control form-control-custom" id="userMessage" cols="30" rows="10" placeholder=""></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-button-custom form-label-custom">INVIA</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- footer -->
        <x-footer></x-footer>
        
    </x-layout>
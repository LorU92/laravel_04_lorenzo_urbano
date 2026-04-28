<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$aboutPersona['name']}} {{$aboutPersona['surname']}}</title>
    <!-- Swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <!-- Boodstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Custom css -->
    @vite(['resources/css/00_FILECSS.css', 'resources/js/INDEX.js'])
    <!-- Font code -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <div class="navbar-brand"></div>
            <button class="navbar-toggler button-collapse-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-icon-custom"></div>
            </button>
            <div class="collapse navbar-collapse collapse-custom" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('homepage')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('news')}}">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutus')}}">ABOUT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header -->
    <div class="container-fluid header-container">
        <div class="row">
            <div class="col-12 title">
                <span class=" col-12 title-custom">RIVIVI L'ARTE. ASCOLTA L'ARTE. IMPARA L'ARTE.</span>
            </div>
            <div class="col-12 sottotitolo-custom">Rivivi la storia di un artista tra schizzi, opere e racconti narrativi. Scopri le sue opere e la sua vita.</div>
            <div class="col-12 imagetop-box">
                <img src="{{ asset('media/image01.jpg') }}" alt="lei" class="imagetop">
            </div>
        </div>
    </div>
    <!-- articolo -->
    <section class="container-fluid">
         <div class="row">
                <div class="linea"></div>
                <div class="col-12 col-md-6 articletitle-custom">
                    <h1 class="titlearticle">{{$aboutPersona['name']}}</h1>
                    <h2 class="titlearticle">{{$aboutPersona['surname']}}</h2>
                </div>
                <div class="col-12 col-md-6 articletext-custom">
                    <p>{{$aboutPersona['ruolo']}}</p>                  
                </div>
            <div class="linea"></div>
         </div>       
    <!-- footer -->
     <footer class="cointainer-fluid">
        <div class="row footer-row">
            <div class="col-12 col-md-6">
                 <div class="footer-title">artissima!</div>
                 <div class="footer-title">!amissitra</div>
            </div>
            <div class="col-12 col-md-6">
                <div class="footer-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam praesentium rerum consequatur facilis nostrum, quidem fuga accusamus veniam ea dolorum. Saepe placeat adipisci hic. Magnam minus alias ullam eligendi quidem!</p>
                    <p class="contact m-0">CONTATTI</p>
                    <p class="email m-0 d-flex align-items-center"><i class="fa-regular fa-envelope fa-2x"></i>artissima@gmail.com</p>
                    <p class="telefono m-0 d-flex align-items-center"><i class="fa-solid fa-phone fa-2x"></i>+39 329 4566789</p>
                </div>
            </div>
        </div>
     </footer> 
    <!-- Swipe js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <!-- Boodstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- Fantawesome -->
    <script src="https://kit.fontawesome.com/49767f84ef.js" crossorigin="anonymous"></script>
</body>
</html>
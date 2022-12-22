@extends('layouts.app')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('Images/6.png') }}" class="d-block w-100 carrusel__site" alt="...">
        <div class="carousel-caption text-start d-none d-md-block animate__animated animate__backInLeft">
          <div class="animate__animated animate__flip">
              <img src="{{ asset('images/logo.png') }}" class="size__icon animate__animated animate__flip" width="400px" alt="icon login">
          </div>
          <br/>
          <br/>
          <br/>
          <h5>Bienvenidos</h5>
          <p>Algún contenido placeholder representativo para la primera diapositiva.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Images/5.png') }}" class="d-block w-100 carrusel__site" alt="...">
        <div class="carousel-caption text-start  d-none d-md-block animate__animated animate__backInLeft">
          <h5>Etiqueta de la segunda diapositiva</h5>
          <p>Algún contenido placeholder representativo para la segunda diapositiva.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Images/4.png') }}" class="d-block w-100 carrusel__site" alt="...">
        <div class="carousel-caption text-start d-none d-md-block animate__animated animate__backInLeft">
          <h5>Etiqueta de la tercera diapositiva</h5>
          <p>Algún contenido placeholder representativo para la tercera diapositiva.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
</div>



  <div class="text-center img__site animate__animated animate__flipInY">
    <img src="images/logo2.png" width="350px" class="rounded" alt="...">
  </div>
 




  <div>
    <div class="container">


     <div class="row" style="margin-bottom: 200px;">
      <div class="col-md-4 push2 card-flat ">
        <center>
          <h1><i class="fas fa-building"></i></h1>
          <br/>
          <h1>Misión</h1>
          <p class="align-middle">Fomentar el desarrollo económico y social integral de nuestros clientes y colaboradores a través de servicios financieros creados a la medida de sus necesidades</p>
        </center>
      </div>


      <div class="col-md-4 push2 card-flat">
        <center>
          <h1><i class="fas fa-pen-nib"></i></h1>
          <br/>
          <h1>Valores</h1>
          <p>Respeto:<br/> Es vital para alcanzar nuestras metas como empresa, es la base del trabajo en equipo.<br/>
            Compromiso:<br/>Somos una empresa mexicana comprometida con la economía y el impulso de los micronegocios<br/>
            Liderazgo:<br/>Innovación, constante mejora, organización y motivación nos permiten marcar la diferencia.</p>
        </center>
      </div>


      <div class="col-md-4 push2 card-flat">
        <center>
          <h1><i class="fas fa-briefcase"></i></h1>
          <br/>
          <h1>Visión</h1>
          <p>Ser una empresa sólida y sustentable que permita el desarrollo integral de nuestros colaboradores y socios otorgando servicios financieros basados en la calidad y valores siendo la mejor opción en el país</p>
        </center>
      </div>
     </div>
     



     <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-bottom: 200px;">
      
      <div class="push cub__size " style="background-color: #32394B;">
        <h1 class="fw-light font__cub " >Área Informativa</h1>
      </div>
     
      <div class="col">
        <div class="card push">
          <img src="{{ asset('Images/post1.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Festejados </h5>
            <p class="card-text">Este Diciembre Fincre Laguna felicta a los cumpleañeros de este mes.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card push">
          <img src="{{ asset('Images/post2.jpeg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Aviso Importante</h5>
            <p class="card-text">Días de descanso para el mes de Diciembre.</p>
          </div>
        </div>
      </div>
      {{-- <div class="col">
        <div class="card push">
          <img src="{{ asset('Images/flayer.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Anuncio</h5>
            <p class="card-text">Ya contamos con pagina oficial de facebook, busca la como: "Fincre Laguna"</p>
          </div>
        </div>
      </div> --}}
      </div>



    </div>
  </div>



  
<div class="d-md-block d-none">
  <div class="card-group text-center">
    <div class="card text-white" style="background-color: #55728400;" >
      <img src="{{ asset('Images/7.png') }}" class="card-img" alt="..." style="height:700px;object-fit: cover;">
      <div class="card-img-overlay" style="transform: translateY(40%);">

        <figure class="animate__animated animate__backInDown">
            <blockquote class="blockquote">
              <h2 class="fw-bold">CONSTRUYE</h2>
            </blockquote>
            {{-- <figcaption class="blockquote-footer">
              Alguien fomoso en <cite title="Título fuente">Título fuente</cite>
            </figcaption> --}}
          </figure>
      </div>
    </div>

  <div class="card text-white" style="background-color: #55728400;">
    <img src="{{ asset('Images/8.png') }}" class="card-img" alt="..." style="height:700px;object-fit: cover;">
    <div class="card-img-overlay" style="transform: translateY(40%);">
        <figure class="animate__animated animate__backInDown">
            <blockquote class="blockquote">
              <h2 class="fw-bold">CONQUISTA</h2>
            </blockquote>
            {{-- <figcaption class="blockquote-footer">
              Alguien fomoso en <cite title="Título fuente">Título fuente</cite>
            </figcaption> --}}
          </figure>
    </div>
  </div>

  <div class="card text-white" style="background-color: #55728400;">
    <img src="{{ asset('Images/9.png') }}" class="card-img" alt="..." style="height:700px;object-fit: cover;">
    <div class="card-img-overlay" style="transform: translateY(40%);">
        <figure class="animate__animated animate__backInDown">
            <blockquote class="blockquote">
              <h2 class="fw-bold">GANA</h2>
            </blockquote>
            {{-- <figcaption class="blockquote-footer">
              Alguien fomoso en <cite title="Título fuente">Título fuente</cite>
            </figcaption> --}}
        </figure>
    </div>
  </div>
</div>
</div>


<div class="container-fluid footer__size" style="background-color:#32394B;">
  <div class="container text-light">

    <div class="row">
      <div class="col-3">
        <h5>Contactanos</h5>
        <a class="nav-link active fw-light fs-6" aria-current="page" href="https://www.facebook.com/FincreFinanciera"><i class="fab fa-facebook-f"></i> &nbsp;Fincre Laguna</a>
        <a class="nav-link active fw-light fs-6" aria-current="page" href="#"><i class="fas fa-envelope"></i> &nbsp;paginaweb@fincrelaguna.com</a>
      </div>
      
      <div class="col-6">
        <h5>Dirección</h5>
        <p class="font_little fs-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti fugiat laudantium dicta architecto officia amet. Labore, eum sit. Ipsa dicta corrupti aut iste iure commodi veniam nam fugit eaque exercitationem!</p>
      </div>

      <div class="col-md-3">
        <h5>Telefonos</h5>
        <p class="font_little fs-8"><b>Corporativo</b>733-00-00</p>
        <p class="font_little fs-8"><b>Suc. Torreón</b>733-00-00</p>
        <p class="font_little fs-8"><b>Suc. Goméz</b>733-00-00</p>
        <p class="font_little fs-8"><b>Suc. Allende</b>733-00-00</p>
      </div>
    </div>

  </div>
</div>



<!--INICIO BUTON AREA-->

{{-- <div class="pos__btnBack">

<div class="wrapper"> 
    <p class="btnBack" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></p>
</div>
    

    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
            </filter>
        </defs>
    </svg>

</div> --}}

<!--FIN BUTON AREA-->   

@endsection
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
        <img src="{{ asset('Images/1.png') }}" class="d-block w-100 carrusel__site" alt="...">
        <div class="carousel-caption text-start d-none d-md-block">
          <h5>Etiqueta de la primera diapositiva</h5>
          <p>Algún contenido placeholder representativo para la primera diapositiva.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Images/2.png') }}" class="d-block w-100 carrusel__site" alt="...">
        <div class="carousel-caption text-start  d-none d-md-block">
          <h5>Etiqueta de la segunda diapositiva</h5>
          <p>Algún contenido placeholder representativo para la segunda diapositiva.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Images/3.png') }}" class="d-block w-100 carrusel__site" alt="...">
        <div class="carousel-caption text-start d-none d-md-block">
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



  <div class="text-center img__site">
    <img src="images/logo.png" width="350px" class="rounded" alt="...">
  </div>
 




  <div class="">
    <div class="container" >




     <div class="row" style="margin-bottom: 200px;">
      <div class="col-md-4">
        <center>
          <h1><i class="fas fa-building"></i></h1>
          <br/>
          <h1>Misión</h1>
          <p>Fomentar el desarrollo económico y social integral de nuestros clientes y colaboradores a través de servicios financieros creados a la medida de sus necesidades</p>
        </center>
      </div>
      <div class="col-md-4">
        <center>
          <h1><i class="fas fa-pen-nib"></i></h1>
          <br/>
          <h1>Valores</h1>
          <p>Respeto:<br/> Es vital para alcanzar nuestras metas como empresa, es la base del trabajo en equipo.<br/>
            Compromiso:<br/>Somos una empresa mexicana comprometida con la economía y el impulso de los micronegocios<br/>
            Liderazgo:<br/>Innovación, constante mejora, organización y motivación nos permiten marcar la diferencia.</p>
        </center>
      </div>
      <div class="col-md-4">
        <center>
          <h1><i class="fas fa-briefcase"></i></h1>
          <br/>
          <h1>Visión</h1>
          <p>Ser una empresa sólida y sustentable que permita el desarrollo integral de nuestros colaboradores y socios otorgando servicios financieros basados en la calidad y valores siendo la mejor opción en el país</p>
        </center>
      </div>
     </div>
     



     <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-bottom: 200px;">
      
      <div class="bg-dark push cub__size">
        <h1 class="fw-light font__cub " >Área Informativa</h1>
      </div>
     
      <div class="col">
        <div class="card push">
          <img src="{{ asset('Images/3.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title </h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card push">
          <img src="{{ asset('Images/1.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card push">
          <img src="{{ asset('Images/2.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card push">
          <img src="{{ asset('Images/flayer.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      </div>



    </div>
  </div>



  
<div class="d-md-block d-none">
  <div class="card-group text-center">
    <div class="card bg-dark text-white" >
      <img src="{{ asset('Images/3.png') }}" class="card-img" alt="..." style="height:700px;object-fit: cover;">
      <div class="card-img-overlay" style="transform: translateY(40%);">
        {{-- <h5 class="card-title">Título de la tarjeta</h5>
        <p class="card-text">Esta es una tarjeta más amplia con texto de apoyo a continuación como introducción natural a contenido adicional.</p>
        <span class="card-text text-secondary fst-italic">Última actualización hace 3 minutos</span> --}}
        <figure>
            <blockquote class="blockquote">
              <p>Una cita conocida, contenida en un elemento blockquote.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Alguien fomoso en <cite title="Título fuente">Título fuente</cite>
            </figcaption>
          </figure>
      </div>
    </div>

  <div class="card bg-dark text-white">
    <img src="{{ asset('Images/1.png') }}" class="card-img" alt="..." style="height:700px;object-fit: cover;">
    <div class="card-img-overlay" style="transform: translateY(40%);">
        <figure>
            <blockquote class="blockquote">
              <p>Una cita conocida, contenida en un elemento blockquote.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Alguien fomoso en <cite title="Título fuente">Título fuente</cite>
            </figcaption>
          </figure>
    </div>
  </div>

  <div class="card bg-dark text-white">
    <img src="{{ asset('Images/2.png') }}" class="card-img" alt="..." style="height:700px;object-fit: cover;">
    <div class="card-img-overlay" style="transform: translateY(40%);">
        <figure>
            <blockquote class="blockquote">
              <p>Una cita conocida, contenida en un elemento blockquote.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Alguien fomoso en <cite title="Título fuente">Título fuente</cite>
            </figcaption>
        </figure>
    </div>
  </div>
</div>
</div>


<div class="container-fluid bg-dark" style="height:500px;padding-top: 20px;">

  <div class="container text-light">
    <div class="row">
      <div class="col-2">
        <h6>Lorem ipsum dolor, sit amet</h6>
        <p class="font_little">Lorem ipsum dolor sit amet, consectet</p>
      </div>

      <div class="col-2">
        <h6>Lorem ipsum dolor, sit amet</h6>
        <p class="font_little">Lorem ipsum dolor sit amet, consectet</p>
      </div>

      <div class="col-2">
        <h6>Lorem ipsum dolor, sit amet</h6>
        <p class="font_little">Lorem ipsum dolor sit amet, consectet</p>
      </div>

      <div class="col-2">
        <h6>Lorem ipsum dolor, sit amet</h6>
        <p class="font_little">Lorem ipsum dolor sit amet, consectet</p>
      </div>

      <div class="col-2">
        <h6>Lorem ipsum dolor, sit amet</h6>
        <p class="font_little">Lorem ipsum dolor sit amet, consectet</p>
      </div>

      <div class="col-2">
        <h6>Lorem ipsum dolor, sit amet</h6>
        <p class="font_little">Lorem ipsum dolor sit amet, consectet</p>
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
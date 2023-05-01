@extends('layouts.app')
@section('content')
{{-- ALERTAS --}}
@if ($mensaje = Session::get('success'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Movimiento completado de forma correcta","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('PDFwarning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Recuerde llenar todos los campos y que formato permitido de archivos es .pdf","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp

@endif
{{-- ALERTAS --}}

<style>
a{
 color:white; 
}
</style>

<div id="btnBack"></div>  

<div class="mt-4 p__little">
  <br/>
  <br/>
    {{--------------------------- Encabezado de la pagina----------------------}}
    <center class=" mb-3 container bg-p">
            <div class="col-md-12 mb-4">
              <h2 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Visualización de Documentos</h2> 
              <cite title="Título fuente">Analisis de documentos </cite>
            </div>
            <br/>
      </center> 
     
      @csrf

      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center class="mb-4">
      <div class="row mt-2 mb-3">
          <div class="col-md-3 d-none d-md-block"></div>
          <div class="col-md-3 col-6 text-center mt-2">
              <div id="boton1" class="btn push m-0 p-1 sizeItem border-0" onclick="divLogin1()">
                  <div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Distribuidor </h6></div>
              </div>
          </div>
          <div class="col-md-3 col-6 text-center mt-2">
              <div id="boton2" class="btn push m-0 p-1 sizeItem border-0" onclick="divLogin2()">   
                  <div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Aval</h6></div>
              </div> 
          </div>
          <div class="col-md-3 d-none d-md-block"></div>
      </div>


      <div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">

        
                @foreach($vardocumentos as $doc)
                  
                @if($doc->Tipo=="Distribuidor")
                  <div id="caja1" class="card mt-5">
                      <div class="card-header bg-gradient-pink">
                       <h6 class="fw-light">{{$doc->Tipo}}</h6> 
                      </div>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                              <tr>
                                  <th scope="col">No. Distribuidor {{$doc->id}}</th>
                                  <th scope="col">No. Referencia {{$doc->id_tipo}}</th>
                              </tr>
                              <tr>
                                  <th scope="col">Concepto</th>
                                  <th scope="col">Ver</th>
                              </tr>
                              </thead>
                              <tbody class="fs-8">
                              <tr>
                                  <td>Indentificación Oficial</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->identificacion_oficial}}"></a>  
                                  </td>
                              </tr>
                              <tr>
                                  <td>Comprobante de Domicilo</td>
                                  <td>
                                    <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_domicilio}}"></a>
                                  </td>
                              </tr>

                              <tr>
                                  <td>Comprobante de Ingresos</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_ingresos}}"></a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Solicitud de Crédito</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->solicitud_credito}}"></a>
                       
                                  </td>
                              </tr>
                              <tr>
                                  <td>Autorización de Consulta de Buro</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->autorizacion_buro}}"></a>
                                 
                                  </td>
                              </tr>
                              <tr>
                                  <td>Vreficación de Domicilio</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->verificacion_domicilio}}"></a>
                                
                                  </td>
                              </tr>
                              </tbody>
                          </table>

                          <center>
                               <form action="">
                                    <button type="submit" class="btn border-0">
                                      <i class="text-secondary btn fa-solid fa-edit"></i>
                                    </button>
                                </form>
                          </center>
                      </div>
                  </div>
                  @else
                  <div id="caja2" class="card mt-5">
                      <div class="card-header bg-gradient-pink">
                       <h6 class="fw-light">Aval</h6>
                      </div>
                      <div class="card-body">
                          <table class="table">
                          
                              <thead>
                              <tr>
                                  <th scope="col">No. Distribuidor {{$doc->id}}</th>
                                  <th scope="col">No. Referencia {{$doc->id_tipo}}</th>
                                  
                              </tr>
                              <tr>
                                  <th scope="col">Concepto</th>
                                  <th scope="col">Ver</th>
                              </tr>
                              </thead>
                              <tbody class="fs-8">
                              <tr>
                                  <td>Indentificación Oficial</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->identificacion_oficial}}"></a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Comprobante de Domicilo</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_domicilio}}"></a>
                                  </td>
                              </tr>

                              <tr>
                                  <td>Comprobante de Ingresos Aval</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->comprobante_ingresos}}"></a>

                                  </td>
                              </tr>
                              <tr>
                                  <td>Solicitud de Crédito</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->solicitud_credito}}"></a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Autorización de Consulta de Buro</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->autorizacion_buro}}"></a>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Verficación de Domicilio</td>
                                  <td>
                                  <a target="_blank" class="text-secondary btn fa-solid fa-eye bor" href="/vales/verpdf/{{$doc->id_tipo}}/{{$doc->verificacion_domicilio}}"></a>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                          <center>
                               <form action="">
                                    <button type="submit" class="btn border-0">
                                      <i class="text-secondary btn fa-solid fa-edit"></i>
                                    </button>
                                </form>
                           </center>
                      </div>
                  </div>
                  @endif
               
                @endforeach
          
      </div>
    </center>    
</div>

<script src="{{ asset('js/simpleTabla.js') }}"></script>
<script src="{{ asset('js/btnBack1.js') }}"></script>

<script>
  $(document).ready(function() { 
          $('#caja1').show();
          $('#caja2').hide();
   
      });
</script>

<script>
   
        var clic1 = 1;
        var uno1 = document.getElementById('boton1');
    
    
        function divLogin1(){ 
        if(clic1==1){
            
            document.getElementById("caja1").style.height = "100%";
            $('#caja1').show(); 
            uno1.innerHTML = '<div class="row bord"><h1 class="iconSolicitud1 d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-bold fs_special20">Distribuidor </h6></div>';
            $('#caja2').hide(); 
            uno2.innerHTML = '<div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Aval</h6></div>';  
       
            clic1 = clic1 + 1;
        } 
        else{
            document.getElementById("caja1").style.height = "0px"; 
            $('#caja1').hide();   
            uno1.innerHTML ='<div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Distribuidor</h6></div>';  
     
            clic1 = 1;
        }   
        }
    
    
    
    
        var clic2 = 1;
        var uno2 = document.getElementById('boton2');
    
    
        function divLogin2(){ 
        if(clic2==1){
            
            document.getElementById("caja2").style.height = "100%";
            $('#caja2').show();
            uno2.innerHTML = '  <div class="row bord"><h1 class="iconSolicitud1 d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-bold fs_special20">Aval</h6></div>';
            $('#caja1').hide(); 
            uno1.innerHTML = '  <div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Distribuidor</h6></div>'; 
      
            clic2 = clic2 + 1;
        } 
        else{
            document.getElementById("caja2").style.height = "0px"; 
            $('#caja2').hide();   
            uno2.innerHTML = '<div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Aval</h6></div>';  
       
            clic2 = 1;
        }   
        }

  </script>
@endsection
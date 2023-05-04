@extends('layouts.app')

@section('content')

@if ($mensaje = Session::get('success'))
    @php
            echo '<script language="JavaScript">';
            echo 'swal("¡Acción exitosa!","Permiso otorgado correctamente","success", {buttons: false,timer: 1500});';
            echo '</script>';  
    @endphp

    @elseif($mensaje = Session::get('warning'))
    @php
            echo '<script language="JavaScript">';
            echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","warning", {buttons: false,timer: 1500});';
            echo '</script>';  
    @endphp

@endif


<div id="btnBack"></div>  

<div class="mt-5 container">
    
        {{-- Cabecera --}}
        <center class=" container bg-p">
            <div class="col-md-12">
                <h2 class="mt-3 fw-light animate_animated animate_backInLeft">Permisos</h2> 
                <cite title="Título fuente">Asignación de vistas y acciones</cite>
            </div>
           <br/>
        </center> 

               
        {{-- Asignación usuarios--}}
        <form action="/Sistemas/guardar_permisos" >
                     @csrf 
        <div class="row m-4">
            <div class="form-outline row">
                <button class="col-2 btn btn-outline-primary fs-8 rounded-5">Usuario</button>
             
                    <select class="col form-select rounded-5 fs-9" name="idusuario" id="idusuario" required>
                        <option value="">Seleccionar empleado... </option>
                        @foreach($varlistausers as $usuario)
                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">
                        ¡Se ve bien!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, completa la información requerida.
                    </div>
            </div>
        </div>


        {{-- Asignación de permisos por vistas --}}
        <div class="row">
    
            {{-- Tarjeta de departemento --}}
            <div class="col-md-6">
          
                <div class="shadow p-5 mb-3 bg-body rounded">
                    @php($vardepartamento = "null") 
                    @php($varvista = "null") 
                    @foreach($varpermiso as $datos)
                        @if($vardepartamento == "null" || $vardepartamento  != $datos->nombre_departamento)
                            <div class="col">
                                <input type="checkbox" class="btn-check" id="departamento{{$datos->nombre_departamento}}" autocomplete="off" name='vistas[{{$datos->iddepartamento}}]' value="{{$datos->iddepartamento}}">
                                <label class="btn btn-outline-primary rounded-5 fs-8" for="departamento{{$datos->nombre_departamento}}"><i class="fa-brands fa-slack"></i> {{$datos->nombre_departamento}}</label>
                            </div>   
                        @endif
                        @if($vardepartamento  == $datos->nombre_departamento && $varvista != $datos->nombre_vista)
                        @endif
                        <div class="accordion" id="{{$datos->iddepartamento}}">
                            <div class="accordion-item border-0">
                                @if($varvista == "null" || $varvista != $datos->nombre_vista)
                                    <h2 class="accordion-header" id="vistaHeading{{$datos->idvista}}">
                                        <button  class="accordion-button accordion_bg" type="button" data-bs-toggle="collapse" data-bs-target="#vista{{$datos->idvista}}" aria-expanded="true" aria-controls="collapse{{$datos->idvista}}">
                                            <input type="checkbox" class="btn-check" id="vistas1{{$datos->idvista}}" autocomplete="off" name='vistas[{{$datos->idvista}}]' value="{{$datos->idvista}}">
                                            <label class="btn btn-outline-primary rounded-5 fs-8" for="vistas1{{$datos->idvista}}">{{$datos->nombre_vista }}</label>
                                        </button>
                                    </h2>
                                @endif   
                                @php($vardepartamento =$datos->nombre_departamento) 
                                @php($varvista =$datos->nombre_vista) 
                                <div id="vista{{$datos->idvista}}" class="accordion-collapse collapse" aria-labelledby="vistaHeading{{$datos->idvista}}" data-bs-parent="#Permisos{{$datos->iddepartamento}}">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col col-lg-2">
                                                <input type="checkbox" class="btn-check" id="acciones{{$datos->idacciones}}" autocomplete="off" name='caja[{{$datos->nombre_accion}}]' value="{{$datos->idacciones}}">
                                                <label class="btn btn-outline-primary rounded-5 fs-8" for="acciones{{$datos->idacciones}}">{{$datos->descripcion_accion}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                 </div>
                </div>
        </div>
        <br>
        <div class="row mb-3">
            <div class="col-md-4 d-nome d-md-block"></div>
            <button type="submit" class="col-md-4 btn btn-outline-primary">Guardar permisos</button>
            <div class="col-md-4 d-nome d-md-block"></div>
        </div>
        <br>
</form>
</div>



<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>

@endsection

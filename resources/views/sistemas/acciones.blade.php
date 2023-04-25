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
        
                    <h6 class="fw-light text-secondary mb-3"><i class="fa-brands fa-slack"></i> Recursos Humanos</h6>

                    <div class="accordion" id="Permisos">
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="vistaHeading1">
                                <button  class="accordion-button accordion_bg" type="button" data-bs-toggle="collapse" data-bs-target="#vista1" aria-expanded="true" aria-controls="collapseOne">
                                    Catalogo de empleados
                                </button>
                            </h2>
                            
                            <div id="vista1" class="accordion-collapse collapse show" aria-labelledby="vistaHeading1" data-bs-parent="#Permisos">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <input type="checkbox" class="btn-check" id="vista" autocomplete="off">
                                            <label class="btn btn-outline-primary rounded-5 fs-8" for="vista">Ver cátalogo</label><br>
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <input type="checkbox" class="btn-check" id="insert" autocomplete="off">
                                            <label class="btn btn-outline-primary rounded-5 fs-8" for="insert">Altas empleados</label><br>
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <input type="checkbox" class="btn-check" id="delete" autocomplete="off">
                                            <label class="btn btn-outline-primary rounded-5 fs-8" for="delete">Bajas empleados</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item border-0">
                            <h2 class="accordion-header" id="vistaHeading2">
                                <button class="accordion-button collapsed  accordion_bg" type="button" data-bs-toggle="collapse" data-bs-target="#vista2" aria-expanded="false" aria-controls="collapseTwo">
                                    Gestión de nómina
                                </button>
                            </h2>
                            
                            <div id="vista2" class="accordion-collapse collapse" aria-labelledby="vistaHeading2" data-bs-parent="#Permisos">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <input type="checkbox" class="btn-check" id="vista1" autocomplete="off">
                                            <label class="btn btn-outline-primary rounded-5 fs-8" for="vista1">Ver nómina</label><br>
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <input type="checkbox" class="btn-check" id="insert1" autocomplete="off">
                                            <label class="btn btn-outline-primary rounded-5 fs-8" for="insert1">Crear nómina</label><br>
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <input type="checkbox" class="btn-check" id="delete1" autocomplete="off">
                                            <label class="btn btn-outline-primary rounded-5 fs-8" for="delete1">Editar nómina</label><br>
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <input type="checkbox" class="btn-check" id="Exportar" autocomplete="off">
                                            <label class="btn btn-outline-primary rounded-5 fs-8" for="Exportar">Exportar nómina</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <br>
        <div class="row mb-3">
            <div class="col-md-4 d-nome d-md-block"></div>
            <button class="col-md-4 btn btn-outline-primary">Guardar permisos</button>
            <div class="col-md-4 d-nome d-md-block"></div>
        </div>
        <br>
        
</div>



<script src="{{ asset('js/btnBack1.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>

@endsection

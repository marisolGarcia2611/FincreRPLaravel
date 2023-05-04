@extends('layouts.app')

@section('content')

<!--Icon Area-->
<div class="pos__ico">
    <img class="ico__image" src="{{ asset('ico/valeMil.png') }}" alt="valeMil">
</div>

<div class="mt-5">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-4 fw-light"> Catálogo vales</h2>
        </div>

        <div class="row mt-4">
            <div class="col-md-3 mr-2">
                <form action="/CatalogosVales/controlValeras">
                    <div class="card text-center shadow-lg p-3 mb-5 bg-body rounded push border-0">
                        <div class="card-body text-center">
                            <button class="btn border-0" type="submit" ><h1 class="text-lightGray text-center"><i class="fa-solid fa-credit-card"></i></h1></button>
                        </div>
                        <button type="submit" class="bg-gradient-pink card-footer fw-light fs-8 border-0">Inventario valeras</button>
                    </div>
                </form>
               
            </div>

            



        </div>
        
    </div>
</div>



@endsection
const val = document.querySelector('#valera');

val.innerHTML = `
<div class="shadow-lg p-2 mb-5 bg-body rounded valera1">
        <div class="container">
            <div class="row  p-3">
                <div class="col-md-4  cub_size">
                    <img class="rounded mx-auto d-block mt-3 imgl" src="../ico/valeMil.png" alt="...">
                </div>
                
                <div class="col-md-8">
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text enc-1" id="basic-addon1">No. Distribuidor</span>
                            <input type="text" class="form-control text-2" placeholder="0" id="distribuidor2" aria-describedby="basic-addon1"  disabled/>
                        </div>   
                    </div>

                    <div class="row mrt">
                            <div class="input-group mb-3">
                                <span class="input-group-text enc-1" id="basic-addon1">Fecha</span>
                                <input type="text" class="form-control text-3" placeholder="00.00" id="fecha2" aria-describedby="basic-addon1"  disabled/>
                            </div>   
                    </div>

                    <div class="row mrt">
                            <div class="input-group mb-3">
                                <span class="input-group-text enc-1" id="basic-addon1">Valera selecciona</span>
                                <input type="text" class="form-control text-1" placeholder="0" id="valera2" aria-describedby="basic-addon1"  disabled/>
                            </div>   
                    </div>

                </div>
            </div>
        </div>
    
</div>
`

function distribuidor(){
document.getElementById('distribuidor2').value = document.getElementById('distribuidor1').value;
}
function fecha(){
document.getElementById('fecha2').value = document.getElementById('fecha1').value;
}
function valera(){
document.getElementById('valera2').value = document.getElementById('valera1').value;
}

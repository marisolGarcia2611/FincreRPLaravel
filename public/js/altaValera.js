const val = document.querySelector('#valera');

val.innerHTML = `
<div class="shadow p-2  rounded-4 valera1">
    <div class="container">
        <div class="row  p-3">
            <div class="col-md-4  cub_size">
                <img class="rounded mx-auto d-block mt-4 imgl" src="../ico/valeMil.png" alt="valeMil">
            </div>
            
            <div class="col-md-6">
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text enc-2" id="basic-addon1">Sucursal</span>
                        <input type="text" class="form-control text-2" placeholder="0" id="sucursal2" aria-describedby="basic-addon1"  disabled/>
                    </div>   
                </div>

                <div class="row mrt">
                        <div class="input-group mb-3">
                            <span class="input-group-text enc-2" id="basic-addon1">No. Envios</span>
                            <input type="text" class="form-control text-4" placeholder="00.00" id="envios2" aria-describedby="basic-addon1"  disabled/>
                        </div>   
                </div>

                <div class="row mrt">
                        <div class="input-group mb-3">
                            <span class="input-group-text enc-2" id="basic-addon1">Fecha</span>
                            <input type="text" class="form-control text-1" placeholder="0" id="fecha2" aria-describedby="basic-addon1"  disabled/>
                        </div>   
                </div>
            </div>
        </div>
    </div>

</div>
`

function sucursal(){
document.getElementById('sucursal2').value = document.getElementById('sucursal1').value;
}
function envios(){
document.getElementById('envios2').value = document.getElementById('envios1').value;
}
function fecha(){
document.getElementById('fecha2').value = document.getElementById('fecha1').value;
}

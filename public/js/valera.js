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
                        <span class="input-group-text enc-2" id="basic-addon1">No. Distribuidor</span>
                        <input type="text" class="form-control text-2" placeholder="0" id="distribuidor2" aria-describedby="basic-addon1"  disabled/>
                    </div>   
                </div>

                <div class="row mrt">
                        <div class="input-group mb-3">
                            <span class="input-group-text enc-2" id="basic-addon1">Capital $</span>
                            <input type="text" class="form-control text-4" placeholder="00.00" id="capital2" aria-describedby="basic-addon1"  disabled/>
                        </div>   
                </div>

                <div class="row mrt">
                        <div class="input-group mb-3">
                            <span class="input-group-text enc-2" id="basic-addon1">Plazos</span>
                            <input type="text" class="form-control text-1" placeholder="0" id="plazo2" aria-describedby="basic-addon1"  disabled/>
                        </div>   
                </div>

                <div class="row mrt">
                        <div class="input-group mb-3">
                            <span class="input-group-text enc-2" id="basic-addon1">No. Folio</span>
                            <input type="text" class="form-control text-1" placeholder="0" id="folio2" aria-describedby="basic-addon1"  disabled/>
                        </div>   
                </div>
            </div>
        </div>
    </div>

</div>
`

function capital(){
document.getElementById('capital2').value = document.getElementById('capital1').value;
}
function plazo(){
document.getElementById('plazo2').value = document.getElementById('plazo1').value;
}
function distribuidor(){
document.getElementById('distribuidor2').value = document.getElementById('distribuidor1').value;
}
function folio(){
document.getElementById('folio2').value = document.getElementById('folio1').value;
}
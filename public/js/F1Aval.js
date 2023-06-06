const avalF1 = document.querySelector('#aval');

avalF1.innerHTML = `


<div class="pos__btnBack1 d-none d-md-block" style="z-index:3!important;">
    <div class="wrapper"> 
        <form action="/vales/GestionFase1">
            <button class="btn btnBack1 btn-light border-0" type="submit"><h4><i class="fa-solid fa-house"></i></h4></button>
        </form>
    </div>
</div>
<div class="pos__ico">
  <img class="ico__image" src="../ico/valeMil.png" alt="valeMil">
</div>

<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-2">
        <h5 class="fw-light">Fase 1: Captura Inicial de Crédito  <button class="btn border-0 text-secondary" id="show2" onclick="divshow2()"><i class="fa-solid fa-minus"></i></button></h5>
        <div>
            <nav id="navbar">
                <div class="row p-3">
                    
                    <div class="col-md-2 col-2 marginSpecial">
                        <div class="row">
                            <div class="col-md-6 col-6 border1"><h2 class="fw-light">1</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Distribuidor</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line1"></div>

                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 circle2"><h2 class="fw-light">2</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Aval</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line2"></div>

                    <div class="col-md-2 col-2">
                        <div class="row">
                            <div class="col-md-6 col-6 border3"><h2 class="fw-light">3</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Documentos</h5></div>
                        </div> 
                    </div>
                    
                </div>
            </nav>
        </div>

    </div>
</div>

`
var clic = 1;
var show2 = document.getElementById('show2');


    function divshow2(){ 
        if(clic==1){
            document.getElementById("block2").style.height = "130px";
            show2.innerHTML = ' <i class="fa-solid fa-plus"></i>';
            $('#navbar').hide(); 
            clic = clic + 1;
        
        } 
        else{
            document.getElementById("block2").style.height = "230px";
            show2.innerHTML = '<i class="fa-solid fa-minus"></i>';
            $('#navbar').show();   
            clic = 1;
        }   
    }
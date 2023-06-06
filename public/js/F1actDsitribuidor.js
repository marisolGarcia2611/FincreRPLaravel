const distribuidor = document.querySelector('#EncabezadoDis');

distribuidor.innerHTML = `
<div class="pos__btnBack1 d-none d-md-block" style="z-index:3!important;">
    <div class="wrapper"> 
      <h5 class="btnBack1" onClick="history.go(-1);"><i class="fas fa-solid fa-arrow-left"></i></h5>
    </div>
</div>
<div class="pos__ico">
  <img class="ico__image" src="../ico/valeMil.png" alt="valeMil">
</div>

<div class="mt-4 text-center shadow p-3 mb-5 bg-body rounded spaceNavPas ">
    <div class="mt-4">
        <h5 class="fw-light">Fase 1: Actualización del credtito<button class="btn border-0 text-secondary" id="show" onclick="divshow()"><i class="fa-solid fa-minus"></i></button></h5>
        <div>
            <nav id="navbar">
                <div class="row p-6">
                    
                    <div class="col-md-2 col-2 marginSpecial">
                        <div class="row">
                            <div class="col-md-6 col-6 circle1"><h2 class="fw-light">1</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Distribuidor</h5></div>
                        </div> 
                    </div>

                    <div class="col-md-2 col-2 line1"></div>

                    <div class="col-md-4 col-4">
                        <div class="row">
                            <div class="col-md-6 col-6 border2"><h2 class="fw-light">2</h2></div>
                            <div class="col-md-6 col-6 p-15"><h5 class="fw-light fs_special">Aval</h5></div>
                        </div> 
                    </div>
                    
                    <div class="col-md-2 col-2 line1"></div>

            </nav>
        </div>

    </div>
</div>

`

var clic = 1;
var show1 = document.getElementById('show');


    function divshow(){ 
        if(clic==1){
            document.getElementById("block").style.height = "130px";
            show1.innerHTML = ' <i class="fa-solid fa-plus"></i>';
            $('#navbar').hide(); 
            clic = clic + 1;
        
        } 
        else{
            document.getElementById("block").style.height = "230px";
            show1.innerHTML = '<i class="fa-solid fa-minus"></i>';
            $('#navbar').show();   
            clic = 1;
        }   
    }
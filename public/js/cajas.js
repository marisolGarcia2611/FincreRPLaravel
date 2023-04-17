$(document).ready(function() { 
    $('#caja1').hide();
    $('#caja2').hide();
    $('#caja3').hide();
});


var clic1 = 1;
var uno1 = document.getElementById('boton1');


function divLogin1()
{ 
    if(clic1==1){
        
        document.getElementById("caja1").style.height = "100%";
        $('#caja1').show(); 
        uno1.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-up"></i></h6></div>';
        $('#caja2').hide(); 
        uno2.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6></div>';  
        $('#caja3').hide();
        uno3.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6></div>';    
        clic1 = clic1 + 1;
    } 
    else{
        document.getElementById("caja1").style.height = "0px"; 
        $('#caja1').hide();   
        uno1.innerHTML ='<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6></div>';  
        clic1 = 1;
    }   
}




var clic2 = 1;
var uno2 = document.getElementById('boton2');


    function divLogin2()
    { 
        if(clic2==1){
            
            document.getElementById("caja2").style.height = "100%";
            $('#caja2').show();
            uno2.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-up"></i></h6></div>';
            $('#caja1').hide(); 
            uno1.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6></div>'; 
            $('#caja3').hide();  
            uno3.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6></div>';
            clic2 = clic2 + 1;
        } 
        else{
            document.getElementById("caja2").style.height = "0px"; 
            $('#caja2').hide();   
            uno2.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6></div>';  
            clic2 = 1;
        }   
    }



    var clic3 = 1;
    var uno3 = document.getElementById('boton3');


    function divLogin3()
    { 
        if(clic3==1){
            
            document.getElementById("caja3").style.height = "100%";
            $('#caja3').show();
            uno3.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-up"></i></h6></div>';
            $('#caja2').hide();
            uno2.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Conyuge &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15"><i class="fa-solid fa-chevron-down"></i></h6></div>'; 
            $('#caja1').hide();  
            uno1.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Datos Generales &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_20"><i class="fa-solid fa-chevron-down"></i></h6></div>';
            clic3 = clic3 + 1;
        } 
        else{
            document.getElementById("caja3").style.height = "0px"; 
            $('#caja3').hide();   
            uno3.innerHTML = '<div class="row"><h6 class="col-md-6 col-12 fw-light fs_special2">Referencias &nbsp;&nbsp; </h6><h6 class="col-md-6 col-12 text-right mr_15 mt_8"><i class="fa-solid fa-chevron-down"></i></h6></div>';  
            clic3 = 1;
        }   
    }
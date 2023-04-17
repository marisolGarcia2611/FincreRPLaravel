$(document).ready(function() { 
    $('#caja1').hide();
});

var clic1 = 1;
var uno1 = document.getElementById('boton1');


function divLogin1(){ 
    if(clic1==1){
        
        document.getElementById("caja1").style.height = "100%";
        $('#caja1').show(); 
        uno1.innerHTML = 'Datos Generales &nbsp;&nbsp; <i class="fa-solid fa-chevron-up"></i>';   
        clic1 = clic1 + 1;
    } 
    else{
        document.getElementById("caja1").style.height = "0px"; 
        $('#caja1').hide();   
        uno1.innerHTML = 'Datos Generales &nbsp;&nbsp; <i class="fa-solid fa-chevron-down"></i>';  
        clic1 = 1;
    }   
}
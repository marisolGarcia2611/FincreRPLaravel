$(document).ready(function() { 
    $('#caja1').show();
    $('#caja2').hide();
    $('#prospecto').show(); 
    $('#dictamen').show();
    $('#validacion').hide(); 
});


    var clic1 = 1;
    var uno1 = document.getElementById('boton1');


    function divLogin1(){ 
        if(clic1==1){
            
            document.getElementById("caja1").style.height = "100%";
            $('#caja1').show(); 
            uno1.innerHTML = '<div class="row bord"><h1 class="iconSolicitud1 d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-bold fs_special20">Dictamen </h6></div>';
            $('#caja2').hide(); 
            uno2.innerHTML = '<div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Validación</h6></div>';  
            $('#prospecto').show(); 
            $('#dictamen').show();
            $('#validacion').hide();  
            clic1 = clic1 + 1;
        } 
        else{
            document.getElementById("caja1").style.height = "0px"; 
            $('#caja1').hide();   
            uno1.innerHTML ='<div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Dictamen</h6></div>';  
            $('#prospecto').hide(); 
            $('#dictamen').hide();
            $('#validacion').show();  
            clic1 = 1;
        }   
    }




    var clic2 = 1;
    var uno2 = document.getElementById('boton2');


    function divLogin2(){ 
        if(clic2==1){
            
            document.getElementById("caja2").style.height = "100%";
            $('#caja2').show();
            uno2.innerHTML = '  <div class="row bord"><h1 class="iconSolicitud1 d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-bold fs_special20">Validación</h6></div>';
            $('#caja1').hide(); 
            uno1.innerHTML = '  <div class="row bord1"><h1 class="iconSolicitud d-none d-md-block"><i class="fa-brands fa-slack"></i></h1><h6 class="fw-light fs_special2">Dictamen</h6></div>'; 
            $('#prospecto').hide(); 
            $('#dictamen').hide();
            $('#validacion').show(); 
            clic2 = clic2 + 1;
        } 
        else{
            document.getElementById("caja2").style.height = "0px"; 
            $('#caja2').hide();   
            uno2.innerHTML = '<div class="row bord1"> <h1 class="iconSolicitud d-none d-md-block"><i class="fa-solid fa-lines-leaning"></i></h1><h6 class="fw-light fs_special2">Validación</h6></div>';  
            $('#prospecto').show(); 
            $('#dictamen').show();
            $('#validacion').hide();   
            clic2 = 1;
        }   
    }

$(document).ready(function() {
    

    var table = $('#dic').DataTable( {
        "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
        responsive: true,
        scrollY: 220,
        scrollX: false,
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        
    } );
    new $.fn.dataTable.FixedHeader( table );
});

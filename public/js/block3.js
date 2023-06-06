var clic = 1;
    var show3 = document.getElementById('show3');


    function divshow3(){ 
        if(clic==1){
            document.getElementById("block3").style.height = "130px";
            show3.innerHTML = ' <i class="fa-solid fa-plus"></i>';
            $('#navbar').hide(); 
            clic = clic + 1;
        
        } 
        else{
            document.getElementById("block3").style.height = "230px";
            show3.innerHTML = '<i class="fa-solid fa-minus"></i>';
            $('#navbar').show();   
            clic = 1;
        }   
    }
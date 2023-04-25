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
    };


    
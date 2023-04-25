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
        };
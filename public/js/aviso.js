const aviso = document.querySelector('#aviso');

aviso.innerHTML = `

<div class="container mt-2 mb-3">

        <div class="row">
            <div class="text-end">
                    <button type="button" class="btn border-0 fw-light text-secondary fs-6_5" onclick="message()">
                        <i class="fa-solid fa-message"></i></i>&nbsp;&nbsp;Observaciones
                    </button>
            </div>
        </div>

        <div id="messageContent">
            <div class="alert alert-secondary shadow p-3 mb-5 rounded position-alert border-0" role="alert">
                <div class="row">
                    <div class="col-md-10 col-10">
                        <i class="fa-solid fa-triangle-exclamation"></i>&nbsp;&nbsp;Importante
                    </div>
                    <div class="col-md-2 col-2 text-end">
                        <button type="button" class="btn border-0 position-cross" onclick="message()">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
                
                <div>
                    <p class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam vero ratione et nulla optio voluptatibus minima, fugit suscipit id fuga, non ab beatae iure ducimus tenetur dolorum, explicabo nisi eum!</p> 
                </div>
            </div>
        </div>
 
</div>

`
$(document).ready(function() { 
    $('#messageContent').show();
});

var clic = 1;

    function message(){ 
        if(clic==1){
            
            document.getElementById("messageContent").style.height = "100%";
            $('#messageContent').hide(); 
            clic = clic + 1;
        
        } 
        else{
            document.getElementById("messageContent").style.height = "0px"; 
            $('#messageContent').show();   
            clic = 1;
        }   
    }
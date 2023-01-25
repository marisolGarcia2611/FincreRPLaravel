<html>


    <style>
        .border{
            border-bottom:.5px solid black;
            text-align:center;
        }

        .border1{
            border:.5px solid black;
            text-align:center;
            padding: 10px;
        }

        .border2{
            border:0px solid black;
            text-align:center;
        }

        .border3{
            border:.2px solid black;
            padding: 10px;
        }
        body{
            Font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;
        }

        .text2{
            Font-family:Arial, Gill Sans, Gill Sans MT, Calibri, sans-serif.
        }

        p{
            font-size:12px;
        }
        .text1{
            font-size:12px;
        }
        .p1{
            font-size:14px;
        }

        .default{
            margin: 0 auto;
        }
        .txt-c{
            text-align:center;
        }
        .txt-r{
            text-align:right;
        }
        .i-1{
            background-color:#3e3e3e;
            color:#fff;
            border-radius:50px;
            text-align:center;
            padding-left:10px;
            margin-left:10px;
        }

        td{
            font-size:14px;
        }
    </style>
    <body>
    
    

    <div class="txt-r">
        <p><b>Torreón Coah, A {{$fecha_baja}}</b></p>
    </div>

    <br/>

    <div>
        <p class="text1"><b>EMPLEADO: </b>{{$nombreemplado}}</p>
        <p class="text1"><b>PUESTO: </b>{{$puesto}}</p>
    </div>


    <div>

        <table class="default">
                    <br/>
                        <tr>
                            <td class="text1"><b>FECHA INGRESO:</b> </td><td class="text1">{{$fecha_ingreso}}</td>

                        </tr>
                        <tr>
                           <td class="text1"><b>FECHA BAJA:</b> </td><td class="text1">{{$fecha_baja}}</td>
                        </tr>
                       
                        <tr>
                           <td class="text1"></td> <td class="text1"><b>000</b> días</td>
                        </tr>


            </table>

    </div>
     <br/>  
     <br/>

     

    <div class="txt-c "> 
        <table class="default">
            <caption><b> FINIQUITO </b></caption>
                <br/>
                    <tr class="txt-c">
                        
                        <td class="i-1">No. Empleado&nbsp;&nbsp;&nbsp; </td>
                        <td class="i-1">Gratificacion&nbsp;&nbsp;&nbsp;</td>
                        <td class="i-1">Aguinaldo&nbsp;&nbsp;&nbsp;</td>
                        <td class="i-1">Vacaciones&nbsp;&nbsp;&nbsp;</td>
                        <td class="i-1">Sueldo&nbsp;&nbsp;&nbsp;</td>

                    </tr>

                    <tr class="txt-c"> 
                        
                        <td>{{$idempleado}}</td>
                        <td>{{$rptvardiasgratificacion}}</td>
                        <td>{{$rtpvaraguinaldoporporcional}}</td>
                        <td>{{$rptvarvacacionesporporcionales}}</td>
                        <td>{{$rptvarsueldoporporcional}}</td>

                    </tr>
                    <br/>
                    <tr class="txt-c"> 
                        
                        <td><b>Total de Percepciones</b></td>
                        <td>{{$totalper}}</td>
                        
                    </tr>


        </table>

        <br/>
        <hr/>
        <br/>

        <table class="default">
                <caption><b> DEDUCCIONES </b></caption>
                <br/>
                        <tr class="txt-c">
                            
                            <td class="i-1">IMSS &nbsp;&nbsp;&nbsp; </td>
                            <td class="i-1">Infonavit &nbsp;&nbsp;&nbsp;</td>
                            <td class="i-1">Tranporte &nbsp;&nbsp;&nbsp;</td>
                            <td class="i-1">Prestamos &nbsp;&nbsp;&nbsp;</td>
                            <td class="i-1">Otras &nbsp;&nbsp;&nbsp;</td>

                        </tr>

                        <tr class="txt-c"> 
                            
                            <td>{{$rptvardeudaimms}}</td>
                            <td>{{$rptvardeduedainfonavit}}</td>
                            <td>{{$rptvardeudatransporte}}</td>
                            <td>{{$rptvardeudaprestamo}}</td>
                            <td>{{$rptvarotrasdeudas}}</td>

                        </tr>
                        <br/>
                        <tr class="txt-c"> 
                            
                            <td><b>Total de deducciones</b></td>
                            <td> {{$rptotaldeducciones}}</td>
                            
                        </tr>


        </table>

    </div>

    <br/>
    <br/>

    <div class="border2">
        <p class="p1"> <b >TOTAL A PAGAR </b></p>
        <p class=" p1">{{$rpttotalentregar}}</p>
    </div>
 
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="border2" style="border-top: .5px solid #000000;" width:200px;>
        <h4 >{{$nombreemplado}}</h4>



        <p>FIRMA DE CONFORMIDAD</p>
    </div>
  

    



   
       
  
 
    </body>
</html>
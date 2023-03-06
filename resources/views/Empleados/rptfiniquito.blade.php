<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
       
        body{
            Font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;font-size:10px;
        }
        .p1{
            font-size:14px;
        }

        .texR{text-align:right;}
        
        .td1{width: 20px}
        .td2{text-align: right;width: 30px;}
        .td3{width: 50px}
        .td22{border-top:0.3px solid #000000;text-align: right;width: 30px;}

        .tdd1{width: 100px}
        .tdd11{width: 100px;text-align: right;}
        .tdd2{text-align: right;width: 150px;}
        .tdd22{border-top:0.3px solid #000000;text-align: right;width: 30px;}


    </style>
</head>
<body class="container">

    <div class="row">
        <div  class="text-center" style="border:0.7px solid #000000;width:100%;height:70px;">
           <h4 class="fw-bold p1 mt-4">{{$nombreempresa}}</h4>
        </div>
    </div>


    <div class="row text-center">
        <p class="fw-bold">CALCULO DE FINIQUITO</p>
    </div>


    <div class="row texR mt-3 mb-4">
        <p id="fecha">Torreón Coah, A {{$datenow}}</p>
    </div>



    <div class="row mb-3">
        <p><b>EMPLEADO: </b>{{$nombreemplado}}</p>
        <p><b>PUESTO: </b>{{$puesto}}</p>
    </div>


    <div class="row mb-4">
        <div style="border:0.7px solid #000000;padding:10px; width:100%;">
            <table>
                <tr>
                    <td class="tdd1">FECHA INGRESO:</td>
                    <td class="tdd2">{{$fecha_ingreso}}</td>
                    <td class="tdd11">S.D.</td>
                    <td class="tdd2">{{$salario}}</td> 
                </tr>
                <tr>
                    <td class="tdd1">FECHA BAJA:</td>
                    <td class="tdd2">{{$fecha_baja}}</td>
                    <td class="tdd11">S.D.I</td>
                    <td class="tdd2 fw-bold"> - </td>
                </tr>
                <tr>
                    <td class="tdd1"></td>
                    <td class="tdd22">{{$diasDiferencia}} DIAS</td>
                    <td class="tdd11" ></td>
                    <td class="tdd2 fw-bold">PAGO QUINCENAL</td>
                </tr>
            </table>
        </div>
    </div>

   

     

    <div class="row mb-4">
            <div>
                <p style="border:0.7px solid #000000;width:70%;background-color:#dfdfdf;" class="fw-bold">FINIQUITO</p>
            </div>

            <table>
                <tr>
                    <td class="td1">NO. EMPLEADO</td>
                    <td class="td2">{{$idempleado}}</td>
                    <td class="td3"></td>
                </tr>
                <tr>
                    <td class="td1">GRATIFICACIÓN</td>
                    <td class="td2">{{$rptvardiasgratificacion}}</td>
                    <td class="td3"></td>
                </tr>
                <tr>
                    <td class="td1">SUELDO</td>
                    <td class="td2">{{$rptvarotrasdeudas}}</td>
                    <td class="td3"></td>
    
                </tr>
                <tr>
                    <td class="td1">AGUINALDO</td>
                    <td class="td2">{{$rtpvaraguinaldoporporcional}}</td>
                    <td class="td3"></td>
    
                </tr>
                <tr>
                    <td class="td1">PRIMA VACACIONAL</td>
                    <td class="td2">{{$rptvarvacacionesporporcionales}}</td>
                    <td class="td3"></td>
    
                </tr>
                <tr>
                    <td class="td1"><b>TOTAL PERCEPCIONES</b></td>
                    <td class="td22">{{$totalper}}</td>
                    <td class="td3"></td>
    
                </tr>
            </table>
    </div>


                        
    <div class="row mb-4">
        <div>
            <p style="border:0.7px solid #000000;width:70%;background-color:#dfdfdf;" class="fw-bold">DEDUCCIONES</p>
        </div>
        <table>
            <tr>
                <td class="td1">IMSS</td>
                <td class="td2">{{$rptvardeudaimms}}</td>
                <td class="td3"></td>
            </tr>
            <tr>
                <td class="td1">INFONAVIT</td>
                <td class="td2">{{$rptvardeduedainfonavit}}</td>
                <td class="td3"></td>
            </tr>
            <tr>
                <td class="td1">TRANSPORTE</td>
                <td class="td2">{{$rptvardeudatransporte}}</td>
                <td class="td3"></td>

            </tr>
            <tr>
                <td class="td1">PRESTAMOS</td>
                <td class="td2">{{$rptvardeudaprestamo}}</td>
                <td class="td3"></td>

            </tr>
            <tr>
                <td class="td1">OTRAS</td>
                <td class="td2">{{$rptvarotrasdeudas}}</td>
                <td class="td3"></td>

            </tr>
            <tr>
                <td class="td1"><b>TOTAL DEDUCCIONES</b></td>
                <td class="td22">{{$rptotaldeducciones}}</td>
                <td class="td3"></td>

            </tr>
        </table>
     
    </div>
                        
                    


    <div class="row" style="margin-bottom:200px;">
        <div style="width:70%;background-color:#dfdfdf;">
            <p class="p1">TOTAL A PAGAR&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$rpttotalentregar}}</b></p>
        </div>
    </div>
 


    <div class="row">
        <table class="default">
            <tr>
                <th style="border: 0.3px solid #000000;border-radius:20px;width:25px;height:55px;"></td>
                <th style="border-bottom: 0.3px solid #000000;width:150px;"></td>
                <th style="border: 0.3px solid #000000;border-radius:80px;width:25px;height:55px;"></td>
            </tr>

            <tr>
                <td  style="width:25px;"></td>
                <td style="width:150px;" class="text-center">
                    <p class="fw-bold p-1">{{$nombreemplado}}</p>
                    <p>FIRMA DE CONFORMIDAD</p>
                </td>
                <td style="width:25px;"></td>
            </tr>

        </table>
    </div>
 
    </body>
</html>
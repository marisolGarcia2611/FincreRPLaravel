
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



@foreach($datoclienteenc as $dato1)
<h1>Numero de Distribuidor {{$dato1->iddistribuidor}}</h1>
<h4>Nombre Cliente  {{$dato1->Nombre_completo}}</h>
<h4>Telefono Cliente  {{$dato1->telefono}}</h>
<h4>Dirección Cliente  {{$dato1->direccion}}</h>
<h4>Condición Prestamo con intereses</h4>
<h4>Tipo de plazo: Quincenal</h4>
<h4>Monto a financiar ${{$pago_total}}</h4>
@endforeach

<br>
<br>



<center class="mb-4">
      <div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">
        <div class="table-responsive pad-table" id="mydatatable-container">     
          <table class="table table-hover " id="tblempleados">
            <thead class="table">
                  <tr class="tr-table"> 
                  <th class="text-center fw-light">Plazos</th>
                  <th class="text-center fw-light">Fecha de pago </th>
                  <th class="text-center fw-light">Pago quincenal</th>
                  <th class="text-center fw-light">Otros conceptos</th>
                  <th class="text-center fw-light">Pago quincenal + conceptos</th>
                  <th  class="text-center fw-light">Seguro</th>
                  <th  class="text-center fw-light">Pago Total</th>
                  <th  class="text-center fw-light">Saldo Final</th>
                  </tr>
            </thead>
            
            <tbody>
            @foreach($datosprestamodet as $dato2)
                <tr>
               <td class="bg-1"> <center>{{$dato2->plazos}}</center></td>
                <td class="bg-1"><center>{{$dato2->fecha_pago}}</center></td>
                <td class="bg-1"><center>${{$total_plazantes_redodeo}}</center></td>
                <td class="bg-1"><center>$0.{{$totalcentavos}}</center></td>
                <td class="bg-1"><center>${{$pago_quincenalredondeado}}</center></td>
                <td class="bg-1"><center>${{$dato2->coberturax_plazo}}</center></td>
                <td class="bg-1"><center>${{$pago_quincenal_total}}</center></td>
                <td class="bg-1"><center>${{$dato2->saldo_nuevo}}</center></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>  
      </div>
    </center>
    </body>
</html>






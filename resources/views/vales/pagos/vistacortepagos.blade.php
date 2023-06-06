
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



<center class="mb-4">
      <div class="shadow-lg mb-5 bg-body rounded border-0" style="margin:20px;width:95%;">
      <h1>Reporte de pago</h1>
        <div class="table-responsive pad-table" id="mydatatable-container">     
          <table class="table table-hover " id="tblempleados">
            <thead class="table">
                  <tr class="tr-table"> 
                  <th class="text-center fw-light">Distribuidor</th>
                  <th class="text-center fw-light">Nombre Cliente</th>
                  <th class="text-center fw-light">Numero de prestamo</th>
                  <th class="text-center fw-light">Fecha de pago</th>
                  <th class="text-center fw-light">Plazo</th>
                  <th class="text-center fw-light">Pago total</th>
                  </tr>
            </thead>
            
            <tbody>
            @foreach($resultadoproc as $datos)
                <tr>
               <td class="bg-1"> <center>{{$datos->iddistribuidor}}</center></td>
                <td class="bg-1"><center>{{$datos->Nombre_completo}}</center></td>
                <td class="bg-1"><center>{{$datos->id}}</center></td>
                <td class="bg-1"><center>{{$datos->fecha_pago}}</center></td>
                <td class="bg-1"><center>{{$datos->plazos}}</center></td>
                <td class="bg-1"><center>{{$datos->pago_total}}</center></td>
                </tr>
            @endforeach
            </tbody>
          </table>
       
        </div>  
      </div>

    </center>
    </body>
</html>

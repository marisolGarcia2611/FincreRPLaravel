<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
       body{Font-family: Arial,Candara, Calibri, Segoe, Segoe UI, Optima, sans-serif;font-size:10px;}
       p{font-size: 12px; font-weight: lighter;}
       .title{font-size: 13px}
       .small{font-size: 7px!important;}
       .text-end{text-align: end;}
       .table td{border: 1px solid #000000 !important;font-size: 11px; font-weight: lighter;}
       .table th{border: 1px solid #000000 !important;font-size: 11px; font-weight: lighter;}
       .border{border: 1px solid #000000 !important;font-size: 11px; font-weight: lighter;}
       .text-justify{text-align:justify;}
       .text-dark{color: #000000}
       .text-center{text-align:center;}
       .firma1{margin-top: 210px;}
       .firma2{margin-top: 545px;}
       .firma3{margin-top: 440px;}

       .mt_small{margin-top: 30px;}
       .mt_medium{margin-top: 80px;}
       .mt_large{margin-top: 140px;}

       .mb_small{margin-bottom: 40px;}
       .mb_medium{margin-bottom: 130px;}
       .mb_large{margin-bottom: 135px;}

       .page-break {page-break-after: always;}

       .container{padding: 40px!important;}
    
    </style>
</head>
<body>
    
 @foreach($solicitudDis as $dis)

    <!--Pagina 1-->
    <div class="container">
        <center class="mb-3"><p class="fw-bold title">“ANEXO A” AL CONTRATO DE APERTURA DE CRÉDITO SIMPLE NÚMERO  #{{$dis->id_distribuidor}} </p></center>
        <br/>
        <div class="row">
            <p class="text-justify">
                El presente <b>“Anexo A”</b> forma parte integrante del Contrato de Apertura de Crédito Simple cuyo número se señala anteriormente, 
                celebrando entre <b>SERVICIOS ADMINISTRATIVOS CREDILAGUNA S.A. DE C.V.</b> como <b>Acreditante</b> y/o <b>CREDILAGUNA</b>, y <a class="text-decoration-underline text-dark">{{$dis->nombre}}</a> como <b>Acreditado </b>
                (en lo sucesivo el “Contrato”).
                <br/>
                Los términos que en este <b>Anexo A</b> sean empleados con inicial mayúscula, serán términos definidos y ostentaran el significado que 
                correlativamente se les asigna en el contrato, salvo que se les atribuya un significado distinto.
            </p>
        </div>

        <div class="row">
            <p class="fw-bold">&nbsp;&nbsp;I. &nbsp;Condiciones Generales del Crédito.</p>

            <table class="table">
                <tbody>
                    <tr>
                        <td>Destino:</td>
                    </tr>
                    <tr>
                        <td>Monto del crédito:</td>
                    </tr>
                    <tr>
                        <td>Plazo del crédito:</td>
                    </tr>
                    <tr>
                        <td>Costo anual total:</td>
                    </tr>
                    <tr>
                        <td>Periodicidad de pago de intereses:</td>
                    </tr>
                    <tr>
                        <td>Fecha de primer pago:</td>
                    </tr>
                    <tr>
                        <td>Fecha de ultimo pago:</td>
                    </tr>
                    <tr>
                        <td>Comisión por pago anticipado:</td>
                    </tr>
                    <tr>
                        <td>Gastos por pago anticipado:</td>
                    </tr>
                    <tr>
                        <td>Gastos de cobranza:</td>
                    </tr>
                    <tr>
                        <td>Comisión de apertura:</td>
                    </tr>
                    <tr>
                        <td>Comisión por administración:</td>
                    </tr>
                    <tr>
                        <td>Fecha de pago de la comisión por apertura:</td>
                    </tr>
                    <tr>
                        <td>Fecha de pago de la comisión por administración:</td>
                    </tr>
                    <tr>
                        <td>Tasa fija:</td>
                    </tr>
                    <tr>
                        <td>Comisión por seguro de vida:</td>
                    </tr>
                </tbody>
            </table>

            <div class="text-end">
                <p class="small">*Aplica solo de ser necesario.</p>
            </div>
        </div>

        <div class="row">
            <p class="fw-bold">&nbsp;&nbsp;I. &nbsp;Condiciones Generales del Crédito.</p>
            <br/>
            <p class="text-justify mb-5">
                La <b>Acreditada</b> recibirá el importe del crédito mediante una o varias exhibiciones en efectivo, mediante uno o varios cheques nominativos no negociables, mediante la entrega de una o varias órdenes de pago, o por cualquier otro medio incluso de carácter electrónico que libremente determine CREDILAGUNA.
                <br/>
                Leído que fue el presente <b>Anexo A</b> se firma por triplicado, con fecha del _____________________________.
            </p>
            <table class="firma1">
                <tbody class="text-center">
                    <tr>
                        <td>
                            <p>_____________________________________</p>
                            <b class="small">SERVICIOS ADMINISTRATIVOS CREDILAGUNA S.A. DE C.V.</b>
                        </td>
                        <td>
                            <p>_____________________________________</p>
                            <b class="small">“LA ACREDITADA”</b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>     
    </div>
    
    <div class="page-break"></div>
     
    <!--Pagina 2-->
    <div class="container">
        <center class="mb-3"><p class="fw-bold title">ANEXO B AL CONTRATO DE APERTURA DE CRÉDITO NÚMERO #{{$dis->id_distribuidor}}</p></center>
        <br/>
        <div class="row">
            <p class="text-justify">
                El presente <b>Anexo B</b> forma parte integrante del Contrato de Apertura Simple cuyo número se señala anteriormente, celebrando <b>SERVICIOS ADMINISTRATIVOS CREDILAGUNA S.A. DE C.V.</b> como Acreditante y <a class="text-decoration-underline text-dark">{{$dis->nombre}}</a> como <b>Acreditado</b> (en lo sucesivo el “Contrato”).
                <br/>
                Los términos que en este  <b>Anexo B</b> sean empleados inicial mayúsculas, serán términos definidos y ostentaran el significado que correlativamente se les asigna en el Contrato, salvo que se les atribuya un significado distinto. 
                <br/>
                Leído que fue el presente  <b>Anexo B</b> se firma por triplicado, con fecha del ____________________.    
            </p>
            <center><p class="fw-bold">TABLA DE AMORTIZACIÓN EXPRESADA EN MONEDA NACIONAL</p></center>
            
        </div>

        <div class="row firma2">
            <p class="text-justify fw-bold mb-5">
                Estoy de acuerdo con las condiciones del crédito y acepto la información que se me presenta en la ciudad de ________ a los _____ del mes de _____ al año ___. 
            </p>
            <br/>
            <table>
                <tbody class="text-center">
                    <tr>
                        <td>
                            <p>_____________________________________</p>
                            <b class="small">SERVICIOS ADMINISTRATIVOS CREDILAGUNA S.A. DE C.V.</b>
                        </td>
                        <td>
                            <p>_____________________________________</p>
                            <b class="small">“LA ACREDITADA”</b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>

    <div class="page-break"></div>
    
    <!--Pagina 3-->
    <div class="container">        
        <div class="row">
            <p class="text-justify">
                CONTRATO DE ADHESIÓN Y APERTURA DE CRÉDITO SIMPLE No.<a class="text-decoration-underline text-dark"> &nbsp;{{$dis->id_distribuidor}} &nbsp;&nbsp;</a>   QUE CELEBRAN: (I) <b> SERVICIOS ADMINISTRATIVOS CREDILAGUNA S.A. DE C.V.</b>, A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ “CREDILAGUNA”, 
                (II) LA(S) PERSONAS(S) CUYO(S) NOMBRE(S) APARECE(N) EN EL NÚMERO (2) DEL PROEMIO DE ESTE CONTRATO, A QUIEN(ES) EN LO SUCESIVO SE LE(S) DENOMINARA LA <b> “ACREDITADA”</b>, Y (III) LA(S) PERSONA(S) CUYO(S)
                 NOMBRE(S) APARECE(N) EN EL NÚMERO (3) DEL PROEMIO DE ESTE CONTRATO, A QUIEN(ES) EN LO SUCESIVO SE LE(S) DENOMINARÁ EL “OBLIGADO SOLIDARIO”, DE CONFORMIDAD CON LAS SIGUIENTES DECLARACIONES Y CLAUSULAS: 
            </p>                      
        </div>

        <div class="row">
            <center><p class="fw-bold mb-1">PROEMIO</p></center>  
            
            <div class="mb-3">
                <p class="fw-bold">(1)	Datos de SERVICIOS ADMINISTRATIVOS CREDILAGUNA S.A. DE C.V.:</p>
                <table class="table">
                    <thead>
                        <tr class="tex-center">
                            <th class="fw-bold">Escritura Constitutiva</th>
                            <th class="fw-bold">Datos de inscripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Numero: 89 
                                Fecha: 20 DE DICIEMBRE DE 2018.
                                Notario público: 40
                                Nombre: LIC. CARLOS RANGEL ORONA
                                Plaza: TORREÓN, COAHUILA, DISTRITO JUDICIAL DE VIESCA, COAHUILA DE ZARAGOZA

                            </td>
                            <td>
                                Plaza: Registro Público de Comercio de Torreón, Coahuila de Zaragoza
                                Fecha: __ de _____ de 201____.
                                Registro: Folio Mercantil _______

                            </td>
                        </tr>
                        <tr class="fw-bold">
                            <td colspan="2">
                              Domicilio: (DOMICILIO DE CREDILAGUNA) ________________, TORREÓN, COAHUILA DE ZARAGOZA 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-3">
                <p><b>(2)	Datos de la Acreditada:</b><br/>
                Persona Física</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="2">Nombre(s): {{$dis->nombre}}</td>
                        </tr>

                        <tr>
                            <td>Fecha de nacimiento:{{$dis->distribuidor_fecha}} </td>
                            <td>Nacionalidad: {{$dis->distribuidor_nacionalidad}}</td>
                        </tr>

                        <tr>
                            <td>Lugar de nacimiento: {{$dis->distribuidor_lugar_nacimiento}}</td>
                            <td>Ocupación: {{$dis->distribuidor_puesto_empleo}}</td>
                        </tr>

                        <tr>
                            <td>Estado civil: {{$dis->distribuidor_estado_civil}}</td>
                            <td>Registro Federal de Contribuyentes: {{$dis->distribuidor_rfc}}</td>
                        </tr>

                        <tr>
                            <td colspan="2">Domicilio: Col. {{$dis->distribuidor_colonia}}, Calle {{$dis->distribuidor_calle}} No.Int {{$dis->distribuidor_numero_interior}} No.Ext {{$dis->distrbuidor_numero_exterior}}, C.P. {{$dis->distribuidor_codigo_postal}}, {{$dis->distribuidor_idciudad}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-1">
                <p> <b>(3)	Datos de Obligado Solidario:</b><br/>
                Persona Física</p>
                <table class="table">
                    @foreach ($solicitudAval as $Aval)
                    <tbody>
                        <tr>
                            <td colspan="2">Nombre(s): {{$Aval->nombrea}}</td>
                        </tr>

                        <tr>
                            <td>Fecha de nacimiento: {{$Aval->fecha_nacimiento}}</td>
                            <td>Nacionalidad: {{$Aval->nacionalidad}}</td>
                        </tr>

                        <tr>
                            <td>Lugar de nacimiento: {{$Aval->lugar_nacimiento}}</td>
                            <td>Ocupación: {{$Aval->puesto_empleo}}</td>
                        </tr>

                        <tr>
                            <td>Estado civil: {{$Aval->estado_civil}}</td>
                            <td>Registro Federal de Contribuyentes: {{$Aval->rfc}}</td>
                        </tr>

                        <tr>
                            <td colspan="2">Domicilio: Col. {{$Aval->colonia}}, Calle {{$Aval->calle}}, No.Int {{$Aval->numero_interior}} No.Ext {{$Aval->numero_exterior}}, C.P. {{$Aval->codigo_postal}} </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>

            <div class="border p-1 mb-3">
                <p class="text-justify">
                    (4)	Tasa de Interés Ordinaria: </br>
                    Será la que se establezca en el <b> Anexo A</b> del presente contrato, siendo esta una Tasa Variable y que resulte aplicable de acuerdo a la tasa de intereses convenida por ambas partes.
                    La tasa de interés determinada según lo dispuesto con anterioridad, se aplicará durante cada “Periodo de Intereses”
                </p>
            </div>

            <div class="border p-1">
                <p class="text-justify">
                    (5)	Lugar de Pago del Crédito:</br> 
                    La <b>Acreditada</b> se obliga a realizar el pago del crédito, comisiones, intereses y cualquier otro accesorio mediante depósito a 
                    cualquiera de las cuentas que se indican a continuación, sin necesidad de requerimiento previo. 
                </p>
                <p>
                    <br/>BANCO________ 
                    <br/>Banco__________ Concentradora _______ Referencia: ___________
                        Banco__________ Convenio CIE ________ Referencia:____________-
                </p>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
     
    <!--Pagina 4-->
    <div class="container">
        <center class="mb-3"><p class="fw-bold">D E C L A R A C I O N E S</p></center>
        <div class="row">
            <p class="text-justify">       
                I. &nbsp;&nbsp;&nbsp;&nbsp;Declara CREDILAGUNA que: 
                <br/> a) &nbsp;&nbsp;Que es una sociedad mercantil, constituida conforme a las leyes de los Estados Unidos Mexicanos, según consta en la escritura pública estipulada previamente en el proemio (1) de este contrato.
                <br/><br/> b) &nbsp;&nbsp;Es su deseo otorgar en favor de la <b>Acreditada</b> un crédito en los términos de las disposiciones contenidas en el presente contrato.
                <br/><br/> c) &nbsp;&nbsp;En términos de la Ley de Protección y Defensa al Usuario de Servicios Financieros, la Unidad Especializada de Atención al Usuario, se encuentra ubicada en (domicilio de la empresa) la Calle _____________, CP. _______, Ciudad de Torreón, Estado de Coahuila de Zaragoza a cargo del titular ______, teléfono _______ y correo electrónico ______@_______.com.mx.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                II.&nbsp;&nbsp;&nbsp;&nbsp;Declara la <b>Acreditada</b> que:
                <br/> a) &nbsp;&nbsp;Ha solicitado a CREDILAGUNA un crédito, que se otorga en términos de las disposiciones contenidas en este contrato, para el destino que se establezca en el <b>Anexo A</b> del presente contrato. 
                <br/><br/> b )&nbsp;&nbsp;CREDILAGUNA ha hecho de mi (nuestro) conocimiento antes de la firma del presente contrato el contenido del mismo y de todos los documentos que serán suscritos como pagaré, los cargos, comisiones y gastos que serán generados por la celebración del presente contrato, los descuentos y bonificaciones a que tengo (tenemos) derecho como el Costo Anual Total (CAT) que “Para fines informativos y de conocimiento exclusivamente” se incluye en el presente contrato.
                <br/><br/>c) &nbsp;&nbsp;Ha recibido de CREDILAGUNA, una carta informativa, en donde se describe los requisitos para la presentación y seguimiento de solicitudes, consultas, aclaraciones, inconformidades y quejas, relacionados con la operación o servicio contratado.
                <br/><br/> d) &nbsp;&nbsp;Autoriza expresamente a CREDILAGUNA para que por conducto de sus apoderados facultados lleve a cabo investigaciones sobre su comportamiento crediticio ante las sociedades de Información Crediticia que estime conveniente.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                III. &nbsp;&nbsp;&nbsp;&nbsp;Declara el Obligado Solidario, que:
                <br/> a )&nbsp;&nbsp;Es su deseo constituirse en Obligado Solidario de la <b> Acreditada</b>, a favor de CREDILAGUNA respecto de todas y cada una de las obligaciones de la <b> Acreditada</b>, contraídas de conformidad con este contrato, su Anexo A y los demás documentos que se suscriban a su amparo.
                <br/><br/> b )&nbsp;&nbsp;El Obligado Solidario cuenta con los recursos financieros y materiales, necesarios y suficientes para cumplir con sus obligaciones de pago y demás obligaciones derivadas de este contrato. 
                <br/><br/> Conformes las partes en las declaraciones que anteceden, celebran este contrato de Apertura de Crédito Simple en términos de las siguientes:
            </p> 
        </div>

        <center class="mb-3"><p class="fw-bold">D E C L A R A C I O N E S</p></center>
        <div class="row">
            <p class="text-justify">       
               <b> PRIMERA. MONTO DEL CRÉDITO.</b>  	Con sujeción a los términos del presente contrato, CREDILAGUNA apertura en este acto a favor de 
                la <b>Acreditada</b> un Crédito bajo la forma de Apertura de Crédito Simple por la cantidad que se señala en el <b>Anexo A</b> de este contrato,
                bajo el rubro <b>“Monto del Crédito”</b> (en lo sucesivo el “Crédito”). Dentro del límite del Crédito no quedan comprendidos los intereses, 
                comisiones, gastos y demás accesorios financieros que debe pagar la <b> Acreditada</b> a CREDILAGUNA en términos de este contrato.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>SEGUNDA. DESTINO Y DISPOSICIÓN DEL CRÉDITO. La Acreditada </b>invertirá el importe del Crédito para los fines establecidos en el <b>Anexo A </b>
                del presente contrato, bajo el rubro “destino”, disponiendo de la totalidad del <b>crédito</b>  en una sola disposición, dentro de un plazo que 
                no excederá de los días naturales señalados en el <b>Anexo A</b>  de este contrato, bajo el rubro <b>“Plazo de Disposición”</b> , contados a partir de la 
                fecha de la firma de este contrato. El derecho para disponer 
            </p> 
        </div>
    </div>

    <div class="page-break"></div>
     
    <!--Pagina 5-->
    <div class="container">
        <div class="row">
            <p class="text-justify"> 
                del <b>Crédito</b>  por parte de la <b>Acreditada</b> , estará sujeto a la suscripción y entrega del presente contrato, su <b>Anexo A</b>  y Pagaré que se hace mención en este contrato. 
            </p> 
        </div>   

        <div class="row">
            <p class="text-justify">       
                <b>TERCERA. COACREDITADOS.</b>En caso de suscribirse este contrato por varias personas en su carácter de <b>Acreditadas</b> , todas ellas acuerdan 
                que las disposiciones del <b>Crédito</b>  sean realizadas por la(s) persona(s) que se indique(n) en el <b>Anexo A</b>  de este contrato, bajo el rubro 
                <b>“Coacreditada”</b> , sin reservarse la <b>Acreditada</b>  derecho o acción legal que ejercer en contra de CREDILAGUNA, por el cumplimiento de la 
                instrucción que le otorgan en este párrafo, liberándola de cualquier responsabilidad que pudiera en su contra, por el cumplimiento de 
                dicha instrucción, obligándose la <b>Acreditada</b>  a sacarla en paz y a salvo. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                La(s) <b>Acreditada(s)</b>  asume(n) en forma expresa e irrevocable la obligación solidaria pasiva frente a CREDILAGUNA, en términos del artículo 
                1987 y demás aplicables del Código Civil para la Ciudad de México y sus correlativos de las demás entidades de la República Mexicana, por 
                recibir el <b>Crédito</b>  en beneficio común. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>CUARTA. PLAZO DEL CREDITO.</b>     El plazo del <b>Crédito</b>  es el que se indica en el <b>Anexo A</b>  de este contrato, bajo el rubro <b>“Plazo del Crédito”</b>  
                el que empezará a contarse a partir de la fecha de disposición del <b>Crédito</b> . 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>QUINTA. CONDICIONES DEL CRÉDITO.</b>      Se obliga a la <b>Acreditada</b>  a dar fiel y oportuno cumplimiento a las <b>Condiciones Generales del Crédito</b>  
                que se contienen en el <b>Anexo A</b>  de este contrato y con la <b>Tabla de Amortización</b>  que se contiene en el <b>Anexo B</b>  de este instrumento, los que 
                debidamente firmados por las partes, forman parte integrante del presente contrato, así como con los montos, plazos, características, y 
                demás condiciones particulares  del <b>Crédito</b>  otorgado, que igualmente se contienen en el <b>Anexo A</b>  y <b>Anexo B</b>  de este contrato. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                La <b>Acreditada</b>  se obliga a pagar a <b>CREDILAGUNA</b> :
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>&nbsp;&nbsp;&nbsp;&nbsp;A)&nbsp;&nbsp;COMISIÓN DE APERTURA.</b><br/>  
                La comisión de apertura sobre el importe del Crédito prevista en el <b>Anexo A</b> de este contrato bajó el rubro 
                <b> “Comisión de Apertura”</b> en la fecha que se indica en dicho proemio bajo el rubro de <b>“Fecha de Pago de Comisión de Apertura”</b>.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>&nbsp;&nbsp;&nbsp;&nbsp;B)&nbsp;&nbsp;COMISIÓN POR ADMINISTRACIÓN.</b><br/>  
                La comisión por administración sobre el importe del Crédito prevista en el <b>Anexo A</b> de este contrato, bajo el rubro <b>“Comisión por 
                Administración”</b>, en la fecha que se indica en el <b>Anexo A</b> del presente instrumento bajo el rubro <b>“Fecha de Pago de Comisión por Administración”</b>.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>&nbsp;&nbsp;&nbsp;&nbsp;C)&nbsp;&nbsp;SUERTE PRINCIPAL.</b><br/>  
                En el número de pago consecutivos y sucesivos, a partir de la fecha de disposición del Crédito, de conformidad con los montos y en las fechas que
                 se especifican en la <b>Tabla de Amortización</b> que se contiene en el <b>Anexo B</b> de este instrumento, considerándose para efectos de las misma, como 
                 “fecha de primer pago” la señalada en el <b>Anexo A</b> de este contrato. 

            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>&nbsp;&nbsp;&nbsp;&nbsp;D)&nbsp;&nbsp;INTERESES ORDINARIOS.</b><br/> 
                Intereses ordinarios en la forma periódica que se señala en el <b>Anexo A</b> de este contrato, bajo el rubro <b>“Periodicidad de Pago de Intereses”</b> calculados 
                sobre el importe del <b>Crédito</b> desde la fecha de celebración de este contrato y hasta la fecha del pago total del mismo, a una tasa anual elegida entre 
                las opciones establecidas en el punto (4) del proemio de este contrato. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                Los intereses ordinarios que la <b>Acreditada</b> deba pagar a <b>CREDILAGUNA</b> de conformidad con esta cláusula 
                <a class="text-decoration-underline text-dark fw-bold">es variable y será determinada con lo que resulte de adicionar a la Tasa de Interés Interbancaria de Equilibrio (TIE) como máximo 60 (sesenta) puntos porcentuales.</a>
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                Para efectos de la presente cláusula, la TIE se determinará tomando como referencia el promedio aritmético de la misma a plazo de 28 (veintiocho) días que haya dado 
                a conocer el Banco de México en el Diario Oficial de la Federación los días miércoles de las cuatro últimas semanas anteriores a la 
            </p> 
        </div>

    </div>

    <div class="page-break"></div>

  <!--Pagina 6-->
    <div class="container">
        <div class="row">
            <p class="text-justify">       
                fecha de corte y en caso de que el miércoles fuere inhábil se tomará la del Día Hábil bancario inmediato anterior. En caso de que la TIE dejare de existir, la tasa de interés sustituta se determinará 
                con base a lo que resulte del promedio aritmético de la Tasa de los Certificados de la Tesorería de la Federación (CETES) cotización a plazo de 28 (veintiocho) días, 
                que haya dado a conocer el Banco de México durante las últimas cuatro semanas a la fecha de corte, adicionando como máximo 60 (sesenta) puntos porcentuales.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify text-decoration-underline fw-bold">       
                El cálculo de intereses ordinarios se realizará considerando años de 360 (trescientos sesenta) días. El interés ordinario se calculará con base en el saldo diario insoluto 
                del período multiplicado por la tasa diaria de interés.
            </p> 
        </div>
     
        <div class="row">
            <p class="text-justify">       
                <a class="text-decoration-underline text-dark fw-bold">La tasa de interés diaria será el resultado de dividir la tasa de interés anual ordinaria que se encuentre vigente a la fecha de corte de la cuenta entre 360. </a>
                El saldo diario insoluto se obtiene sumando al saldo del día anterior (saldo deudor) con las disposiciones del día y restando los pagos realizados el mismo día. El saldo diario insoluto del primer día de cada 
                período será igual al saldo anterior que aparece en el estado de cuenta mensual respectivo, más las disposiciones del día y restando los pagos realizados el mismo día. Los saldos diarios insolutos de cada período 
                serán los que se generen entre la fecha de corte anterior y la fecha de corte señalada en el estado de cuenta mensual respectivo. Los intereses ordinarios deberán ser pagados por mensualidades vencidas en las 
                mismas fechas en que se efectúen los pagos de capital.
                <br/><br/>   

                El pago de los intereses no podrá ser exigido por adelantado sino únicamente por periodos vencidos. 
                <br/><br/>

                Tasas promocionales: <b> CREDILAGUNA</b> podrá disminuir la tasa de interés anual ordinaria por cuestiones promocionales, estableciendo un periodo de vigencia o siempre que la <b> Acreditada</b> cumpla con los términos y condiciones 
                de la promoción que <b> CREDILAGUNA</b> le haya informado oportunamente. Una vez concluido el periodo de vigencia señalado o en caso de que la <b> Acreditada</b> no cumpla con los términos y condiciones de la promoción, <b> CREDILAGUNA</b> 
                aplicará la tasa de interés anual ordinaria establecida en el presente Contrato sin necesidad de dar la <b> Acreditada</b> aviso de dicho cambio con anticipación.
                <br/><br/>

                <b>CREDILAGUNA</b> podrá dar a conocer la <b>Acreditada</b> las modificaciones que realice a la tasa de interés anual ordinaria y/o moratoria, con por lo menos 30 (treinta) días naturales de anticipación a la fecha prevista en la 
                que surtirán efecto, mediante aviso por escrito en el estado de cuenta. La <b>Acreditada</b> ratifica que una vez trascurridos los 60 (sesenta) días naturales siguientes a la entrada en vigor de la modificación sin que dé 
                por terminado el Contrato, será considerado para todos los efectos legales, como su aceptación a dichas modificaciones.
                <br/><br/>

                En caso de hacerse exigible el saldo total de la Línea de <b>Crédito</b> por vencimiento anticipado de la misma, la <b>Acreditada</b> se obliga a pagar intereses moratorios sobre el saldo insoluto de la Línea de <b>Crédito</b> de acuerdo 
                a la tasa de interés moratoria establecida en este contrato.
                <br/><br/>

                La sola suscripción del pagaré por la parte de la <b> Acreditada</b>, mismo que documenta la suerte principal y los intereses del <b>Crédito</b>, implicará la aceptación y conformidad con las condiciones pactadas en el mismo. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>&nbsp;&nbsp;&nbsp;&nbsp;E)&nbsp;&nbsp;INTERESES MORATORIOS.</b><br/> 
                    En caso de falta de pago oportuno de cualquier cantidad que deba ser pagada por la <b>Acreditada</b> de conformidad con este Contrato, su <b>Anexo A</b>, su <b>Anexo B</b> o cualquier otro documento suscrito a su amparo, ésta pagara 
                    a <b>CREDILAGUNA</b> intereses moratorios sobre los pagos vencidos y no pagados, a razón de 3 (tres) veces la tasa de intereses ordinaria aplicable para su determinación, computados desde la fecha en que el pago venció,
                    hasta la fecha del pago efectivo, sin perjuicio del derecho que tendrá <b>CREDILAGUNA</b> de dar por vencido anticipadamente el plazo establecido para el pago de la totalidad del <b>Crédito</b>.     
                    <br/><br/>

                    Los intereses moratorios se calcularán sobre una base de 360 días y meses de 30 días.
            </p>
        </div>

    </div>

    <div class="page-break"></div>

  <!--Pagina 7-->
    <div class="container">

        <div class="row">
            <p class="text-justify">       
                <b>&nbsp;&nbsp;&nbsp;&nbsp;F)&nbsp;&nbsp;PAGOS ANTICIPADOS.</b><br/> 
                La <b>Acreditada</b> podrá realizar a <b>CREDILAGUNA</b> pagos anticipados, se aplicara al saldo insoluto del capital y se recalculará el importe de las amortizaciones y cálculo de intereses siempre, 
                y cuando el importe del pago sea al menos por el equivalente al importe de un pago parcial que la <b>Acreditada</b> esté al corriente en el pago de: a) principal, b) los intereses ordinarios 
                devengados, así como c) en su caso, los intereses moratorios devengados, las primas de seguros, las comisiones y cargos pactados. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                A elección de <b>CREDILAGUNA</b>, la <b>Acreditada</b> pagara a <b>CREDILAGUNA</b>; (i) la comisión por pago anticipado prevista en el <b>Anexo A</b> de este contrato, bajo el rubro “Comisión por Pago Anticipado” 
                calculada sobre el monto total de la amortización recibida en forma anticipada, más la cantidad señalada en el <b>Anexo A</b> de este contrato, bajo el rubro “Gastos por pago Anticipado”, o (ii)
                la “Comisión por Pago Anticipado” que <b>CREDILAGUNA</b> determine de acuerdo a las condiciones financieras que prevalezcan en el mercado, en la fecha en que se efectué el pago anticipado, misma 
                que se dará a conocer por escrito a <b>CREDILAGUNA</b> antes se efectuarse el pago anticipado. 
                <br/><br/>
                Los pagos anticipados se aplicarán al saldo insoluto del principal del crédito, conforme a lo establecido en este contrato, en cuyo caso reducirá el plazo contratado, respetándose el importe
                de los pagos periódicos de capital. En caso de que la <b>Acreditada</b> opte por aplicar el pago anticipado a los pagos inmediatos siguientes, será necesario que presente un escrito solicitando esta
                aplicación y acompañando el comprobante de pago. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>&nbsp;&nbsp;&nbsp;&nbsp;G)&nbsp;&nbsp;GASTOS.</b><br/> 
                Los gastos razonables y justificados que erogue <b>CREDILAGUNA</b> con motivo de la preparación, negociación y celebración de este contrato incluyendo honorarios de abogados y honorarios por la ratificación
                del mismo ante el Fedatario Público que elija CREDILAGUNA. Así como, en caso, los derechos de registro, anotaciones, marginales, cancelaciones, y de más que se eroguen con motivo de la inscripción y
                cancelación de este contrato en el Registro Público la Propiedad y del Comercio del domicilio de la <b>Acreditada</b>. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify">       
                <b>&nbsp;&nbsp;&nbsp;&nbsp;H)&nbsp;&nbsp;GASTOS DE COBRANZA.</b><br/> 
                Así mismo la Acreditada pagara a <b>CREDILAGUNA</b>, la cantidad que se indica en el <b>Anexo A</b> de este contrato, bajo el rubro de <b>“Gastos de Cobranza”</b>  por cada ocasión en que incurra en algún incumplimiento 
                la Acreditada, y durante cada día que dure su incumplimiento hasta el pago total, puntual y oportuno de cada una de las obligaciones de pago incumplidas, conforme a lo establecido en el presente 
                contrato. 
            </p> 
        </div>
        
        <div class="row">
            <p class="text-justify"> 
                Asimismo, todos los gastos de cobranza extrajudicial en los que incurra <b>CREDILAGUNA</b>, que correspondan. 
                <br/><br/>
                En caso de que la <b>Acreditada</b> no pague a <b>CREDILAGUNA</b> los gastos a que se refieren los párrafos que anteceden, dentro de los 2 días siguientes a la fecha en que así se lo solicite éstos, causarán 
                intereses a la tasa que por concepto de mora se establece en el presente contrato.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
            <b> SEXTA. LUGAR, MONEDA Y FORMA DE PAGO.</b>  La <b>Acreditada</b> se obliga a pagar a <b>CREDILAGUNA</b>, el crédito a que se refiere el presente contrato, así como cualquier accesorio financiero o gasto, en la siguiente forma:
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>&nbsp;&nbsp;&nbsp;&nbsp;A)&nbsp;&nbsp;LUGAR DE PAGO.</b><br/> 
                Todos los pagos que deba efectuar la <b>Acreditada</b> a favor de <b>CREDILAGUNA</b>, se llevarán a cabo sin necesidad de previo requerimiento, en la forma y lugar señalados en el punto (5) del proemio de este contrato o bien en el lugar que <b>CREDILAGUNA</b> designe, mediante simple aviso por escrito dirigido a la <b>Acreditada</b>, libres y sin deducción o retención por cualquier concepto. Si el día en que la Acreditada debiere realizar a favor de <b>CREDILAGUNA</b> cualquier, pago fuera en día inhábil, entendiéndose como tal, un día en que los bancos (instituciones de crédito) no estuvieren abiertos al público para la realización de operaciones Bancarias normales en la ciudad en la que se otorga el crédito, dicho pago se hará el día hábil inmediato posterior.
            </p> 
        </div>

    </div>

    <div class="page-break"></div>

  <!--Pagina 8-->
    <div class="container">

        <div class="row">
            <p class="text-justify"> 
                <b>&nbsp;&nbsp;&nbsp;&nbsp;B)&nbsp;&nbsp;MONEDA DE PAGO.</b><br/> 
                Los pagos que deba efectuar la <b>Acreditada</b> a favor de <b>CREDILAGUNA</b> serán realizados en Pesos, Moneda Nacional. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>&nbsp;&nbsp;&nbsp;&nbsp;C)&nbsp;&nbsp;FORMA DE PAGO.</b><br/> 
                <b>CREDILAGUNA</b> recibirá cheques y órdenes de transferencia de fondos para el pago del principal, intereses, comisiones y gastos, del crédito. Las órdenes de transferencia de fondos serán enviadas a solicitud de la <b>Acreditada</b> o por un tercero y la emisora podrá ser cualquier institución de crédito. Asimismo, los cheques serán librados por la <b>Acreditada</b> o por un tercero a, cargo de cualquier institución de crédito. 
                <br/><br/>
                <b>CREDILAGUNA</b> informara a la <b>Acreditada</b> a través de estados de cuenta o cualquier otro medio de comunicación, los datos necesarios para realizar el pago del crédito con cheques y ordenes de transferencias de fondos. 
                <br/><br/>
                Si la <b>Acreditada</b> desea realizar el pago del crédito, mediante domiciliación con cargo a una cuenta a la vista en alguna institución de crédito, deberá otorgar su autorización por escrito a CREDILAGUNA, en la que expresará, al menos lo siguiente: (i) la cuenta en la que se domiciliará el pago, (ii) la fecha en la que se efectuará dicha domiciliación y (iii) el procedimiento a seguir en caso de que dicha cuenta no tenga fondos suficientes.   
                <br/><br/>
                Las cantidades pagadas por la <b>Acreditada</b> bajo el presente contrato, se acreditarán conforme a lo siguiente: i) el mismo día si son en efectivo, ii) el mismo día si es con cheque a cargo de un banco que le lleve una cuenta a CREDILAGUNA; iii) el segundo día hábil siguiente si es con cheque de un banco en el que <b>CREDILAGUNA</b> no tenga cuenta; iv) las trasferencias se acreditaran el mismo día en que se hayan acreditado los recursos en la cuenta de CREDILAGUNA.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
            <b>SÉPTIMA. APLICACIÓN DE LOS PAGOS.</b> Los pagos que realice la <b>Acreditada</b> a <b>CREDILAGUNA</b>, serán aplicados en el orden siguiente: impuestos, comisiones, gastos, costos de seguros, intereses moratorios, intereses ordinarios, capital vencido y capital por vencerse. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>OCTAVA. COSTO ANUAL TOTAL (CAT).</b> La <b>Acreditada</b> manifiesta que se le ha explicado y ha entendido el significado y composición del CAT, el que se da a conocer “Para fines informativos y de comparación exclusivamente” y cuando se trate de créditos a tasa variable se acompañara de la leyenda “Tasa Variable”. 
                <br/><br/>
                <b>Costo Anual Total (CAT)</b>, es el costo anual total de financiamiento expresado en términos porcentuales anuales que, para fines informativos y de comparación, incorpora la totalidad de los costos y gastos inherentes a los créditos. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>NOVENA. PAGARÉ.</b>   En la fecha de disposición del Crédito, la <b>Acreditada</b> se obliga a suscribir un pagaré a la orden de <b>CREDILAGUNA</b> por la totalidad del Crédito y cuya suerte principal será pagada en los términos estipulados en este contrato. 
                <br/><br/>
                La <b>Acreditada</b> en este acto autoriza <b>CREDILAGUNA</b> a ceder, endosar o negociar en cualquier forma, antes de su vencimiento, el pagaré que documenta la suerte principal y los intereses del Crédito, en los términos del artículo 299 de la <b>Ley General de Títulos y Operaciones de Crédito (en lo sucesivo LGTOC).</b>
                <br/><br/>
                En caso de que por cualquier causa este contrato se rescinda o se denuncie, <b>CREDILAGUNA</b> podrá dar por vencido anticipadamente el pagaré, el que podrá demandarse en forma autónoma.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>DÉCIMA. OBLIGADO SOLIDARIO.</b> La(s) persona(s) que suscriben el presente contrato en su carácter de Obligados(s) Solidario(s) se constituye(n) como tal(es) de la <b>Acreditada</b> frente y a favor de <b>CREDILAGUNA</b>, y se obliga(n) indistintamente con ésta al fiel y puntual cumplimiento de todas las obligaciones a su cargo derivadas de este contrato en los términos de los artículos 1987, 1988, 1995 del Código Civil Federal y sus correlativos de los demás Códigos Civiles de las diversas Entidades de la República Mexicana.     
            </p> 
        </div>

    </div>

    <div class="page-break"></div>

  <!--Pagina 9-->
    <div class="container">

        <div class="row">
            <p class="text-justify"> 
                El(los) Obligado(s) Solidario(s) se obliga(n) a firmar por aval cada uno de los pagarés que llegaren a emitirse al amparo de este contrato. 
                <br/><br/>
                Igualmente, el(los) Obligado(s) Solidario(s) conviene(n) en continuar obligado(s) solidariamente de conformidad con este contrato, aun y cuando los derechos a favor de <b>CREDILAGUNA</b> derivados de los mismo sean cedidos total o parcialmente. 
                <br/><br/>
                En caso de que la Acreditada renuncie o haya una separación del empleo actual, el Obligado(s) Solidario(s) se obliga indistintamente con <b>CREDILAGUNA</b> a cumplir con todas las obligaciones. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
            <b>DÉCIMO PRIMERA. DENUNCIA. CREDILAGUNA</b> podrá, en cualquier tiempo, en términos del artículo 294 de la <b>LGTOC</b>, denunciar el contrato en el caso de que la <b>Acreditada</b> incumpla con cualquiera de las obligaciones a su cargo derivadas de este contrato, bastando para ello el incumplimiento de la <b>Acreditada</b> de cualquier obligación derivada del presente contrato. En caso de denuncia de este contrato, la <b>Acreditada</b> deberá pagar a CREDILAGUNA, de inmediato el importe de la suma insoluta del crédito más las sumas que le adeude por cualquier concepto derivadas de este contrato. Si la <b>Acreditada</b> no hiciere el pago en la forma que se precisa en esta cláusula, el saldo a su cargo generará los intereses moratorios convenidos en este contrato, mismos que se causarán desde el incumplimiento de la <b>Acreditada</b> de cualquier obligación de pago derivada del presente contrato. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>DÉCIMO SEGUNDA. CUAUSAS DE VENCIMIENTO ANTICIPADO. CREDILAGUNA</b> podrá dar por vencido anticipadamente el presente contrato para el pago de la totalidad del Crédito y hacer pagadero el saldo de la suerte principal del mismo, junto con sus intereses acumulados e insolutos y las demás cantidades que deben pagarse de acuerdo con los términos de este contrato de inmediato, sin necesidad de protesto, reclamación, notificación, solicitud o aviso, en cualquiera de los casos previstos por la ley y en los siguientes casos:
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                a)&nbsp;&nbsp;&nbsp;	Si la <b>Acreditada</b> deja de cubrir puntualmente cualquier exhibición de capital o intereses en los términos establecidos en este contrato, así como cualquier otra cantidad pendiente pago de conformidad con el mismo, así como de su <b>Anexo A</b>, su  <b>Anexo B</b> o cualquier documento suscrito a su amparo.
            <br/>b)&nbsp;&nbsp;&nbsp;	Si los bienes o inversiones de la <b>Acreditada</b> son objeto de embargo decretado por cualquiera autoridad.
            <br/>c)&nbsp;&nbsp;&nbsp;	Si la <b>Acreditada</b> contraviene o incumple con cualquiera de las disposiciones de este contrato.
            <br/>d)&nbsp;&nbsp;&nbsp;	Por concurso o quiebra de la <b>Acreditada</b>. 

            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                En cualquiera de estos casos, <b>CREDILAGUNA</b> podrá dar por vencido anticipadamente el plazo para el pago del Crédito concedido en este contrato. 
                <br/><br/>
                Sin perjuicio de lo anterior, el Crédito se extinguirá en los casos previstos por el artículo 301 de la LGTOC.
                <br/><br/>
                Así mismo, la <b>Acreditada</b> podrá solicitar en todo momento la terminación anticipada de este contrato mediante la presentación de una solicitud por escrito en cualquier sucursal o en la Unidad Especializada de CREDILAGUNA. CREDILAGUNA, comunicará a la <b>Acreditada</b> a más tardar el día siguiente al de la recepción de la solicitud, el monto total del adeudo, incluyendo todos los accesorios que se hubieren generado a la fecha en que solicite la terminación. Una vez liquidados los adeudos se dará por terminado el contrato. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>DÉCIMO TERCERA. SEGUROS.</b> La <b>Acreditada</b> se obliga a contratar los seguros que se establezcan en el <b>Anexo A</b> del presente contrato. Bajo el rubro “Seguros” <b>CREDILAGUNA</b> sin su responsabilidad por cuenta y orden de la <b>Acreditada</b>, podrá realizar contratación de tales seguros, caso en el cual la <b>Acreditada</b>, deberá reintegrar a <b>CREDILAGUNA</b>, cualquier cantidad que ésta hubiere pagado por tales conceptos, las primas y demás gastos que cause el seguro, así como cualquier incremento futuro de las cantidades adeudadas por tal conceto, correrán por cuenta de la <b>Acreditada</b>, quedando a su cargo el pago de cualquier suma deducible que haya de erogarse o gastos no cubiertos por el seguro en relación con el mismo. La obligación de mantener los seguros
            </p> 
        </div>
    </div>

    <div class="page-break"></div>

  <!--Pagina 10-->
    <div class="container">
        
        <div class="row">
            <p class="text-justify"> 
                persistirá mientras se encuentren vigentes el presente contrato. En caso de que la <b>Acreditada</b>, no realice el pago de los seguros contratados por <b>CREDILAGUNA</b>, en la fecha requerida por ésta, por cada día que transcurra le pagará intereses Moratorios de acuerdo a lo estipulado en este contrato. El seguro que contrate <b>CREDILAGUNA</b> por cuenta y orden de la <b>Acreditada</b>, se mantendrá vigente por el tiempo contratado; sin que la <b>Acreditada</b>, pueda solicitar su cancelación o sustitución. Tratándose de seguro de vida o de desempleo, <b>CREDILAGUNA</b>, será designada como beneficiario preferente e irrevocable, a fin a que en caso de fallecimiento o pérdida del empleo de la <b>Acreditada</b> con los importes que pague la empresa Aseguradora se pague, hasta donde alcance, el Crédito otorgado bajo el presente contrato.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
            <b>DÉCIMO CUARTA. PENA CONVENCIONAL.</b> Las partes convienen que para el caso de vencimiento anticipado de este contrato, derivada del incumplimiento de las obligaciones a cargo de la <b>Acreditada</b> y/o cualesquiera de las causas de vencimiento anticipado señaladas en este contrato, esta última pagara a <b>CREDILAGUNA</b> como pena convencional a título de daños y perjuicios que le ocasione la cantidad que para tal efecto se señala en el <b>Anexo A</b> de este contrato, bajo el rubro “Pena Convencional” además de cualesquiera otras cantidades que en su momento sean adeudadas a <b>CREDILAGUNA</b>. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
            <b>DÉCIMO QUINTA. IMPUESTOS.</b> Todos los impuestos y/o derechos vigentes o futuros que se causen con motivo de la celebración y cumplimiento de este contrato, serán por cuenta de la <b>Acreditada</b>. En tal virtud, la <b>Acreditada</b> libera, en la forma más amplia a <b>CREDILAGUNA</b> cualquier responsabilidad presente o futura, relativa al pago de dichos impuestos y/o derechos. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                Si por cualquier causa <b>CREDILAGUNA</b> cubriera alguna cantidad derivada de lo estipulado en el párrafo precedente, la <b>Acreditada</b> deberá reintegrársela en cuanto se lo solicite. <b>CREDILAGUNA</b> en caso de incumplimiento sin perjuicio de la facultad que tiene ésta última para rescindir este contrato, la cantidad que deba reintegrar causará intereses determinados conforme a la tasa de intereses moratorios prevista en este contrato, computados desde la fecha del incumplimiento hasta aquella en que se haga el reintegro respectivo. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
            <b>DÉCIMO SEXTA. PROCEDIMIENTO JUDICIAL.</b> En caso de juicio las partes convienen que: 
                <br/>1. &nbsp; &nbsp;De conformidad con el dispuesto en los artículos 87-E y 87-F de la Ley General de Organizaciones y Actividades Auxiliares del Crédito. Las partes convienen en que el presente contrato junto con el Estado de Cuenta Certificado expedido por el Contador de <b>CREDILAGUNA</b>, será título ejecutivo mercantil. 
                <br/>2. &nbsp; &nbsp;En caso de embargo <b>CREDILAGUNA</b> no se sujetará al orden establecido por los artículos 1395 del Código de Comercio y 536 del Código de Procedimiento Civiles para la Ciudad de México, en los términos este último de la fracción I del artículo 537 de este mismo ordenamiento. 
                <br/>3. &nbsp; &nbsp;En caso de juicio <b>CREDILAGUNA</b> tendrá el derecho de ejercer el juicio que de cualquier naturaleza se prevea en la ley para la recuperación de los importes amparados bajo este contrato.
                <br/><br/>
                En caso emplazamiento o notificaciones las partes señalan como sus domicilios respectivamente los que se indican en el punto <b>(1), (2) y (3)</b> del proemio de este contrato. Mientras las partes no se notifiquen por escrito el cambio de domicilio, todos los avisos y notificaciones que deban hacerse de conformidad con el presente contrato, se llevarán a cabo en los domicilios antes mencionados. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
            <b>  DÉCIMO SÉPTIMA. MODIFICACIONES.</b> El presente contrato podrá ser modificado por <b>CREDILAGUNA</b>. De acuerdo con el siguiente procedimiento:
            <br/>1. &nbsp; &nbsp;Con cuarenta días naturales de anticipación a la entrada en vigor de la modificación deberá notificar a la <b>Acreditada</b> las modificaciones propuestas mediante aviso incluido en el estado de cuenta correspondiente o en cualquier otro documento que al efecto le sea entregado a la <b>Acreditada</b>. El aviso deberá especificar en forma notoria la fecha en que la modificación surtirá efecto.
            <br/>2. &nbsp; &nbsp;En el evento de que la <b>Acreditada</b> no esté de acuerdo con las modificaciones propuestas, podrá solicitar la terminación del contrato hasta sesenta días naturales después de la entrada en vigor de dichas modificaciones sin responsabilidad ni comisión alguna a su cargo por dicho concepto,  debiendo cubrir el capital comisiones, intereses y demás accesorios que se hubieren generado hasta la fecha en que solicite la terminación anticipada del contrato con base en esta cláusula.
            </p> 
        </div>
    </div>

    <div class="page-break"></div>

  <!--Pagina 11-->
    <div class="container">

        <div class="row">
            <p class="text-justify">
                3.&nbsp; &nbsp;Una vez transcurrido el plazo a que se refiere el numeral procedente sin que <b>CREDILAGUNA</b> haya recibido comunicación alguna de la <b>Acreditada</b> se tendrán por aceptadas las modificaciones al presente contrato. En consecuencia, la <b>Acreditada</b> renuncia, de manera expresa a dar por terminado el presente contrato fuera del plazo referido. 
            </p>
        </div>

        <div class="row">
            <p class="text-justify"> 
            <b>DÉCIMA OCTAVA. TITULOS DE LAS CLAUSULAS.</b> Los títulos que se han incluido en cada cláusula de este contrato, son tan solo para referencia y fácil manejo, por lo que no deberán tener ninguna trascendencia en la interpretación legal de las mismas. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>DÉCIMA NOVENA. AUSENCIA DE VICIOS DE LA VOLUNTAD.</b> Convienen ambas partes contratantes en que en el presente contrato no hay dolo, lesión error mala fe ni enriquecimiento ilegítimo de una parte contratante con perjuicio de la otra siendo por ello, que los referidos otorgantes se obligan y comprometen a no rescindirlo por las causas antes indicadas. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>VIGÉSIMA. LEGALIDAD DEL CONTRATO.</b> Ambas partes convienen que las declaraciones cláusulas y anexos que se han mencionado presente, contrato y por tanto sus numerales y disposiciones obligan a las partes al contenido, significado y alcances legales. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>VIGÉSIMO PRIMERA. VIGENCIA DEL CONTRATO.</b> Este contrato estará vigente dentro plazo pactado en el <b>Anexo A</b> de este instrumento bajo el concepto de “plazo del crédito”, en todo caso el presente contrato permanecerá vigente mientras existan obligaciones pendientes a cargo de la <b>Acreditada</b>. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>VIGÉSIMO SEGUNDA. DEL ESTADO DE CUENTA.</b> De conformidad con la Ley para la Transparencia y Ordenamiento de los Servicios Financieros que <b>CREDILAGUNA</b> y la <b>Acreditada</b> pactan que la <b>Acreditada</b> podrá conocer su estado de cuenta, saldo, los cargos y abonos efectuados por <b>CREDILAGUNA</b> llamando sin costo al teléfono_________________ solicitando el estado de cuenta sin costo en cualquiera de las sucursales de <b>CREDILAGUNA</b>, en sus domicilios y horarios de atención publicadas en la página web: __________________________________ 
                <br/><br/>
                Las partes acuerdan también que, aunque la <b>Acreditada</b> tiene el derecho de conocer el estado de cuenta y saldo sin costo en cualquier momento dentro de los horarios de <b>CREDILAGUNA</b> la <b>Acreditada</b> deberá consultar su estado de cuenta por lo menos una vez al mes dentro de los primeros cinco días hábiles de cada mes y tendrá un plazo de tres días hábiles adicionales a partir del quinto día hábil para objetarlo. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>VIGÉSIMO TERCERA. DOMICILIOS Y AVISOS.</b> Para efectos de este contrato las partes señalan como sus respectivos domicilios los que se indican en el punto  <b>(1), (2) y (3)</b> del proemio de este contrato. 
                <br/><br/>
                Los avisos y notificaciones que deberán hacerse las partes de conformidad con este contrato, se harán por escrito y entregaran o enviaran a cada una de las partes a sus direcciones o a cualquier otra dirección que designe mediante aviso escrito dado a su contraparte, siendo que los avisos y comunicaciones surtirán efecto, si se dan por escrito, al ser entregadas y/o enviadas por fax o cualquier otro medio electrónico al ser recibida la confirmación por ese medio. 

            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>VIGÉSIMO CUARTA. INFORMACION PARA LA ACREDITADA.</b> La periodicidad para la presentación y seguimiento de solicitudes, aclaraciones, inconformidades, relacionados con la operación o servicio contratado serán a través de los medios de comunicación que le notifique <b>CREDILAGUNA</b> y se presentarán por escrito debidamente firmadas por la <b>Acreditada</b> en cualquier sucursal o en la Unidad Especializada de <b>CREDILAGUNA</b> en la que se indique el nombre del titular del crédito, el número de referencia del mismo, una narración de los hechos, así como lo que solicite de <b>CREDILAGUNA</b>. Dicho escrito deberá acompañar copia de su credencial de elector o identificación oficial, así como una copia de los documentos que se relacionen con la solicitud, consulta aclaración, reclamación, inconformidad o queja correspondiente. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                Tratándose de <b>SOLICTUDES, CONSULTAS Y ACLARACIONES</b>, la <b>Acreditada</b> tendrá un plazo de 5 días hábiles contados a partir de la fecha de corte para realizar una solicitud, consulta o aclaración 
            </p> 
        </div>
    </div>

    <div class="page-break"></div>

  <!--Pagina 12-->
    <div class="container">
        <div class="row">
            <p class="text-justify"> 
                de sus estados de cuenta, en cuyo caso, <b>CREDILAGUNA</b> emitirá respuestas por escrito a la <b>Acreditada</b> dentro de un plazo de 5 días hábiles siguientes contados a partir de la fecha de recepción de solicitud, consulta o aclaración. Tratándose de inconformidades y quejas, podrá presentar dicha inconformidad o queja dentro del plazo de 90 días naturales contados a partir de la fecha de corte, una vez presentada la inconformidad o queja <b>CREDILAGUNA</b>, tendrá un plazo máximo de 45 días para entregar a la <b>Acreditada</b> la respuesta correspondiente, así como un informe detallado en el que respondan todos los hechos contenidos en la inconformidad o queja.
                <br/><br/>
                La respuesta respectiva quedara a disposición de la <b>Acreditada</b> en el domicilio de la Unidad Especializada ante la cual se haya presentado la solicitud, consulta, aclaración, inconformidad o queja. 
                <br/><br/>
                El domicilio de la Unidad Especializada se encuentra en: __________ domicilio de la empresa, número de atención a usuarios será: __________ teléfono.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <b>VIGÉSIMO QUINTA. LEYES Y TRIBUNALES.</b> Este contrato se interpretará de conformidad con las disposiciones aplicables de la <b>LGTOC</b>, por la Legislación Mercantil de los Estados Unidos Mexicanos, por los usos mercantiles, y por el Código Civil Federal y/o Legislaciones de los Estados, en ese orden. Para el caso de conflicto respecto de su interpretación, cumplimiento y ejecución, las partes se somete a expresa e incondicionalmente a la jurisdicción de los tribunales competentes de la ciudad de Torreón, Coahuila, renunciando al efecto a cualquier fuero que por razón de domicilio, presente o futuro pudiere corresponderles. 
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                Leído que fue el presente contrato se firma por triplicado, con fecha _____________________.
            </p> 
        </div>

        <div class="row">
            <p class="text-justify"> 
                <table class="firma3">
                    <tbody class="text-center">
                        <tr>
                            <td>
                                <p>_____________________________________</p>
                                <b class="small">SERVICIOS ADMINISTRATIVOS CREDILAGUNA S.A. DE C.V.</b>
                            </td>
                            <td>
                                <p>_____________________________________</p>
                                <b class="small">“LA ACREDITADA”</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </p> 
        </div>

    </div>



    

 @endforeach
   
 
</body>
</html>
function terminos_cambio(checkbox){
    //Si está marcada ejecuta la condición verdadera.
    if(checkbox.checked){
      $('#vacaciones_notomadas').show();
    }

    else{
      $('#vacaciones_notomadas').hide();
    }
}

function chekinfonavit(checkbox){
    //Si está marcada ejecuta la condición verdadera.
    if(checkbox.checked){
      $('#tipo_descuento_infonavit').show();
      $('#factor_sua').show();
      $('#descuento_quincenal').show();
      $('#numero_credito_infonavit').show();

    }
    //Si se ha desmarcado se ejecuta el siguiente mensaje.
    else{
      $('#tipo_descuento_infonavit').hide();
      $('#factor_sua').hide();
      $('#descuento_quincenal').hide();
      $('#numero_credito_infonavit').hide();
      $("#descuento_quincenal").val(0);
      $("#factor_sua").val(0);
    
    }
}


  function operaciones()
  {
 
    var diff = 0;
    var Totaldiastrabajadosvacaciones = 0;
    var totaldiastrabajadostotales=0;

    //obtenemos las fechas con las que haremos los calculos
    var fehcha_baja = document.getElementById("fecha_baja").value;
    var fechainicio = document.getElementById("fecha_ingreso_empelado").value;


    var fechabaj = new Date(fehcha_baja);
    const añoactual = fechabaj.getFullYear();
    const mesactual = fechabaj.getMonth()+1;
    const diaactual = fechabaj.getDate();
    var fechaingreso = new Date(fechainicio);
    const añoingreso = fechaingreso.getFullYear();
    const mesingreso = fechaingreso.getMonth()+1;
    const diaingreso = fechaingreso.getDate();

    

    //esto para sacar prima vacacional
    if(añoactual == añoingreso){
      //se cuentan los dias en el mismo año
       diff = fechabajo - fechaIni;
       Totaldiastrabajadosvacaciones = Math.floor(diff / (1000 * 60 * 60 * 24));
    }
    else{
      año=añoactual-1;
      fechaIni = new Date(año+'-'+mesingreso+'-'+diaingreso);
      fechadebaja = new Date(fehcha_baja);
      diff = fechadebaja - fechaIni;
      Totaldiastrabajadosvacaciones = Math.floor(diff / (1000 * 60 * 60 * 24));
  
    }
     
    var fechaIni = new Date(fechainicio);
    var fechabajo = new Date(fehcha_baja);
    var diffe = fechabajo - fechaIni;
    var diasvacaciones = 0;
    Totaldiastrabajados = Math.floor(diffe / (1000 * 60 * 60 * 24));
    if(Totaldiastrabajados <= 729)
    {  
      diasdevacaciones = 12;
    }
    if(Totaldiastrabajados  >=730 &&  Totaldiastrabajados <= 1094)
    {  
      diasdevacaciones = 14;
    }

    if(Totaldiastrabajados  >=1095 &&  Totaldiastrabajados <= 1459)
    {  
      diasdevacaciones = 16;
    }

    if(Totaldiastrabajados  >=1460 &&  Totaldiastrabajados <= 1825)
    {  
      diasdevacaciones = 18;
    }

    
    if(Totaldiastrabajados  >=1826 &&  Totaldiastrabajados <= 2189)
    {  
      diasdevacaciones = 20;
    }

    if(Totaldiastrabajados  >=2190 &&  Totaldiastrabajados <=2554 )
    {  
      diasdevacaciones = 22;
    }

    if(Totaldiastrabajados  >=2555 &&  Totaldiastrabajados <=2919 )
    {  
      diasdevacaciones = 24;
    }

    if(Totaldiastrabajados  >=2920 &&  Totaldiastrabajados <=3284 )
    {  
      diasdevacaciones = 26;
    }

    if(Totaldiastrabajados  >=3284 &&  Totaldiastrabajados <=3285 )
    {  
      diasdevacaciones = 28;
    }

    if(Totaldiastrabajados  >=3285 &&  Totaldiastrabajados <=3649 )
    {  
      diasdevacaciones = 30;
    }

    if(Totaldiastrabajados  >=3650 &&  Totaldiastrabajados <=5000 )
    {  
      diasdevacaciones = 32;
    }
  
    var salarioc =$("#salario").val();
    var salarioM= $("#salarioMensual").val();
    var diagratificacion = document.getElementById("diasgratificacion").value;
    var diastrabajados = $("#dias_trabajados").val();
    var diastrabajadosdeber = $("#dias_trabajadosa_deber").val();
    var vacacionesnotomadas = $("#vacaciones_notomadas").val();
    var deduccionimms =  $("#imms").val();
    var deduccioninfonavit =  $("#infonavit").val();
    var deducciontransporte =  document.getElementById("transporte").value;
    var otrasper =  document.getElementById("otras").value;
    // alert(otrasper);
    var deduccionorestamo =  $("#prestamo").val();
    var deduccionotroa =  $("#otras").val();

    //en este apartado vamos a calcular lo que debe de infonavit segun su credito

    var tipopago =  $("#t_infonavit").val();
    var saldoadeberinfonavit=0;

    pagosuainfonavit =  $("#infonavit").val();
  

    if(pagosuainfonavit==parseFloat(0).toFixed(2));
    {
      saldoadeberinfonavit=0;
    }
    if(tipopago == 'CF' && pagosuainfonavit  != parseFloat(0).toFixed(2))
    {
      pagosuainfonavit =  $("#infonavit").val();
      saldoadeberinfonavit = (pagosuainfonavit*2)/61*(diastrabajadosdeber)+15;
    }
    if(tipopago == 'VSM' && pagosuainfonavit  != parseFloat(0).toFixed(2))
    {
      pagosuainfonavit =  $("#infonavit").val();
      saldoadeberinfonavit = (pagosuainfonavit*103.74*2)/61*(diastrabajadosdeber)+15;
    }
    if(tipopago == 'N/A')
    {
        saldoadeberinfonavit=0;
    }
  
 
    var aguinaldo = 15/365*diastrabajados*salarioc;
    var gratificacion = diagratificacion*salarioc;
    var sueldopropo = salarioc*diastrabajadosdeber;
    var diasvacaciones = (((diasdevacaciones/365)*Totaldiastrabajadosvacaciones)*salarioc);
    var primavacacional = ((diasvacaciones)*.25);
    var totaldiasnotomados = parseFloat(vacacionesnotomadas*salarioc).toFixed();
    var totalpercepciones = aguinaldo+gratificacion+sueldopropo+primavacacional;
    var totalprecepcionesfinal = (otrasper+totaldiasnotomados-1+totalpercepciones+1);
    //falta agregar las demas deducciones

    
    var total = (((((((otrasper+totaldiasnotomados-1+aguinaldo+gratificacion+sueldopropo+primavacacional+1)-parseFloat(deduccionimms).toFixed(2))-parseFloat(saldoadeberinfonavit).toFixed(2)-parseFloat(deducciontransporte).toFixed(2))-parseFloat(deduccionorestamo).toFixed(2))-parseFloat(deduccionotroa).toFixed(2))));
    let totaldeduccion =total-(aguinaldo+gratificacion+sueldopropo+primavacacional);
  

  // calculamos el aguinaldo del empleado a deber segun la fecha de ingreso
    $("#Aguinaldo_poporcional").val(parseFloat(aguinaldo).toFixed(2));
    $("#total_p").val(parseFloat(totalprecepcionesfinal).toFixed(2));
    $("#total_d").val(parseFloat(totaldeduccion).toFixed(2).substr(1,15));
    $("#gratificacion").val(parseFloat(gratificacion).toFixed(2));
    $("#sueldo_poporcional").val(parseFloat(sueldopropo).toFixed(2));
    $("#vacaciones_poporcionales").val(parseFloat(primavacacional).toFixed(2));
    $("#infonavit").val(parseFloat(saldoadeberinfonavit).toFixed(2));
    $("#total_entregar").val(parseFloat(total).toFixed(2));
//sumamos el total de dinero a otorgar al trabajador
  }

  function limpiar()
  {
    $("#Aguinaldo_poporcional").val(parseFloat(0).toFixed(2));
    $("#total_p").val(parseFloat(0).toFixed(2));
    $("#total_d").val(parseFloat(0).toFixed(2));
    $("#gratificacion").val(parseFloat(0).toFixed(2));
    $("#sueldo_poporcional").val(parseFloat(0).toFixed(2));
    $("#vacaciones_poporcionales").val(parseFloat(0).toFixed(2));
  
  }

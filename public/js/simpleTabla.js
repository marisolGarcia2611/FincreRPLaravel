$(document).ready(function() {
    

    var table = $('#tblempleados').DataTable( {
          "dom": 'B<"float-left"l><"float-right"f>t<"float-left"i><"float-right"p><"clearfix">',
          responsive: true,
          scrollY: 500,
          scrollX: false,
          "language": {
              "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
          },
          
      } );
      new $.fn.dataTable.FixedHeader( table );
  });
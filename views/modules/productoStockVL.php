<!-- Vista en lista de los productos en stock -->
<table class="table table-hover table-bordered table-striped dt-responsive tablas">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Categoría</th>
            <th>Medida</th>
            <th>Valor</th>
            <th>Estado</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Total</th>
            <th>SVG</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i<6; $i++){ ?>
            <tr>
                <td>0001</td>
                <td>(Imagen)</td>
                <td>Corona Angie</td>
                <td>Anillos</td>
                <td>10</td>
                <td>Plata</td>
                <td>Activo</td>
                <td>200</td>
                <td>200</td>
                <td>40 000</td>
                <td>0001.svg</td>
                <td></td>
            </tr>
        <?php }?>
    </tbody>
</table>
<script>
  $(".tablas").DataTable({

  "language": {

    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
    "sFirst":    "Primero",
    "sLast":     "Último",
    "sNext":     "Siguiente",
    "sPrevious": "Anterior"
    },
    "oAria": {
      "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
      "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }

  }

 });
</script>
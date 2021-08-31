$(document).ready( function () {
    $('#usuarios').DataTable(
        {
            "lengthMenu": [[1, 2, 5, -1], [1, 2, 5, "Todos"]],
            "language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"},
            
  
        }
    );
} );

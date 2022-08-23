$(document).ready(function() {
    $('#resoluciones-table').DataTable({

        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
        "language":{
            "search":"Buscar",
            "lengthMenu":"Mostrar _MENU_  registros por pagina",

            "info":"Mostrando pagina _PAGE_ de _PAGES_",
            "paginate":{
                            "previous":"Anterior",
                            "next":"Siguiente",
                            "first":"Primero",
                            "last":"Ultimo"
            }
        }
    });
} );

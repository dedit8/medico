

            $(document).ready( function () {
              var table =  $('#pdo_register').DataTable({
                                "ajax":{
                                  "method":"POST",
                                  "url":"listregistea.php"
                                },
                                "columns":[
                                      {"data":"id"},
                                    {"data":"dni"},
                                  {"data":"mutual"},
                                  {"data":"obra"},
                                  {"data":"carnet"},
                                  {"data":"tel"},


  {"defaultContent":"<button class='button_small-check' id='check'><i class='fas fa-check'></i></button>"}
                                ],
                                "language": idioma_español
                              });

                  //  Función para traer el dato ID de la tabla y modificar el entregado
                  $('#pdo_register tbody').on('click', 'button#check', function(){
                    let data = table.row($(this).parents('tr')).data();
                    let parametros = {
                      id: data.id,
                      entregado: data.entregado
                    }
                    $.ajax({
                      type: "post",
                      url:"pdo_chec.php",
                      data: parametros,
                      success: function(data){
                        table.ajax.reload();
                      }
                    })
                  });
                  //  Función para eliminar los registros
                  $('#pdo_register tbody').on('click', 'button#delete', function(){
                    let data = table.row($(this).parents('tr')).data();
                    let parametros = {
                      id: data.id
                    }
                    $.ajax({
                      type:"post",
                      url:"verdat.php",
                      data: parametros,
                      success: function(data){
                        table.ajax.reload();
                      }
                    })
                  })





                } );
                var idioma_español = {
                  "decimal": "",
                  "emptyTable": "No posee ningún dato",
                  "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                  "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                  "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                  "infoPostFix": "",
                  "thousands": ",",
                  "lengthMenu": "Mostrar _MENU_ Entradas",
                  "loadingRecords": "Cargando...",
                  "processing": "Procesando...",
                  "search": "Buscar:",
                  "zeroRecords": "Sin resultados encontrados",
                  "paginate": {
                      "first": "Primero",
                      "last": "Ultimo",
                      "next": "Siguiente",
                      "previous": "Anterior"
                  }
                };

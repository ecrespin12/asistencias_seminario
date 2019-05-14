
    <!-- inicio - scripts personalizados -->
    <script>
        $('#tabla').DataTable({
          "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        },

          dom: 'Bfrtip',
          buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
       
    </script>
    <!-- fin - scripts personalizados -->
    <script>  


    $('#frm_seminario_new').on("submit", function(event){  
      event.preventDefault();  
      if($('#txtFacultad_new').val() == "")    
        alert("Facultad es requerida");  
      
      else if($('#txtEscuela_new').val() == "")   
        alert("Escuela es requerida");  
      
      else if($('#txtCodigo_new').val() == "") 
        alert("Codigo de seminario es requerido"); 
      
      else if($('#txtSeminario_new').val() == "") 
        alert("Nombre de seminario es requerido"); 
    else  
    {  
      $.ajax({  
        url:"<?php echo base_url();?>admin/Seminario/insertSeminario",  
        method:"POST",  
        data:$('#frm_seminario_new').serialize(),  
        beforeSend:function(){  
          $('#guardar').val("Guardando...");  
         }, 
    
         success:function(data){  
          $('#frm_seminario_new')[0].reset(); 
       
          $('#modal_seminario_new').modal('hide'); 
          $('#guardar').val("Guardar"); 
          // $('#tabla_seminario').html(data); 
       
        }  
      });  
    }  
  });

  var base_url ="<?php echo base_url();?>";


    //TODO: Tengo que comentar este metodo antes que se me olvide xD  
      $('.alert-delete').on("click", function(e) {

        e.preventDefault();
          var ruta = $(this).attr("href");

        swal({
            html:true,
            title: "<h3>¿Quieres eliminar este registro?</h3>",
            text: "<h5>No podrá recuperar el registro una vez sea eliminado</h5>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Si, Eliminarlo',
            cancelButtonText: "No, Cancelar",
            confirmButtonClass: "btn-danger",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {
            if (isConfirm) {

                swal({
                    html:true,
                    title: "<h3 class='paddingMsjAlert'>¡Eliminado!</h3>",
                    text: "<h4>El registro se ha eliminado</h4>",
                    type: "success",
                    timer: 4000
                });
                            
                $.ajax({
                  url:ruta,
                  type:"POST",
                  success:function(resp){
                    //  swal("Eliminado", "El registro ha sido eliminado", "success");
                       window.location.href = base_url = resp;      
                  }
            });
            } else {
              swal("¡Cancelado!", "Su cliente está a salvo! :)", "error");
              swal({
                    html:true,
                    title: "<h3 class='paddingMsjAlert'>¡Cancelado!</h3>",
                    text: "<h4>Se ha cancelado la eliminacion</h4>",
                    type: "success",
                
                });

            }
          });
      });


 </script>


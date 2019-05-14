<footer class="footer">
            © 2019 Estandares de Programacion | Grupo 12
        </footer>
        <!-- Fin footer -->
 
    </div>
    <!-- fin Wrapper -->
 
    <!-- Jquery -->
    <script src="<?php echo base_url();?>assets/template/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url();?>assets/template/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url();?>assets/build/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url();?>assets/build/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url();?>assets/build/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url();?>assets/template/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/sparkline/jquery.sparkline.min.js"></script>

    <!--Custom JavaScript -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- data table -->
    <script src="<?php echo base_url();?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>

    <!-- inicio - Esto es para la funcionalidad de exportar -->
    <script src="<?php echo base_url();?>assets/template/cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/template/cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- fin - Esto es para la funcionalidad de exportar -->

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
        url:"<?php echo base_url();?>admin/Seminario_api/insertSeminario",  
        method:"POST",  
        data:$('#frm_seminario_new').serialize(),  
        beforeSend:function(){  
          $('#guardar').val("Guardando...");  
         }, 
    
         success:function(data){  
          $('#frm_seminario_new')[0].reset(); 
       
          $('#modal_seminario_new').modal('hide'); 
          // $('#tabla_seminario').html(data); 
       
        }  
      });  
    }  
  });

  

 </script>




</body>
</html>



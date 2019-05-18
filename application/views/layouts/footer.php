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

    <script src="<?php echo base_url(); ?>assets/template/sweetAlert/sweetalert.js"></script>
    <script src="<?php echo base_url(); ?>assets/template/dropify/dist/js/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Deseas eliminar este archivo \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('Archivo Eliminado');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Tiene Errores');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>

</body>
</html>


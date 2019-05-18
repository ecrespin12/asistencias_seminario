<!-- Page wrapper  -->
<div class="page-wrapper">

    <!-- Container fluid  -->
    <div class="container-fluid">

        <!-- Barra lateral y right sidebar toggle -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">USUARIOS</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#modal_usuario_new"><i class="fas fa-plus"></i> Agregar usuario</button>
                </div>
            </div>
        </div>
        <!-- Fin Barra lateral y right sidebar toggle -->

        <!-- Inicio Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listado de usuarios</h4>

                        <div id="tabla_usuarios" class="table-responsive m-t-40">
                            <table id="tabla" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Usuario</th>
                                        <th>Estado</th>
                                        <th>Rol</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($listadoUsuarios)) : ?>
                                        <?php foreach ($listadoUsuarios as $usuario) : ?>
                                            <tr>
                                                <td><?php echo $usuario->usuarioID; ?></td>
                                                <td><?php echo $usuario->usuario; ?></td>
                                                <td><?php echo $usuario->estado; ?></td>
                                                <td><?php echo $usuario->rolID; ?></td>
                                                <td><?php echo $usuario->fechaAlta; ?></td>
                                                <td>
                                                    <button class="btn btn-sm btn-warning update" type="button" data-toggle="modal" data-target="#modal_edit_usuario" value="<?php echo $usuario->usuarioID; ?>"><span class="fas fa-pencil-alt"></span></button>
                                                    <a href="<?php echo base_url() ?>admin/Usuario/deleteUsuario/<?php echo $usuario->usuarioID; ?>" class="btn btn-sm btn-danger alert-delete"> <span class="fas fa-trash-alt"></span></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin PAge Content -->

    </div>
    <!-- Fin Container fluid  -->
</div>
<!-- Fin Page wrapper  -->


<!-- modal content nuevo usuario -->
<div id="modal_usuario_new" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <b>
                    <h4 class="modal-title">AGREGAR NUEVO USUARIO</h4>
                </b>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="frm_usuario_new" method="post">
                    <div class="form-group">
                        <label class="control-label">Usuario:</label>
                        <input type="text" class="form-control" id="txtUsuario_new" name="txtUsuario_new" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password:</label>
                        <input type="text" class="form-control" id="txtPassword_new" name="txtPassword_new" placeholder="Ingresar contraseña">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Estado:</label>
                        <input type="text" class="form-control" id="txtEstado_new" name="txtEstado_new" placeholder="Ingresar estado">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Rol:</label>
                        <input type="text" class="form-control" id="txtRol_new" name="txtRol_new" placeholder="Ingresar codigo de rol">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Fecha de alta:</label>
                        <input type="date" class="form-control" id="dateUsuario_new" name="dateUsuario_new">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <!-- <button type="submit" name="insert" id="insert" class="btn btn-primary">Guardar</button> -->
                <input type="submit" name="guardar" id="guardar" value="Guardar" class="btn btn-primary" />

            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->


<!-- modal content edit usuario -->
<div id="modal_edit_usuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <b>
                    <h4 class="modal-title">MODIFICAR USUARIO</h4>
                </b>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="frm_edit_usuario" method="post">
                <div class="form-group">
                        <label class="control-label">ID:</label>
                        <input type="text" readonly class="form-control" id="txtID_edit" name="txtID_edit" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Usuario:</label>
                        <input type="text" class="form-control" id="txtUsuario_edit" name="txtUsuario_edit" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password:</label>
                        <input type="text" class="form-control" id="txtPassword_edit" name="txtPassword_edit" placeholder="Ingresar contraseña">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Estado:</label>
                        <input type="text" class="form-control" id="txtEstado_edit" name="txtEstado_edit" placeholder="Ingresar estado">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Rol:</label>
                        <input type="text" class="form-control" id="txtRol_edit" name="txtRol_edit" placeholder="Ingresar codigo de rol">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Fecha de alta:</label>
                        <input type="date" class="form-control" id="dateUsuario_edit" name="dateUsuario_edit">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-primary" value="Actualizar" id="actualizar" name="actualizar">
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- <script src="<?php echo base_url(); ?>assets/ajaxList/seminarios/seminario.js"></script> -->
<!-- Formulario de registro -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"> Registro de Usuario </div>
                        <?php $validation = \Config\Services::validation(); ?>
                        <!-- Metodo post del form no se ven los datos en el navegador, son para enviar informacion-->
                        <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                        <?=csrf_field();?>
                         <?=csrf_field();?>
                         <!-- Metodos de validacion de datos-->
                         <?php if(!empty (session()->getFlashdata('fail'))):?>
                            <div class="alert alert-danger" style="text-align: center;">
                                <?=session()->getFlashdata('fail');?></div>
                         <?php endif ?>
                         <?php if(!empty (session()->getFlashdata('success'))):?>
                            <div class="alert alert-success" style="text-align: center;">
                                <?=session()->getFlashdata('success');?></div>
                         <?php endif ?>
                            <div class="card-body">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        <!-- Error y mostrar el error-->
                                            <?php if($validation->getError('nombre')) {?>
                                                <div class="alert alert-danger mt-2">
                                                    <?= $error = $validation->getError('nombre');?>
                                                </div>
                                            <?php }?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                                         <!-- Error y mostrar el error-->
                                            <?php if($validation->getError('apellido')) {?>
                                                <div class="alert alert-danger mt-2">
                                                    <?= $error = $validation->getError('apellido');?>
                                                </div>
                                            <?php }?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                         <!-- Error y mostrar el error-->
                                            <?php if($validation->getError('email')) {?>
                                                <div class="alert alert-danger mt-2">
                                                    <?= $error = $validation->getError('email');?>
                                                </div>
                                            <?php }?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                                         <!-- Error y mostrar el error-->
                                            <?php if($validation->getError('usuario')) {?>
                                                <div class="alert alert-danger mt-2">
                                                    <?= $error = $validation->getError('usuario');?>
                                                </div>
                                            <?php }?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" name="pass" required>
                                         <!-- Error y mostrar el error-->
                                            <?php if($validation->getError('pass')) {?>
                                                <div class="alert alert-danger mt-2">
                                                    <?= $error = $validation->getError('pass');?>
                                                </div>
                                            <?php }?>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <a href=principal type="button" class="btn btn-danger">Cancelar</a>
                                    </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
<br>u  

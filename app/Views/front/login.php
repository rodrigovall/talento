<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesión
                    </div>

                    <!-- Mensaje de error de sesion enviado desde el controlador -->
                    <?php if(session()->getFlashdata('msg')):?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('msg')?>
                        </div>
                    <?php endif;?>

                    <!-- Formulario de inicio de sesión -->
                    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="pass" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
							<a href="<?php echo base_url('login');?>" type="button" class="btn btn-danger">Cancelar</a>
							<hr>
							¿Aún no se registró?<a href="<?php echo base_url('/registro');?>" > Registrarse aquí </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

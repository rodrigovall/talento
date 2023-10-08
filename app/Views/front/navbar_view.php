<!-- Inicio Barra de navegación principal -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href=<?php echo base_url('principal');?>>
                <!-- Logo -->
                <img src="assets/img/logo.jpg" alt="Logo" width="75" heigth="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- SESION ADMIN -->
            <?php if(session()->perfil_id == 1): ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="principal">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acercade">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/logout');?>">Cerrar Sesión</a>
                        </li>
                   </ul>
                </div>
            <!-- SESION CLIENTES -->          
              <?php elseif(session()->perfil_id == 2): ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="principal">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acercade">Acerca de</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/logout');?>">Cerrar Sesión</a>
                        </li>
                   </ul>
                </div>    
            <!-- SESION PARA USUARIOS NO LOGUEADOS -->
            <?php else:?>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="principal">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acercade">Acerca de</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="registro">Registrarse</a>
                    </li>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            <?php endif;?>    
            </div>
        </div>
    </nav>
<!-- Fin Barra de navegación principal -->

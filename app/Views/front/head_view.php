<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/logoHeader-green.png');?> " />
    <title><?php echo($titulo); ?> </title>
    <!--  Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo base_url(' assets/css/css/estilos.css');?>" >
  </head>
  	<header>
      <div class="head">
    		<h3>Bienvenidos</h3>
        <div style="padding-right: 10px;">
          <?php 
            $session    = session();
            $nombre     = $session->get('nombre');
            $perfil     = $session->get('perfil_id');
          ?>
          <?php if(session()->perfil_id == 1): ?>
                  <div class="btn btn-outline-danger active btnUSer btn-sm">
                    <img class="center" height="30px" width="30px" src="<?php echo base_url('assets/img/cliente.jpeg');?> ">
                     <h7> Admin: <?php echo session('nombre'); ?></h7>
                  </div>   
          <?php elseif(session()->perfil_id == 2): ?>
                  <div class="btn btn-outline-warning active btnUSer btn-sm">
                    <img class="center" height="30px" width="30px" src="<?php echo base_url('assets/img/cliente.jpeg');?> ">
                    <h7> Cliente: <?php echo session('nombre'); ?></h7>
                  </div>
          <?php endif;?>        
        </div>
      </div>
  	</header>
  <body>
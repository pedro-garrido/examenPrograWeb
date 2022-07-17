<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!DOCTYPE html>

<html>

<head>
  <title>Taller Don Gualo</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
</head>

<body>
  <div class="contenedor">
    <header class="superior">
      <div class="logo">
        <a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Logo" /></a>
      </div>
      <nav class="menu">
        <ul>
          <a href="<?php echo base_url();?>">
            <li>Inicio</li>
          </a>
          <a href="">
            <li>Quienes Somos</li>
          </a>
          <a href="#servicio">
            <li>Servicios</li>
          </a>
          <a href="<?php echo base_url();?>index.php/main/contacto">
            <li>Contacto</li>
          </a>

          <a href="<?php echo base_url();?>index.php/vehiculo">
            <li>Sistema</li>
          </a>

        </ul>
      </nav>
    </header>

    <section>
      <img src="<?php echo base_url('assets/img/principal.jpg'); ?>" alt="" id="imgprincipal" />
    </section>

    <!-- servicios -->
    <section>
      <h1 class="titulo" id="servicio">Bienvenidos a Taller Don Gualo</h1>
      <article class="art1">
        <h2>Mecánica en General</h2>
        <ul>
          <li>Ajuste de Motor</li>
          <li>Cambio de Empaquetadura</li>
          <li>Reparación de Frenos</li>
          <li>Caja de Cambios</li>
          <li>Afinamiento</li>
        </ul>
        <img src="<?php echo base_url('assets/img/mecanica.jpg');?>" alt="" />
      </article>
      <article class="art2">
        <h2>Electricidad Automotiz</h2>
        <ul>
          <li>Cierre Centralizado</li>
          <li>Alarmas</li>
          <li>Alzavidrios</li>
          <li>Luces</li>
          <li>Reparacion Circuito Electrico</li>
        </ul>
        <img src="<?php echo base_url('assets/img/electricidad.jpg');?>" alt="" />
      </article>
    </section>

    <!-- footer -->
    <footer class="pie">
      <div class="numero">
        <img class=".logo" src="<?php echo base_url('assets/img/logo.png');?>" alt="imagen logo footer" />
        <p>Estamos Ubicados en Chanquico Sur S/N - San Javier</p>
        <p>Llámanos al +569 12312345</p>
      </div>
      <div class="rrss">
        <p>Siguenos en:</p>
        <ul>
          <li>
            <a href="https://www.instagram.com/"><img src="<?php echo base_url('assets/img/insta.png');?>" alt="imagen instagram" /></a>
          </li>
          <li>
            <a href="https://www.twitter.com/"><img src="<?php echo base_url('assets/img/twt.png');?>" alt="imagen twitter" /></a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
</body>

</html>
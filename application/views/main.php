<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<!DOCTYPE html>

<html>

<?php $this->load->view('includes/head'); ?>

<body>

  <?php $this->load->view('includes/navbar'); ?>

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
      <img src="<?php echo base_url('assets/img/mecanica.jpg'); ?>" alt="" />
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
      <img src="<?php echo base_url('assets/img/electricidad.jpg'); ?>" alt="" />
    </article>
  </section>

  </div>






</body>

<?php $this->load->view('includes/footer'); ?>

</html>
<!DOCTYPE html>

<html>

<?php $this->load->view('includes/head'); ?>

<body>

  <?php $this->load->view('includes/navbar'); ?>

  <section class="contactForm">
    <h1 class="titulo">Formulario de Contacto</h1>
    <form id="form">
      <label for="nombre_campo">Nombre</label>
      <input type="text" name="nombrecampo" id="nombre_campo" />
      <br />
      <label for="apellidoP_campo">Apellido Paterno</label>
      <input type="text" name="apellidopaternocampo" id="apellidoP_campo" />
      <br />
      <label for="apellidoM_campo">Apellido Materno</label>
      <input type="text" name="apellidomaternocampo" id="apellidoM_campo" />
      <br />

      <h3>Sexo</h3>
      <input type="radio" id="femenino" name="genero" value="F" />
      <label for="femenino">SEXO FEMENINO</label>
      <br />
      <input type="radio" id="masculino" name="genero" value="M" />
      <label for="masculino">SEXO MASCULINO</label>
      <br />
      <input type="radio" id="otro" name="genero" value="O" />
      <label for="otro">OTRO</label>
      <br />
      <select id="selec" name="nacionalidad">
        <option value="" disabled selected>Seleccione su nacionalidad</option>
        <option value="JP">JAPON</option>
        <option value="MX">MEXICO</option>
        <option value="ES">ESPAÑA</option>
        <option value="FR">FRANCIA</option>

      </select>
      <label for="selec">NACIONALIDAD</label>
      <br />
      <input type="submit" value="ENVIAR" id="submit" />
    </form>
  </section>
  </div>
</body>
<?php $this->load->view('includes/footer'); ?>  

</html>
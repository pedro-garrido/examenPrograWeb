<!DOCTYPE html>

<html>
  <head>
    <title>Contacto</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="contenedor">
      <header class="superior">
        <div class="logo">
          <a href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="Logo" /></a>
        </div>

        <nav class="menu">
          <ul>
            <a href="<?php echo base_url();?>">
              <li>Inicio</li>
            </a>
            <a href="#">
              <li>Quienes Somos</li>
            </a>
            <a href="<?php echo base_url()?>#servicio">
              <li>Servicios</li>
            </a>
            <a href="<?php echo base_url();?>index.php/main/contacto">
              <li>Contacto</li>
            </a>
          </ul>
        </nav>
      </header>
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
      <footer class="pie">
        <div class="numero">
          <img src="img/logo.png" alt="" />
          <p>Estamos Ubicados en Chanquico Sur S/N - San Javier</p>
          <p>Llámanos al +569 12312345</p>
        </div>
        <div class="rrss">
          <p>Siguenos en:</p>
          <ul>
            <li>
              <a href="https://www.instagram.com/"
                ><img src="<?php echo base_url('');?>assets/img/insta.png" alt="imagen instagram"
              /></a>
            </li>
            <li>
              <a href="https://www.twitter.com/"
                ><img src="<?php echo base_url('');?>assets/img/twt.png" alt="imagen twitter"
              /></a>
            </li>
          </ul>
        </div>
      </footer>
    </div>
  </body>
</html>

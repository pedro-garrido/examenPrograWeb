<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<html>

<head>
    <title>Ingresar vehiculo</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
</head>

<body>
    <main>
        <div class="container">
            <h1>Ingresar vehiculo</h1>
            <!-- patente, marca, modelo, color -->
            <form action="<?php echo base_url(); ?>index.php/vehiculo/ingresar" method="post" id="formularioRegistro">
                <div class="form-group">
                    <label for="patente">Patente</label>
                    <input type="text" class="form-control" id="patente" name="patente" placeholder="Patente" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" required>
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo" required>
                </div>
                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" placeholder="Color" required>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>





        </div>



    </main>
    <script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</body>

</html>
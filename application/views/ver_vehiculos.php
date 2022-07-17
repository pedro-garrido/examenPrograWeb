<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>



<html>
<?php $this->load->view('includes/head'); ?>

<body>
    <?php $this->load->view('includes/navbar'); ?>

    <div class="container">
        <div class="row bg-primary">
            <div class="col-md-12">
                <h1 class="text-center titulo p-1">Lista vehiculos</h1>

            <table class="table text-light">
                <thead>
                    <tr>
                        <th scope="col">Patente</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vehiculos as $vehiculo) { ?>
                        <tr>
                            <td><?php echo $vehiculo->patente; ?></td>
                            <td><?php echo $vehiculo->marca; ?></td>
                            <td><?php echo $vehiculo->modelo; ?></td>
                            <td><?php echo $vehiculo->color; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <br/>
</body>
<?php $this->load->view('includes/footer'); ?>

</html>
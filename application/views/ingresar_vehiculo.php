<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<html>

<?php $this->load->view('includes/head'); ?>

<body>
    <?php $this->load->view('includes/navbar'); ?>
    <main>
        <div class="container bg-primary p-3">
            <h1 class="text-center titulo p-3">Ingresar vehiculo</h1>


            <?php echo form_open('vehiculo/ingresar'); ?>
            <div class="form-group p-3">
                <label for="patente" class="text-light">Patente</label>
                <input type="text" class="form-control" id="patente" name="patente" placeholder="Patente" value="<?php if ($patente) echo $patente ?>">
            </div>
            <div class="form-group p-3">
                <label for="marca" class="text-light">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="<?php if($marca) echo $marca?>">
            </div>
            <div class="form-group p-3">
                <label for="modelo" class="text-light">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo" value="<?php if($modelo) echo $modelo?>">
            </div>
            <div class="form-group p-3">
                <label for="color" class="text-light">Color</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Color" value="<?php if($color) echo $color?>">
            </div>

            <div class="text-light bg-danger text-center" id="validacion">
                <?php echo validation_errors(); ?>
            </div>
            <div class="form-group p-3 ">
                <button type="submit" class="btn btn-secondary btn-lg">Ingresar</button>
            </div>
            </form>
        </div>



    </main>
    <hr />
</body>
<?php $this->load->view('includes/footer'); ?>


</html>
<?php defined('BASEPATH') or exit('No direct script access allowed');

?>
<html>

<?php $this->load->view('includes/head'); ?>

<body>
    <?php $this->load->view('includes/navbar'); ?>

    <script>
        Swal.fire({
            title: '¡Exito!',
            text: 'Vehiculo ingresado correctamente',
            type: 'success',
            confirmButtonText: 'Aceptar',
        }).then((result) => {
            if (result.value) {
                window.location.href = "<?php echo base_url(); ?>";
            }
        });
    </script>
</body>
<?php $this->load->view('includes/footer'); ?>

</html>
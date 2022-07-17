<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="contenedor">
    <header class="superior">
        <div class="logo">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Logo" /></a>
        </div>
        <nav class="menu nav-bar">
            <ul>
                <a href="<?php echo base_url(); ?>">
                    <li>Inicio</li>
                </a>
                <a href="">
                    <li>Quienes Somos</li>
                </a>
                <a href="<?php echo base_url(); ?>#servicio">
                    <li>Servicios</li>
                </a>
                <a href="<?php echo base_url(); ?>index.php/main/contacto">
                    <li>Contacto</li>
                </a>

                <a class="dropdown">
                    <li>
                        <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            Sistema
                        </a>

                        <ul class="dropdown-menu bg-dark">
                            <a class="dropdown-item bg-dark" href="<?php echo base_url(); ?>index.php/vehiculo/insert">
                                <li>Vehiculos</li>
                            </a>
                            <a class="dropdown-item bg-dark" href="<?php echo base_url(); ?>index.php/vehiculo/getAll">
                                <li>Ver Vehiculos</li>
                            </a>
                        </ul>
                    </li>
                </a>

            </ul>
        </nav>
    </header>
</div>
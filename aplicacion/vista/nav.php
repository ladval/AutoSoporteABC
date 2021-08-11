<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="<?php echo config('base_url'); ?>/assets/img/group.png">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
            ABC Repecev
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="<?php if ($titulo == "Administrador") {
                            echo "active";
                        } else {
                            echo "inactive";
                        }; ?>">
                <a href="<?php echo config('base_url'); ?>Administrador">
                    <i class="nc-icon nc-circle-10"></i>
                    <p>Perfil</p>
                </a>
            </li>

            <li class="<?php if ($titulo == "Páginas") {
                            echo "active";
                        } else {
                            echo "inactive";
                        }; ?>">
                <a href="<?php echo config('base_url'); ?>Administrador/Paginas">
                    <i class="nc-icon nc-album-2"></i>
                    <p>Páginas</p>
                </a>
            </li>
            <li class="<?php if ($titulo == "Usuarios") {
                            echo "active";
                        } else {
                            echo "inactive";
                        }; ?>">
                <a href="<?php echo config('base_url'); ?>Administrador/Usuarios">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Usuarios</p>
                </a>
            </li>
            <li class="<?php if ($titulo == "Artículos") {
                            echo "active";
                        } else {
                            echo "inactive";
                        }; ?>">
                <a href="<?php echo config('base_url'); ?>Administrador/Articulos">
                    <i class="nc-icon nc-paper"></i>
                    <p>Articulos</p>
                </a>
            </li>
            <li class="<?php if ($titulo == "Comentarios") {
                            echo "active";
                        } else {
                            echo "inactive";
                        }; ?>">
                <a href="<?php echo config('base_url'); ?>Administrador/Comentarios">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>Comentarios</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nc-icon nc-simple-remove"></i>
                    <p>Cerrar sesión</p>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Navbar -->
<div class="main-panel">
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid row">
            <div class="col-6 align-center">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;"><?php echo $titulo ?></a>
                </div>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item btn-rotate dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="nc-icon nc-settings-gear-65"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Opciones</span>
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo config('base_url'); ?>Pagina">Páginas</a>
                            <a class="dropdown-item" href="<?php echo config('base_url'); ?>Usuario">Usuarios</a>
                            <a class="dropdown-item" href="<?php echo config('base_url'); ?>Articulo">Artículos</a>
                            <a class="dropdown-item" href="<?php echo config('base_url'); ?>Comentario">Comentarios</a>
                            <a class="dropdown-item" href="#">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>



        </div>
    </nav>
</div>
<!-- End Navbar -->
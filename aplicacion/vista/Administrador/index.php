<div class="main-panel">

    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="<?php echo config('base_url'); ?>/assets/img/user.png" alt="...">
                                <h5 class="title">Jesús Antonio Ladino</h5>
                            </a>
                            <p class="description">
                            ladval19@gmail.com
                            </p>
                        </div>

                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="button-container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                                    <h5>Fecha ingreso<br><small>2021-07-10</small></h5>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                                    <h5>Estado<br><small>Activo</small></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Editar perfil</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control" placeholder="Nombres" value="">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <input type="text" class="form-control" placeholder="Apellidos" value="">
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Dirección de correo electrónico</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">Actualizar perfil</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
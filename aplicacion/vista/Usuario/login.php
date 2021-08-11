<!-- Contenido sección login -->
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-4 col-md-8 col-sm-10 mt-5">
            <div class="card card-user">
                <div class="card-header  text-center">
                    <img src="../assets/img/group-1.png" alt="repecev"  width="128" height="128">
                    <h4 class="card-title text-center">Acceso aplicativos RPA</h4>
                </div>
                <div class="card-body">
                    <h5 class="text-danger"><?php if (!empty(GET()['error'])) {
                                                echo GET()['error'];
                                            } ?></h5>
                    <form action="<?php echo config('base_url') ?>usuario/ingresar" method="POST">
                        <label for="">Email</label>
                        <div class="form-floating">
                            <input type="email" name="user" class="form-control" required>
                        </div>
                        <br>
                        <label for="">Password</label>
                        <div class="form-floating">
                            <input type="password" name="pass" class="form-control" required>
                        </div>
                        </br>
                        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Ingresar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



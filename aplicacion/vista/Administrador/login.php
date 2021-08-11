<!-- Contenido sección login -->
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-4 col-md-2 col-sm-1"></div>
        <div class="col-lg-4 col-md-8 col-sm-10">
            <br>
            <h1 class="h3 mb-3 fw-normal">LOGIN ADMINISTRADOR</h1>
            <h5 class="text-danger"><?php if (!empty(GET()['error'] )) {
                                        echo GET()['error'];
                                    } ?></h5>
            <form action="<?php echo config('base_url') ?>administrador/ingresar" method="POST">
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
        <div class="col-lg-4 col-md-2 col-sm-1"></div>
    </div>
</div>
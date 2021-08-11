<div class="main-panel">
    <div class="content">
        <div class="row justify-content-md-center">
            <div class="col-lg-4 col-md-8 col-sm-10">
                <div class="card">
                    <div class="card-header  text-center">
                        <img src="../assets/img/exec.png" alt="repecev" width="128" height="128">
                        <h4 class="card-title text-center mt-4">Actualización de radicados</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" id="formIntercomex">
                            <input type="hidden" value="<?php echo config('base_url') ?>usuario/radicado" id="formIntercomex:RedirectPost">
                            <div class="row justify-content-md-center mb-3">
                                <div class="col-md-6 justify-content-md-center">

                                    <div class="form-group">
                                        <label>Número DO</label>
                                        <input type="text" class="form-control" placeholder="" value="">
                                    </div>

                                    <button class="w-100 btn btn-md btn-primary" type="submit" id="formIntercomex:Submit">Ejecutar</button>
                                    <button class="w-100 btn btn-md btn-primary" type="button" id="formIntercomex:Loading" style="display:none" disabled>
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        <span class="sr-only">Loading...</span>
                                    </button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
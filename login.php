<?php include 'header.php'; ?>
    <section id="main-wrap" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="main-title">
                        Ingresa a tu cuenta
                    </h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 mx-auto m-4">
                                    <form class="form-gg" action="cart.php">
                                        <div class="form-group row">
                                            <label for="inputNroDocumento" class="col-sm-4 col-form-label">N° documento</label>
                                            <div class="col-sm-8">
                                                <input type="text" maxlength="15" class="form-control" id="inputNroDocumento" placeholder="Número entre 8 a 15 dígitos.">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword" class="col-sm-4 col-form-label">Contraseña</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Código entre números y letras">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-4">Iniciar Sesión</button>
                                        <div>¿Todavía no tienes una cuenta? <a href="#">Registrarse!</a></div>
                                        <div>Olvidé mi contraseña <a href="#">Restaurar contraseña</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
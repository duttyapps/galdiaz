<?php include "header.php"; ?>
    <section id="main-wrap" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="main-title">
                        Formulario de Datos de la Compra
                    </h2>
                    <div class="alert alert-primary text-right" role="alert">
                        Tiempo máximo de productos comprometidos: 0día 0hr. 16min. 11seg.
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5>
                                Datos Personales
                            </h5>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        * <label for="inName">Nombres</label>
                                        <input type="text" id="inName" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        * <label for="inAPaterno">Apellido Paterno</label>
                                        <input type="text" id="inAPaterno" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        * <label for="inAPaterno">Apellido Materno</label>
                                        <input type="text" id="inAMaterno" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="inDNI">DNI</label>
                                        <input type="text" id="inDNI" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        * <label for="inDepartamento">Departamento</label>
                                        <select name="inDepartamento" id="inDepartamento" class="form-control">
                                            <option value="">Lima</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        * <label for="inProvincia">Provincia</label>
                                        <select name="inProvincia" id="inProvincia" class="form-control">
                                            <option value="">Lima</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        * <label for="inDistrito">Distrito</label>
                                        <select name="inDistrito" id="inProvincia" class="form-control">
                                            <option value="">Cercado de Lima</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="inTelefono">Teléfono Principal</label>
                                        <input type="text" id="inTelefono" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="inCorreo">Correo Electrónico</label>
                                        <input type="text" id="inCorreo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <label for="inDireccion">Dirección de Domicilio</label>
                                        <input type="text" id="inDireccion" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <h5>
                                Datos de Contacto
                            </h5>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inDNIC">DNI Contacto</label>
                                        <input type="text" id="inDNIC" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inNombreContacto">Nombre de Contacto</label>
                                        <input type="text" id="inNombreContacto" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="inTelefonoRef">Teléfono Referencial</label>
                                        <input type="text" id="inTelefonoRef" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <h5>
                                Datos de Compra
                            </h5>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        * <label for="inAgencia">Agencia de Envío</label>
                                        <input type="text" id="inAgencia" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="inTipo">Tipo de Envío</label>
                                        <input type="text" id="inTipo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="inDireccionEnvio">Dirección de Envío</label>
                                        <input type="text" id="inDireccionEnvio" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>Tipo Comprobante</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                   id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Boleta</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                   id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Factura</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php include "footer.php"; ?>
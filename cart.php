<?php include 'header.php'; ?>
<section id="main-wrap" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="main-title">
                    Carrito de Compras
                </h2>
                <div class="alert alert-primary">
                    *Estimado cliente recuerda que la compra mínima es de S/.30 para cada empresa.
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Descripción</th>
                        <th></th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Sub-total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <img src="https://www.grupogaldiaz.com/Content/Template/images/index/378873--.jpg" width="98">
                        </td>
                        <td>
                            <h3>estante para torta de plastico blanco</h3>
                            <h5 class="text-muted">
                                <b>CÓDIGO:</b> 378873
                            </h5>
                        </td>
                        <td>
                            <div>STOCK DISPONIBLE</div>
                            <div>32 UND</div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select class="form-control">
                                    <?php
                                    for ($i=1;$i<20;$i++) {
                                        ?>
                                        <option value=""><?php echo $i; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-primary">Actualizar</button>
                            </div>
                        </td>
                        <td>
                            <div>S/ 49.00</div>
                            <div>(Inc. IGV)</div>
                        </td>
                        <td>
                            <div>S/ 49.00</div>
                            <div>(Inc. IGV)</div>
                        </td>
                        <td>
                            <i class="far fa-trash-alt"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="https://www.grupogaldiaz.com/Content/Template/images/index/yE1708--.jpg" width="98">
                        </td>
                        <td>
                            <h3>envase de metal</h3>
                            <h5 class="text-muted">
                                <b>CÓDIGO:</b> 378873
                            </h5>
                        </td>
                        <td>
                            <div>STOCK DISPONIBLE</div>
                            <div>7 UND</div>
                        </td>
                        <td>
                            <div class="form-group">
                                <select class="form-control">
                                    <?php
                                    for ($i=1;$i<20;$i++) {
                                    ?>
                                        <option value=""><?php echo $i; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-primary">Actualizar</button>
                            </div>
                        </td>
                        <td>
                            <div>S/ 33.00</div>
                            <div>(Inc. IGV)</div>
                        </td>
                        <td>
                            <div>S/ 33.00</div>
                            <div>(Inc. IGV)</div>
                        </td>
                        <td>
                            <i class="far fa-trash-alt"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div>
                    *GALDIAZ EIRL: S/.82.00
                </div>
                <div>
                    MONTO TOTAL:	  S/.82.00
                </div>
            </div>
            <div class="col-lg-6">
                <a href="index.php">
                    <i class="fas fa-angle-left"></i> Continuar comprando
                </a>
            </div>
            <div class="col-lg-6">
                <a href="customer-order.php" class="btn btn-primary">
                    COMPRAR AHORA
                </a>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>

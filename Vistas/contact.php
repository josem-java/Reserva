<?php include "Vistas/Templates/header1.php"; ?>

<?php include "Vistas/Templates/portada.php"; ?>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-4">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Dirección:</span> Costa Rica</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Telefono:</span> <a href="https://wa.me/50664275542" target="_blank">+ 506 64275542</a></p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="border w-100 p-4 rounded mb-2 d-flex">
                            <div class="icon mr-3">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Correo:</span> <a href="mailto:javaboop@gmail.com">javaboop@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 block-9 mb-md-5">
                <form class="bg-light p-5 contact-form" id="formulario" autocomplete="off">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="correo" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Enviar Mensaje" id="btnEnviar" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?php include "Vistas/Templates/footer1.php"; ?>

<script src="<?php echo base_url; ?>Activos/major/js/pages/contact.js"></script>

</body>

</html>

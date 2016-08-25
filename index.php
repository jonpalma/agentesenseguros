<?php include('header.php'); ?>
<div class="wrapper">
    <section class="pre-header" id="inicio">
        <div class="container">
            <div class="col-sm-5 hidden-xs vertical-align">
                <div class="brand-logo">
                    <a href="#inicio"><img src="img/logo.png" alt="Logo"></a>
                </div>
            </div>
            <div class="col-sm-7 vertical-align">
                <div class="social text-right">
                    <p>01 800 456 89 12</p>
                    <a href="https://www.facebook.com/Agentes-Consultores-en-Seguros-276182349421750" target="_blank"><img src="img/social/fb.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/agentesenseguros/" target="_blank"><img src="img/social/instagram.png" alt="instagram"></a>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner" id="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="img-container">
                        <img src="img/banner/3.jpg" alt="Banner">
                    </div>
                    <div class="carousel-caption">
                        <div class="container vertical-align">
                            <div class="col-sm-6">
                                <h2 class="white">Seguro de Casa-Habitación.</h2>
                                <p class="white">
                                    Cuidamos tu patrimonio.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img-container">
                        <img src="img/banner/4.jpg" alt="Banner">
                    </div>
                    <div class="carousel-caption">
                        <div class="container vertical-align">
                            <div class="col-sm-6">
                                <h2 class="white">Seguro de Vida.</h2>
                                <p class="white">
                                    Entendemos tus prioridades.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img-container">
                        <img src="img/banner/2.jpg" alt="Banner">
                    </div>
                    <div class="carousel-caption">
                        <div class="container vertical-align">
                            <div class="col-sm-6">
                                <h2 class="white">Seguro de Auto.</h2>
                                <p class="white">
                                    Te atendemos primero cuando lo necesitas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img-container">
                        <img src="img/banner/1.jpg" alt="Banner">
                    </div>
                    <div class="carousel-caption">
                        <div class="container vertical-align">
                            <div class="col-sm-6">
                                <h2 class="white">Seguro de Gastos Médicos Mayores.</h2>
                                <p class="white">
                                    Estamos ahí para ti.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container form-container">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 vertical-align">
                        <div class="form">
                            <h2 class="white">Cotiza tu seguro</h2>
                            <h5 class="white">Tenemos la opción ideal para ti</h5>
                            <input type="text" placeholder="Nombre Completo">
                            <div class="row no-margin">
                                <div class="col-sm-6">
                                    <input type="email" placeholder="Correo electrónico">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Tel./Cel.">
                                </div>
                            </div>
                            <label for="seguro">
                                <select name="seguro" id="seguro" required>
                                    <option value="" class="hidden" disabled selected>Tipo de Seguro</option>
                                    <option value="Seguro de Casa Habitación">Seguro de Casa Habitación</option>
                                    <option value="Seguro de Vida">Seguro de Vida</option>
                                    <option value="Seguro de Auto">Seguro de Auto</option>
                                    <option value="Seguro de Gastos Médicos Mayores">Seguro de Gastos Médicos Mayores</option>
                                </select>
                            </label>
                            <textarea name="mssg" id="mssg" cols="30" rows="4" placeholder="Información complementaria"></textarea>
                            <input type="submit" value="Enviar información">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NUESTRA EMPRESA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="section empresa spacing" id="nosotros">
        <div class="container">
            <div class="col-md-6 col-sm-12">
                <div class="top-corner"></div>
                <h1 class="heading blue">Nuestra empresa</h1>
                <p class="text blue text-justify">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                </p>
                <div class="bottom-corner"></div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SEGUROS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="seguros" id="seguros">
        <div class="container light-spacing">
            <h1 class="heading white">Conoce los tipos de <br>seguros que ofrecemos</h1>
            <div class="row no-margin text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="img-container">
                        <img src="img/seguros/1.png" alt="Seguro" class="img-responsive center-block">
                    </div>
                    <h5 class="white">Seguro de Casa-Habitación</h5>
                    <p class="white">
                        Duis aute irure dolor in 
                        reprehenderit in voluptate velit 
                        esse cillum dolore.
                    </p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="img-container">
                        <img src="img/seguros/2.png" alt="Seguro" class="img-responsive center-block">
                    </div>
                    <h5 class="white">Seguro de Vida</h5>
                    <p class="white">
                        Duis aute irure dolor in 
                        reprehenderit in voluptate velit 
                        esse cillum dolore.
                    </p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="img-container">
                        <img src="img/seguros/3.png" alt="Seguro" class="img-responsive center-block">
                    </div>
                    <h5 class="white">Seguro de Autos</h5>
                    <p class="white">
                        Duis aute irure dolor in 
                        reprehenderit in voluptate velit 
                        esse cillum dolore.
                    </p>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="img-container">
                        <img src="img/seguros/4.png" alt="Seguro" class="img-responsive center-block">
                    </div>
                    <h5 class="white">Seguro de Gastos Médicos</h5>
                    <p class="white">
                        Duis aute irure dolor in 
                        reprehenderit in voluptate velit 
                        esse cillum dolore.
                    </p>
                </div>
            </div>
        </div>
        <div id="carousel-seguros" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/banner/5.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img src="img/banner/6.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img src="img/banner/7.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img src="img/banner/8.jpg" alt="Banner">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-seguros" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-seguros" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* SEGUROS CON LOS QUE TRABAJAMOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="section socios spacing" id="agentes">
        <div class="container">
            <div class="top-corner"></div>
            <h1 class="heading gray">Seguros con los que <br>trabajamos</h1>
            <div class="row no-margin">
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><img src="img/socios/1.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-2"><img src="img/socios/2.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-2"><img src="img/socios/3.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-2"><img src="img/socios/4.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-2"><img src="img/socios/5.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row no-margin">
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><img src="img/socios/6.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-2"><img src="img/socios/7.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-2"><img src="img/socios/8.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-2"><img src="img/socios/9.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-2"><img src="img/socios/10.png" alt="Socio" class="img-responsive center-block vertical-align"></div>
                <div class="col-sm-1"></div>
            </div>
            <div class="bottom-corner"></div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="contacto" id="contacto">
        <div class="col-sm-8 map-container">
            <div class="googleMap" id="googleMap" position="agentes"></div>
        </div>
        <div class="container form-container">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 vertical-align">
                <h1 class="heading white">Contacto</h1>
                <div class="col-sm-7 white">
                    <input type="text" placeholder="Nombre">
                    <input type="email" placeholder="Correo">
                    <textarea name="mssg" id="mssg" cols="30" rows="5" placeholder="Mensaje"></textarea>
                    <div class="text-right">
                        <input type="submit" value="Enviar">
                    </div>
                </div>
                <div class="col-sm-5 white">
                    <p>
                        Periférico de la Juventud 4101 / local 28,<br>
                        Plaza San Ángel,<br>
                        Chihuahua, Chihuahua.
                    </p>
                    <p>01 800 536 78 96</p>
                    <p><a href="mailto:contacto@agentesenseguros.com.mx" class="white">contacto@agentesenseguros.com.mx</a></p>
                </div>
            </div>
        </div>
        <div class="background"></div>
    </section>
</div>
<?php include('footer.php'); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        {{ HTML::style('css/modale.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/jquery.bxslider.css') }}
        {{ HTML::style('http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css') }}
        <title>Sunstar</title>
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    </head>
    <body>
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PCQ648"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-PCQ648');</script>
        <!-- End Google Tag Manager -->

        <header>
            <div class="wrapper">
                <a class="logo" href="/"></a>
            </div>
        </header>

        <div class="page-contener">
            <div class="wrapper">
                <div class="content-seccion">
                    <div class="barra-info">¿Qué es Easy-Graft™?</div>
                    <div class="info1">
                        <span class="span1">Easy-graft™</span> consiste en un nuevo y único biomaterial: gránulos biocerámicos con una superficie
                        pegajosa que ayuda a regenerar huesos dentales. 
                        <br/><br/>
                        Este innovador biomaterial permite el tratamiento de defectos óseos en periodoncia, cirugía oral, 
                        implantología y extracción, de una manera rápida y eficaz.
                        <br/><br/>
                        <span class="span1">Conozca las dos gamas de Easy-Graft™: </span>
                    </div>
                </div>
                <div class="content-slider">
                    <ul class="bxslider">
                        <li><a href="assets/uploads/classic.pdf" target="_blank"><img src="img/slider_classic.png" class="box-sha" /></a></li>
                        <li><a href="assets/uploads/crystal.pdf" target="_blank"><img src="img/slider_crystal.png" /></a></li>
                    </ul>
                    <p style="position: relative; top: -165px; display: none;">
                        <a href="" id="slider-next">Click me to go to the next slide</a><br />
                        <a href="" id="slider-prev">Click me to see the total slide count</a>
                    </p>

                </div>
                <div class="content-seccion-dos">
                    <p class="title">
                        <strong>¡Promoción especial Easy-Graft™! </strong>
                        <img src="img/Linea_bajo_el_titular.png" />
                    </p>
                    <p class="descrip">
                        Obtenga un <span class="span1">15% de descuento</span> en la compra de productos<br> 
                        Easy-Graft™ y una <span class="span1">jeringa gratis</span> por cada pedido.<br>
                        Además, recibirá un exclusivo <span class="span1">USB de regalo.</span>
                        <br><bR>
                        O si lo prefiere, envíenos sus datos<br>
                        y nuestro delegado de zona le visitará para ofrecerle<br> más información.
                        <img src="img/imagen_USB.png" />
                    </p>
                    <div class="contener-form display-none" >
                        <p class="title">
                            <strong style="font-size: 18px;">FORMULARIO DE CONTACTO:</strong>
                            <img src="img/Linea_bajo_el_titular.png" />
                        </p>



                        <form action="add" role="form" method="post" id="formRequest">
                            <fieldset>
                                <div class="control-grup-izq">
                                    <div class="control-grup">
                                        <label for="exampleInputEmail1" class="control-label">Clínica</label>
                                        <input type="text" class="form-control" name="text_1" value="">
                                    </div>
                                    <div class="control-grup">
                                        <label for="exampleInputEmail1" class="control-label required">Nombre</label>
                                        <input type="text" class="form-control" id="text_2" name="text_2" value="" title="Se requiere de un nombre" required >
                                    </div>
                                    <div class="control-grup">
                                        <label for="exampleInputEmail1" class="control-label required">Dirección</label>
                                        <input type="text" class="form-control" name="text_3" value="" title="(*) Campo requerido" required >
                                    </div>
                                </div>
                                <div class="control-grup-der">
                                    <div class="control-grup">
                                        <label for="exampleInputEmail1" class="control-label required">Población</label>
                                        <input type="text" class="form-control" name="text_4" title="(*) Campo requerido" required >
                                    </div>
                                    <div class="control-grup">
                                        <label for="exampleInputEmail1" class="control-label">Provincia</label>
                                        <input type="text" class="form-control" name="text_5">
                                    </div>
                                    <div class="control-grup">
                                        <label for="exampleInputEmail1" class="control-label ">Teléfono</label>
                                        <input type="text" class="form-control" name="text_6" value="" >
                                    </div>
                                </div>
                                <div class="control-grup-completo">
                                    <div class="control-grup-horizontal-1">
                                        <label for="exampleInputEmail1" class="control-label required">C.P</label>
                                        <input type="text" class="te1 form-control" name="text_7" value="" title="(*) Campo requerido" required >
                                    </div>
                                    <div class="control-grup-horizontal-2">
                                        <label for="exampleInputEmail1" class="control-label required">E-mail</label>
                                        <input type="text" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" class="te1 form-control" id="text_8" name="text_8"required/>


                                    </div>
                                </div>

                                <div class="control-grup-completo" style="margin-top: 25px;">
                                    <!-- Squared ONE -->
                                    <div class="squaredTwo">
                                        <input type="checkbox" id="squared1" name="visita" />
                                        <label for="squared1"></label>
                                    </div>
                                    <div class="control-grup-horizontal-2">
                                        <label id="check1" for="exampleInputEmail1" class="control-label-check">Deseo solicitar visita de un comercial de Sunstar Guidor para recibir más información.</label>
                                    </div>
                                </div>
                                <div class="control-grup-completo">
                                    <!-- Squared ONE -->
                                    <div class="squaredTwo">
                                        <input type="checkbox" id="squared2" name="requerimiento" />
                                        <label for="squared2"></label>
                                    </div>
                                    <div class="control-grup-horizontal-2">
                                        <label id="check1" for="exampleInputEmail1" class="control-label-check">
                                            Deseo beneficiarme de un 15% de descuento en la compra
                                            de productos Easy-GraftTM y obtener una jeringa de regalo por cada pedido.
                                        </label>
                                    </div>
                                </div>
                                <div class="control-grup-completo" style="margin-top: 10px;">
                                    <!-- Squared ONE -->
                                    <div class="squaredTwo">
                                        <input type="checkbox" id="squared3" name="check" />
                                        <label for="squared3"></label>
                                    </div>
                                    <div class="control-grup-horizontal-2">
                                        <label id="check1" for="exampleInputEmail1" class="control-label-check">Acepto las <a href="#modal-text" class="call-modal" title="Clicking this link shows the modal">políticas de privacidad</a>.</label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="contener-buttom-form display-none">
                                <table class="tb1" cellspacing="0">
                                    <tr>
                                        <th>Número de<br>Referencia</th>
                                        <th>Descripción</th>
                                        <th>Precio<br>Clínica Dental</th>
                                        <th>Dto.</th>
                                        <th>Cantidad</th>
                                    </tr>
                                    <tr class="title">
                                        <td colspan="5">Easy-Graft™ CLASSIC Sin HA</td>
                                    </tr>
                                    <tr class="item">
                                        <td class="td-top">50000BC15075</td>
                                        <td class="td-top">Easy-graft™ 250, 1 jeringa 0,25 ml (450-1000um)</td>
                                        <td class="td-top">76,00 €</td>
                                        <td class="td-top rowspa" rowspan="7">- 15%</td>
                                        <td class="td-top"><input type="text" name="p_1" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC11002</td>
                                        <td>Easy-graft™ 400, caja de 3 jeringas 0,4 ml (450-1000um)</td>
                                        <td>282,00 €</td>
                                        <td><input type="text" name="p_2" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC11003</td>
                                        <td>Easy-graft™ 400, caja de 6 jeringas 0,4 ml (450-1000um)</td>
                                        <td>564,00 €</td>
                                        <td><input type="text" name="p_3" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC11072</td>
                                        <td>Easy-graft™ 250, caja de 3 jeringas 0,25 ml (450-1000um)</td>
                                        <td>216,00 €</td>
                                        <td><input type="text" name="p_4" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC11073</td>
                                        <td>Easy-graft™ 250, caja de 6 jeringas 0,25 ml (450-1000um)</td>
                                        <td>432,00 €</td>
                                        <td><input type="text" name="p_5" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC11012</td>
                                        <td>Easy-graft™ 150, caja de 3 jeringas 0,15 ml (450-630um)</td>
                                        <td>196,00 €</td>
                                        <td><input type="text" name="p_6" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td class="td-bottom">50000BC11013</td>
                                        <td class="td-bottom">Easy-graft™ 150, caja de 6 jeringas 0,15 ml (450-630um)</td>
                                        <td class="td-bottom">392,00 €</td>
                                        <td class="td-bottom"><input type="text" name="p_7" /></td>
                                    </tr>

                                    <tr class="title">
                                        <td colspan="5">Easy-Graft™ CRYSTAL Con HA</td>
                                    </tr>
                                    <tr class="item">
                                        <td class="td-top">50000BC11075</td>
                                        <td class="td-top">Easy-graft™ 250, 1 jeringa 0,25 ml (450-1000um)</td>
                                        <td class="td-top">78,00 €</td>
                                        <td class="td-top rowspa" rowspan="7">- 15%</td>
                                        <td class="td-top"><input type="text" name="p_8" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC15002</td>
                                        <td>Easy-graft™ Crystal 400, caja de 3 jeringas 0,4 ml (450-1000um)</td>
                                        <td>290,00 €</td>
                                        <td><input type="text" name="p_9" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC15003</td>
                                        <td>Easy-graft™ Crystal 400, caja de 6 jeringas 0,4 ml (450-1000um)</td>
                                        <td>580,00 €</td>
                                        <td><input type="text" name="p_10" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC15072</td>
                                        <td>Easy-graft™ Crystal 250, caja de 3 jeringas 0,25 ml (450-1000um)</td>
                                        <td>223,00 €</td>
                                        <td><input type="text" name="p_11" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC15073</td>
                                        <td>Easy-graft™ Crystal 250, caja de 6 jeringas 0,25 ml (450-1000um)</td>
                                        <td>446,00 €</td>
                                        <td><input type="text" name="p_12" /></td>
                                    </tr>
                                    <tr class="item">
                                        <td>50000BC15012</td>
                                        <td>Easy-graft™ Crystal 150, caja de 3 jeringas 0,15 ml (450-630um)</td>
                                        <td>202,00 €</td>
                                        <td><input type="text" name="p_13" /></td>
                                    </tr>
                                    <tr class="item foo">
                                        <td class="td-bottom ">50000BC15013</td>
                                        <td class="td-bottom">Easy-graft™ Crystal 150, caja de 6 jeringas 0,15 ml (450-630um)</td>
                                        <td class="td-bottom">404,00 €</td>
                                        <td class="td-bottom"><input type="text" name="p_14" /></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="contener-btn-bg">
                                <div class="contener-btn">
                                    <button id="contactForm" type="submit" class="btn btn-primary">ENVIAR</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div id="animarForm" class="bg-footer-dos">
                        Benefíciese de nuestra oferta <span class="span1">aquí</span><br>
                        <img src="img/flecha_abajo_blanca.png" />
                    </div>
                    <div id="formAbierto" class="bg-footer-dos display-none">
                        <br>
                        <img src="img/flecha_arriba.png" />
                    </div>
                </div>
            </div>

            <section class="semantic-content" id="modal-terminos" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">

                <div class="modal-inner">
                    <header class="modale">
                        <h2 id="modal-label">Términos y condiciones de Uso</h2>
                    </header>

                    <div class="modal-content">
                        <h4>Marcas registradas</h4>
                        <p>Todos los derechos relativos a los nombres de las marcas, las marcas  registradas y los logotipos que aparecen en esta página web pertenecen a Sunstar o se usan con licencia u otra autorización legal emitida por Sunstar  y las empresas que pertenecen al Grupo Sunstar. Queda prohibido el uso de todos estos elementos sin una autorización previa y escrita de Sunstar y de  las empresas del Grupo Sunstar.<p>
                        <h4>Copyright</h4> 
                        <p>Los documentos que aparecen en esta página web contienen información  acerca de productos, de Sunstar y de las empresas del Grupo Sunstar, de aspectos técnicos, de comunicados de prensa, etc., cuyo copyright pertenece a Sunstar y a las empresas del Grupo Sunstar, salvo que se exprese de otra manera. Estos documentos están protegidos por las leyes de copyright de cada país, y por varios tratados y legislaciones afines. El uso no autorizado de la información de estos documentos queda estrictamente prohibido (Esto incluye reproducir, modificar, distribuir, subir a Internet, postear, transmitir públicamente, otorgar licencias, vender y publicar, etc.). Sólo se podrá utilizar con el consentimiento previo y escrito de Sunstar y de las empresas del Grupo Sunstar, a excepción de las copias y descargas permitidas por ley. No se debe interpretar nada de lo dispuesto como una concesión de las licencias del copyright, las patentes, las marcas registradas y cualesquier otros derechos de propiedad intelectual en estos documentos. Los documentos se proporcionan “tal cual”, sin ningún tipo de garantía, ya sea implícita o explícita.</p>
                        <h4>Enlaces a otras páginas web</h4> 
                        <p>El contenido de las páginas web administradas por terceros cuyos enlaces aparecen en este sitio web o tienen relación con éste, a excepción de los de las empresas del Grupo Sunstar, es administrado por estos terceros bajo su propia responsabilidad. Sunstar y las empresas del Grupo Sunstar no se responsabilizan de tales contenidos, ni de cualquier perjuicio directo o indirecto derivado del uso de esas páginas web.</p>
                        <h4>Limitación de responsabilidad</h4> 
                        <p>
                            Sunstar y las empresas del Grupo Sunstar no ofrecen garantía alguna respecto a este sitio web. Por ello, no se garantizan, sin limitación, la exactitud, la fiabilidad, la perfección, la idoneidad para fines particulares, ni la no violación de los derechos de terceros y/o la seguridad de sus contenidos. Sunstar y las empresas del Grupo Sunstar no serán responsables de ningún problema, daño o pérdida causados, incluso y sin limitación, por la imprecisión, la alteración, la eliminación o discontinuidad de los contenidos de este sitio web, ni de cualquier incidencia o suspensión del servicio del sitio web. Es posible que se realicen modificaciones en el contenido o se elimine información del sitio web sin previo aviso y se suspendan o no se continuen operaciones en cualquier momento, sin previo aviso.
                        </p>
                    </div>

                    <footer>
                        <p>
                            <a href="#!" class="close-action" title="Close this modal" data-dismiss="modal">Cerrar</a>
                        </p>
                    </footer>
                </div>

                <!-- Use Hash-Bang to maintain scroll position when closing modal -->
                <a href="#!" class="modal-close" title="Close this modal" data-dismiss="modal" data-close="Close">×</a>
            </section>
            <section class="semantic-content" id="modal-text" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">

                <div class="modal-inner">
                    <header class="modale">
                        <h2 id="modal-label">Políticas de Privacidad</h2>
                    </header>

                    <div class="modal-content">

                        <p>
                            Sus datos formarán parte de una base de datos propiedad de la empresa Sunstar Iberia SLU, con domicilio C/ Frederic Mompou n-5, 6ª planta en Sant Just Desver. Usted tiene derecho de acceso, oposición, rectificación y cancelación que deberá ejercer mediante escrito a la dirección antes citada.
                        </p>
                        <p>Autorizo expresamente a la empresa Sunstar Iberia SLU a que me remita información a mi dirección de e-mail.</p>
                        <p>Sino desea recibir más información sobre nuestra empresa, por favor remítanos un email, indicando en el apartado “ASUNTO”, la palabra “BAJA”.</p>
                        <p>Tanto este mensaje como los documentos que, en su caso, lleve como anexos, pueden contener información reservada y/o confidencial destinada exclusivamente para el uso del destinatario o la persona responsable de entregarlo al mismo, estando su uso no autorizado prohibido legalmente. Su contenido no constituye un compromiso para SUNSTAR IBERIA SLU salvo ratificación escrita por ambas partes. En caso de su recepción por error, rogamos nos lo comuniquen por igual vía, se abstenga de realizar copias del mensaje o documentos adjuntos, remitirlo o facilitarlo a un tercero, y proceda en su defecto, a su eliminación.</p>
                        <p>Sunstar Iberia SLU garantiza la seguridad y confidencialidad de los datos de carácter personal facilitados por sus clientes, y así, de conformidad con lo establecido en la Ley Orgánica 15/1999, de Protección de Datos de Carácter Personal (LOPD) y en la normativa de desarrollo, el cliente/usuario queda informado y presta su consentimiento a la incorporación de sus datos a los ficheros automatizados existentes en Sunstar Iberia SLU y al tratamiento automatizado de los mismos, incluyendo aquellos a los que esta empresa tenga acceso como consecuencia de su navegación por esta página web, para las finalidades de envío de comunicaciones comerciales, comercialización de productos y servicios, del mantenimiento de su relación contractual y de gestión con Sunstar Iberia, al objeto de adecuar nuestras ofertas comerciales a sus características particulares. Los destinatarios de dichos datos serán los servicios comerciales y técnicos de Sunstar Iberia. </p>
                        <p>Estos datos personales están siendo tratados e incorporados a los correspondientes ficheros automatizados, que están debidamente inscritos en el Registro General de la Agencia Española de Protección de Datos.</p>
                        <p>La política de privacidad de Sunstar Iberia le asegura, en todo caso, el ejercicio de los derechos de acceso, rectificación, cancelación, información de valoraciones y oposición, en los términos establecidos en la legislación vigente. Por ello, de conformidad con lo establecido en la Ley Orgánica 15/1999, de Protección de Datos de Carácter Personal (LOPD) y en la normativa de desarrollo, Sunstar Iberia garantiza la adopción de las medidas necesarias para asegurar el tratamiento confidencial de dichos datos y le informa de la posibilidad de ejercitar, conforme a dicha normativa, los derechos de acceso, rectificación, cancelación y oposición, dirigiendo un escrito a Sunstar Iberia.</p>
                    </div>

                    <footer>
                        <p>
                            <a href="#!" class="close-action" title="Close this modal" data-dismiss="modal">Cerrar</a>
                        </p>
                    </footer>
                </div>

                <!-- Use Hash-Bang to maintain scroll position when closing modal -->
                <a href="#!" class="modal-close" title="Close this modal" data-dismiss="modal" data-close="Close">×</a>
            </section>
        </div>

        <div class="clear"></div>



        <div id="note"></div>
        <div class="cristales-1"></div>
        <footer class="fixed">
            <div class="align-foo">
                <a href="/">© Sunstar, INC. &copy; <?php echo date('Y'); ?></a>
                <ul>
                    <li>
                        <a href="#modal-terminos">TÉRMINOS Y CONDICIONES</a>
                    </li>
                    <li style="border-left: 1px solid #fff">
                        <a href="contact">CONTACTO</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper">
                <h2 id="modal-label">Protección de Datos</h2>
            </div>
        </footer>
        {{ HTML::script('http://dat-gui.googlecode.com/git/build/dat.gui.min.js') }}
        {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js') }}
        {{ HTML::script('js/jquery.bxslider.js') }}
        {{ HTML::script('http://code.jquery.com/ui/1.10.4/jquery-ui.js') }}
        {{ HTML::script('js/main.js') }}

        <script>
            var baseUrl = 'baseURL';
        </script>
        <script>


            var slider = $('.bxslider').bxSlider({
                auto: true,
                autoStart: true,
                speed: 5000,
                mode: 'fade',
                nextSelector: '#slider-next',
                prevSelector: '#slider-prev',
                nextText: '<img src="img/flecha_derecha.png">',
                prevText: '<img src="img/flecha_izquierda.png">'

            });

            $('#slider-next').click(function() {
                slider.goToNextSlide();
                return false;
            });
            $('#slider-prev').click(function() {
                slider.goToPrevSlide();
                return true;
            });

            $('#slider-count').click(function() {
                var count = slider.getSlideCount();
                alert('Slide count: ' + count);
                return false;
            });

            $('.bg-footer-dos').click(function() {
                he = $('.content-seccion-dos').height();
                if (he <= '1400') {
                    //
                    $('#animarForm').hide();
                    $('#formAbierto').show();
                    $('.content-seccion-dos').animate({height: '864px'});
                    $('.contener-form').show();
                    //$("html, body").animate({scrollTop: $(document).height() - $(window).height()});
                }
            });

            $('#formAbierto').click(function() {
                $('#formAbierto').fadeOut();
                $('#animarForm').show();
                $('.content-seccion-dos').css({height: '367px'}).animate({height: '367px'}, 0.01);

                $('#formRequest').each(function() {
                    this.reset();
                });
                $('.contener-buttom-form').hide();
                $('#note').fadeOut();
                $('#text_2').removeClass('red');
                $('#text_8').removeClass('red');
                $('.contener-form').fadeOut();
            });


            $('#squared2').change(function() {

                if ($('#squared2').is(':checked')) {
                    $('.content-seccion-dos').animate({height: '1434px'});
                    $('.contener-buttom-form').fadeIn();
                    return true;
                }
                else {
                    $('.content-seccion-dos').animate({height: '864px'});
                    $('.contener-buttom-form').fadeOut("slow");
                    return false;
                }


            });

            $("#contactForm").click(function() {

                if ($('#squared3').is(':checked')) {
                    if ($('#note').is(':visible')) {
                        $('#note').fadeIn();
                    }


                }
                else {

                    if ($('#note').is(':hidden')) {
                        $('#note').fadeIn();
                    }
                    result = '<div class="notification_ok">Debe aceptar primero nuestras POLÍTICAS DE PROTECCIÓN DE DATOS</div>';
                    $('#note').html(result);
                    return false;
                }




            });



            $("#squared3").change(function() {
                if (this.checked) {
                    $('#note').fadeOut();
                }
            });
        </script>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-48367277-1']);
            _gaq.push(['_setDomainName', 'sunstarguidor.com']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
            _gaq.push(['_trackEvent', 'Sección Home', 'Index Sunstar', 'sunstarguidor.com/index']);

        </script>
    </body>
</html>




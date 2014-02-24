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
        <title>Sunstar Guidor</title>
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    </head>
    <body>
        <header>
            <div class="wrapper">
                <a class="logo" href="/"></a>
            </div>
        </header>

        <div class="page-contener" style="margin-top: 120px;">
            <div class="wrapper">
                <div class="content-seccion">
                    <div class="barra-info">Mensaje Enviado</div>
                    <div class="info1" style="margin:0 auto;  width: 500px; display: block;">
                        <br/>
                        <span class="span1">Muchas gracias.</span>
                        <br/><br/>
                        Hemos recibido su solicitud correctamente.
                        <br/><br/>
                        
                        
                        <br/>
                    </div>
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
                $('#formAbierto').hide();
                $('#animarForm').show();
                $('.content-seccion-dos').css({height: '367px'}).animate({height: '367px'}, 0.01);
                $('.contener-form').hide();
                $('#formRequest').each(function() {
                    this.reset();
                });
                $('.contener-buttom-form').hide();
                $('#note').fadeOut();
                $('#text_2').removeClass('red');
                $('#text_8').removeClass('red');
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
                    result = '<div class="notification_ok">Debe aceptar primero nuestras POLITICAS DE PROTECCION DE DATOS</div>';
                    $('#note').html(result);
                    return false;
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
            _gaq.push(['_trackEvent', 'Solicitud de Informacion', 'Formulario GUIDOR', 'sunstarguidor.com/add']);

        </script>
    </body>
</html>







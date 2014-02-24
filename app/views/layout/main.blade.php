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
    </head>
    <body>
        <header>
            <div class="wrapper">
                <a class="logo" href="/"></a>
            </div>
        </header>

        {{ $content }}

        <div class="clear"></div>



        <div id="note"></div>
        <div class="cristales-1"></div>
        <footer class="fixed">
            <div class="align-foo">
                <a href="/">© Sunstar, INC. &copy; <?php echo date('Y'); ?></a>
                <ul>
                    <li>
                        <a href="#modal-terminos">TERMINOS Y CONDICIONES</a>
                    </li>
                    <li style="border-left: 1px solid #fff">
                        <a href="site/contact">CONTACTO</a>
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
            _gaq.push(['_trackEvent', 'Sección Home', 'Index Sunstar', 'hsunstarguidor.com/index']);

        </script>
    </body>
</html>

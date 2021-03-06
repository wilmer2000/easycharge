<?php if(!defined('INCLUDED')) exit('This file cannot be opened directly'); ?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#02B4B6">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <meta name="description" content="Easy Charge es un dispositivo portátil que permite cargar la batería de hasta 8 smartphones a la vez, además de contar con una pantalla LCD integrada que funciona como un vehículo de comunicación">
        <meta name="keywords" content="cargador, uruguay, publicidad, montevideo, portatil, eventos, iphone, android, pantalla, power, bank, usb, locales, negocios, pub, boliches" />
        <meta name="author" content="EasyCharge Uruguay">
        <title><?php echo $config['site_title']; ?> - Mantenete conectado</title>

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <?php echo $html->css('css/bootstrap.min.css'); ?>
        <?php echo $html->css('css/main.css'); ?>
        <?php echo $html->css('css/responsive.css'); ?>

        <?php echo $html->js('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'); ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>
    <body>

      <header>
        <div class="container">
          <div class="menu_mobile">
            <a class="logo_" href=".">
              <?php echo $html->img('img/logo-battery-white.svg'); ?>
            </a>
            <a class="btn_menu js_btn_menu" href="#">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
          <nav id="menu">
            <ul>
              <li class="logo">
                <a href=".">
                  <?php echo $html->img('img/logo-battery-white.svg'); ?>
                </a>
              </li>
              <li>
                <a href="./#easycharge">¿Quienes somos?</a>
              </li>
              <li>
                <?php echo $html->link('SHOW', 'show'); ?>
              </li>
              <li class="submenu">                
                <?php echo $html->link('RENT', 'rent'); ?> 
                <div class="submenu_">
                  <?php echo $html->link('EVENTOS', 'eventos'); ?> 
                </div>
              </li>
              <li>
                <?php echo $html->link('Anunciate', 'anunciate'); ?>
              </li>
              <li>
                <?php echo $html->link('Encontranos', '/#encuentranos'); ?> 
              </li>
              <li>
                <a href="#contacto">Contactanos</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>

      <?php echo template_content(); ?>


      <footer id="contacto">
        <div class="slider  separator_top ">
          <div class="gradiant">
            <?php echo $html->img('img/slider/slide_2.jpg',['class'=>'img-responsive img_slider']); ?>
          </div>
          <div class="container">
            <div class="col-md-8 col-centrered">
              <div class="flex_formulario">
                <div class="right">
                  <form>
                    <h3>Contactanos</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Nombre" required >
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="phone" placeholder="Teléfono" required >
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="mail" placeholder="Email" required >
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="comment" rows="3" placeholder="Comentarios" required ></textarea>
                    </div>
                    <div class="form-group">
                      <div class="g-recaptcha" data-sitekey="6Lc1MiUUAAAAAHfSrItQh93qMGrvd48pYmKprRQX"></div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn">Enviar</button>
                    </div>
                    <div class="messgmodal">
                      <div class="flex">
                        <div class="flex_item">
                          <div class="spinner"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="left">
                  <h3>Ubicanos</h3>
                  <ul class="direccion">
                    <li>
                      <b>Dirección:</b>
                      Blanca del Tabaré 2945
                    </li>
                    <li>
                      <b>Teléfono:</b>
                      <a href="tel:+59899643550">+598 99 643 550</a>
                    </li>
                    <li>
                      <b>Email:</b>
                      <a href="mailto:hola@easycharge.com.uy​">hola@easycharge.com.uy​</a>
                    </li>
                  </ul>
                  <hr>
                  <h3>Redes sociales</h3>
                  <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/easychargeuy/" target="_blank">
                            <svg height="90" version="1.1" viewBox="0 0 90 90" width="90" x="0" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" y="0"><path d="M90 15C90 7.1 82.9 0 75 0H15C7.1 0 0 7.1 0 15v60C0 82.9 7.1 90 15 90H45V56H34V41h11v-5.8C45 25.1 52.6 16 61.9 16H74v15H61.9C60.5 31 59 32.6 59 35V41h15v15H59v34h16c7.9 0 15-7.1 15-15V15z" fill="rgb(2, 180, 182)"></path></svg>
                        </a>
                    </li>
                    <li>    
                        <a href="https://www.instagram.com/easychargeuy/" target="_blank">
                            <svg height="169.1" version="1.1" viewBox="0 0 169.1 169.1" width="169.1" x="0" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" y="0">
                                <style type="text/css">.s0{fill:rgb(2, 180, 182);}
                                </style>
                                <path d="M122.4 0H46.7C20.9 0 0 20.9 0 46.7v75.8c0 25.7 20.9 46.7 46.7 46.7h75.8c25.7 0 46.7-20.9 46.7-46.7V46.7C169.1 20.9 148.1 0 122.4 0zM154.1 122.4c0 17.5-14.2 31.7-31.7 31.7H46.7C29.2 154.1 15 139.9 15 122.4V46.7C15 29.2 29.2 15 46.7 15h75.8c17.5 0 31.7 14.2 31.7 31.7V122.4zM84.5 41c-24 0-43.6 19.5-43.6 43.6 0 24 19.5 43.6 43.6 43.6s43.6-19.5 43.6-43.6C128.1 60.5 108.6 41 84.5 41zM84.5 113.1c-15.7 0-28.6-12.8-28.6-28.6 0-15.7 12.8-28.6 28.6-28.6s28.6 12.8 28.6 28.6C113.1 100.3 100.3 113.1 84.5 113.1zM129.9 28.3c-2.9 0-5.7 1.2-7.8 3.2 -2.1 2-3.2 4.9-3.2 7.8 0 2.9 1.2 5.7 3.2 7.8 2 2 4.9 3.2 7.8 3.2 2.9 0 5.7-1.2 7.8-3.2 2.1-2 3.2-4.9 3.2-7.8 0-2.9-1.2-5.7-3.2-7.8C135.7 29.4 132.8 28.3 129.9 28.3z" fill="rgb(2, 180, 182)"></path>
                            </svg>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-97822155-1', 'auto');
        ga('send', 'pageview');
      </script>
      <?php echo $html->js('js/vendor/jquery-1.11.2.min.js'); ?>
      <?php echo $html->js('js/main.js'); ?>

    </body>
</html>

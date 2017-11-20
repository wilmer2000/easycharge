      <section id="inicio">
        <div class="slider separator_bottom gradiant">
          <div class="flex_center">
            <div class="flex_item">
              <div class="text_center_slider ">
                <div class="txt">                  
                  <h1>
                    <span>Somos Easy Charge.</span>
                    No te preocupes, quedarte sin batería es cosa del pasado.
                  </h1>
                  <div class="cont_btn">
                    <a href="#easycharge" class="btn">Conoce más</a>
                  </div>
                </div>
                <div class="img">
                  <?php echo $html->img('img/product.png',['class'=>'img-responsive']); ?>
                </div>
              </div>
            </div>
          </div>
          <?php echo $html->img('img/slider/slide_1.jpg',['class'=>'img-responsive img_slider']); ?>
          <a href="#" class="arrow_down">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="465.7" height="88.2" viewBox="187.6 170.3 465.7 88.2" enable-background="new 187.638 170.269 465.706 88.202" xml:space="preserve"><polyline fill="none" stroke="#02B4B6" stroke-width="8.5" stroke-miterlimit="10" points="652 174.3 420.5 254 189 174.3 "/></svg>
          </a>
        </div>
      </section>

      <section id="easycharge">
        <div class="container">
          <div class="flex_content_doble easycharge">
            <div class="right">
              <div class="logo_circulo">
                <?php echo $html->img('img/logo-full.svg'); ?>
              </div>
            </div>
            <div class="left">
              <h2>¿Qué es EasyCharge?</h2>
              <p>Imaginate estar disfrutando una linda reunión entre amigos y en el instante de sacarse una fotografía para retratar el momento te quedas sin batería en el celular.</p>
              <p>Piensa estar tomando un café mientras esperas esa importante llamada de negocios y que tu teléfono se quede sin carga.</p>
              <p>¿A quién no le ha pasado estas situaciones?, para que no vuelvan a suceder llegó a Uruguay Easy Charge!!!.</p>
              <p>Easy Charge es un dispositivo portátil que permite cargar la batería de hasta 8 smartphones a la vez, además de contar con una pantalla LCD integrada que funciona como un vehículo de comunicación.</p>
            </div>
          </div>
          <div class="flex_content_doble publicidad">
            <div class="right">
              <h2>¿Qué ofrecemos?</h2>
              <p>Easy Charge brinda un servicio gratuito de carga para smartphones y dispositivos móviles, de una manera rápida, cómoda y segura.</p>
            </div>
            <div class="left">
              <?php echo $html->img('img/icon/publicity.svg'); ?>
            </div>
          </div>
        </div>
      </section>

      <section id="cargador">
        <div class="container">
          <div class="col-md-12">
            <div class="text-center">
              <h2>Características de Easy Charge</h2>
            </div>
            <div class="flex_container_description">
              <div class="flex_item">
                <figure class="tech_item" id="eight_gagdet">
                  <?php echo $html->img('img/icon/tech/phones_x8.svg'); ?>
                  <figcaption>
                    <h2>Hasta 8 dispositivos</h2>
                    <p>Permite recargar hasta 8 smartphones y dispositivos móviles a la vez.</p>
                  </figcaption>
                </figure>
              </div>

              <div class="flex_item">
                <figure class="tech_item" id="batery">
                  <?php echo $html->img('img/icon/tech/battery.svg'); ?>
                  <figcaption>
                    <h2>Batería</h2>
                    <p>Batería interna de 20800 mAh con funcionamiento ininterrumpido de 7 horas.</p>
                  </figcaption>
                </figure>
              </div>

              <div class="flex_item">
                <figure class="tech_item" id="size">
                  <?php echo $html->img('img/icon/tech/size.svg'); ?>
                  <figcaption>
                    <h2>Dimensiones</h2>
                    <p>
                      Altura: 23,7cm <br>
                      Ancho: 13cm<br>
                      Profundidad: 11,4cm <br>
                    </p>
                  </figcaption>
                </figure>
              </div>

              <div class="flex_item">
                <figure class="tech_item" id="player">
                  <?php echo $html->img('img/icon/tech/player.svg'); ?>
                  <figcaption>
                    <h2>Reproductor de video e imágenes</h2>
                    <p>Reproductor de imágenes (JPG, GIF, BMP y PNG) y video (MP4, WMV, MOV y AVI)</p>
                  </figcaption>
                </figure>
              </div>

              <div class="flex_item">
                <figure class="tech_item" id="screen">
                  <?php echo $html->img('img/icon/tech/screen.svg'); ?>
                  <figcaption>
                    <h2>Pantalla</h2>
                    <p>Pantalla de 7' LCD Full Color con resolución 600x1024 pixeles.</p>
                  </figcaption>
                </figure>
              </div>
            </div>

            <div class="gallery">
              <div class="text-center">
                <h2>Galería</h2>
              </div>
              <div class="flex_container_description">
                <div class="flex_item">
                  <figure>
                    <?php echo $html->img('img/gallery/photo_1.jpg', ['class'=>'img-responsive']); ?>
                  </figure>
                </div>
                <div class="flex_item">
                  <figure>
                    <?php echo $html->img('img/gallery/photo_2.jpg', ['class'=>'img-responsive']); ?>
                  </figure>
                </div>
                <div class="flex_item">
                  <figure>
                    <?php echo $html->img('img/gallery/photo_4.jpg', ['class'=>'img-responsive']); ?>
                  </figure>
                </div>
                <div class="flex_item">
                  <figure>
                    <?php echo $html->img('img/gallery/photo_3.jpg', ['class'=>'img-responsive']); ?>
                  </figure>
                </div>
                <div class="flex_item">
                  <figure>
                    <?php echo $html->img('img/gallery/photo_5.jpg', ['class'=>'img-responsive']); ?>
                  </figure>
                </div>
                <div class="flex_item">
                  <figure>
                    <?php echo $html->img('img/gallery/photo_6.jpg', ['class'=>'img-responsive']); ?>
                  </figure>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <?php
        include 'includes/find_us.php';
      ?>
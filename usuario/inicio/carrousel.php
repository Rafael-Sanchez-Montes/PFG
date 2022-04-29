<?php
    function carrousel(){
        echo "
        <div id='carousel-imagenes' class='carousel slide fluid-carousel ' data-ride='carousel' data-interval='3000'>
        <!-- Indicadores -->
        <ul class='carousel-indicators'>
            <li data-target='#carousel-imagenes' data-slide-to='0' class='active'></li>
            <li data-target='#carousel-imagenes' data-slide-to='1'></li>
            <li data-target='#carousel-imagenes' data-slide-to='2'></li>
          </ul>
      
          <!-- Imágenes -->
          <div class='carousel-inner'>
            <div class='carousel-item active'>
                  <div class='carousel-caption fondoTransparente'>
                    <h5>Más de 60 años de experiencia</h5>
                    <p>Actualmente somos un referente de los aceites de oliva virgen extra a nivel mundial</p>
                  </div>
            </div>
            <div class='carousel-item'>
                  <div class='carousel-caption fondoTransparente'>
                    <h5>El entorno más natural</h5>
                    <p>Almazaras de la Subbética se encuentra en el Parque Natural de las Sierras Subbéticas, zona de cultivo protegida y declarada de interés medioambiental</p>
                  </div>
            </div>
            <div class='carousel-item'>
                  <div class='carousel-caption fondoTransparente'>
                    <h5>AOVE de origen certificado</h5>
                    <p>Más de 32.000 hectáreas con un valor añadido: la garantía de calidad que sustenta un aceite sencillamente excepcional</p>
                  </div>
            </div>
      </div>
      
      <!-- Siguiente y anterior -->
        <a class='carousel-control-prev' href='#carousel-imagenes' data-slide='prev'>
            <span class='carousel-control-prev-icon'></span>
          </a>
          <a class='carousel-control-next' href='#carousel-imagenes' data-slide='next'>
            <span class='carousel-control-next-icon'></span>
          </a>
    </div>
        ";
    }
?>


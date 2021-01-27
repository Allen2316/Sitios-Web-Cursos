<?php include_once "includes/templates/header.php" ?>

<section class="seccion contenedor">
  <h2>La mejor conferencia de Diseño Web en español</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde reiciendis corrupti corporis quibusdam asperiores
    et. Necessitatibus soluta quasi maxime aut. Earum dolorem sapiente non dignissimos possimus cupiditate corrupti
    quisquam voluptatum.</p>
</section><!-- Seccion -->
<section class="programa">
  <div class="contenedor-video">
    <video autoplay muted loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogv">
    </video><!-- contenedor video -->
  </div>

  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Programa del Evento</h2>
        <nav class="menu-programa">
          <a href="#talleres"><i class="fa fa-code"></i> Talleres</a>
          <a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
          <a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
        </nav>
        <div id="talleres" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>HTML5, CCS3 Y JavaScript</h3>
            <p><i class="far fa-clock"></i> 16:00 hrs</p>
            <p><i class="fa fa-calendar"></i> 29 de Ene</p>
            <p><i class="fa fa-user"></i> Luis Alberto Sarmiento</p>
          </div>
          <div class="detalle-evento">
            <h3>Responsive Web Desing</h3>
            <p><i class="far fa-clock"></i> 20:00 hrs</p>
            <p><i class="fa fa-calendar"></i> 29 de Ene</p>
            <p><i class="fas fa-user"></i> Luis Alberto Sarmiento</p>
          </div>
          <a href="#" class="button float-rigth">Ver Todos</a>
        </div><!-- talleres -->
        <div id="conferencias" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Como ser Freelancer</h3>
            <p><i class="far fa-clock"></i> 10:00 hrs</p>
            <p><i class="fa fa-calendar"></i> 29 de Ene</p>
            <p><i class="fa fa-user"></i> Gregorio Sanchez</p>
          </div>
          <div class="detalle-evento">
            <h3>Tecnologias del futuro</h3>
            <p><i class="far fa-clock"></i> 17:00 hrs</p>
            <p><i class="fa fa-calendar"></i> 29 de Ene</p>
            <p><i class="fas fa-user"></i> Susan Sanchez</p>
          </div>
          <a href="#" class="button float-rigth">Ver Todos</a>
        </div><!-- talleres -->
        <div id="seminarios" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Diseño UI/UX para moviles</h3>
            <p><i class="far fa-clock"></i> 17:00 hrs</p>
            <p><i class="fa fa-calendar"></i> 31 de Ene</p>
            <p><i class="fa fa-user"></i> Harold Garcia</p>
          </div>
          <div class="detalle-evento">
            <h3>Aprende a porgramar en una mañana</h3>
            <p><i class="far fa-clock"></i> 10:00 hrs</p>
            <p><i class="fa fa-calendar"></i> 31 de Ene</p>
            <p><i class="fas fa-user"></i> Susana Rivera</p>
          </div>
          <a href="#" class="button float-rigth">Ver Todos</a>
        </div><!-- talleres -->
      </div><!-- programa evento -->
    </div><!-- contenedor -->
  </div><!-- contenido programa -->
</section><!-- programa -->

<section class="invitados contenedor seccion">
  <h2>Nuestros Invitados</h2>
  <ul class="lista-invitados clearfix">
    <li>
      <div class="invitado">
        <img src="img/invitado1.jpg" alt="imagen invitado">
        <p>Rafel Bautista</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado2.jpg" alt="imagen invitado">
        <p>Shari Herrera</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado3.jpg" alt="imagen invitado">
        <p>Gregorio Sanchez</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado4.jpg" alt="imagen invitado">
        <p>Susana Rivera</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado5.jpg" alt="imagen invitado">
        <p>Harold Garcia</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado6.jpg" alt="imagen invitado">
        <p>Susan Sanchez</p>
      </div>
    </li>
  </ul>
</section><!-- invitados -->

<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-evento clearfix">
      <li>
        <p class="numero"></p> Invitados
      </li>
      <li>
        <p class="numero"></p> Talleres
      </li>
      <li>
        <p class="numero"></p> Dias
      </li>
      <li>
        <p class="numero"></p> Conferencias
      </li>
    </ul>
  </div>
</div><!-- parallax -->

<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>Pase por dia</h3>
          <p class="numero">$30</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Todos los dias</h3>
          <p class="numero">$50</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Pase por 2 dias</h3>
          <p class="numero">$45</p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fugit repellat dignissimos eveniet fugiat dolor nisi officia sint? Dignissimos sint porro dolorem, nobis esse odio omnis fugiat soluta non labore.

<div id="mapa" class="mapa">
  <!-- Aqui ira el mapa -->
</div>

<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet consequatur sit molestias necessitatibus quam
          eius a architecto recusandae saepe fugit? </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!-- testimonial -->
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet consequatur sit molestias necessitatibus quam
          eius a architecto recusandae saepe fugit? </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!-- testimonial -->
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet consequatur sit molestias necessitatibus quam
          eius a architecto recusandae saepe fugit? </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div><!-- testimonial -->
  </div>
</section><!-- Testimoniales -->

<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Registrate al newsletter</p>
    <h3>gdlwebcamp</h3>
    <a href="#" class="button transparente">Registro</a>
  </div><!-- Contenido -->
</div><!-- newsletter -->

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p> dias
      </li>
      <li>
        <p id="horas" class="numero"></p> horas
      </li>
      <li>
        <p id="minutos" class="numero"></p> minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p> segundos
      </li>
    </ul>
  </div>
</section>

<?php include_once "includes/templates/footer.php" ?>
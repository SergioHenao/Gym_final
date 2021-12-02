<!-- Codigo para extender el codigo de otro documento -->
@extends('plantilla')
  <!-- Div de encabezaco -->
    <section class="hero-section py-3 py-md-5">
      <!-- Div contenedor -->
      <div class="container-fluid">
        <!-- Div para separar -->
        <div class="row">
          <div class="col-12 col-lg-6 p-4">
            <!-- Frase de el principio con el aotor -->
            <h1 class="site-headline font-weight-bold mb-3">
              La motivación es lo que te pone en marcha, y el hábito es lo que
              hace que sigas
            </h1>
            <div class="site-tagline mb-4">
              - Jim Ryun
              <span id="typewriter" class="text-primary font-weight-bold"></span
              >.
            </div>
          </div>
          <!-- Imagen al lado derecho de la frase -->
          <div class="col-12 col-lg-6 text-center">
            <img
              class="hero-figure mx-auto"
              src="/img/principal.png"
              alt="Imagen de una mujer haciendo ejercicio"
            />
          </div>
        </div>
        <!--//row-->
      </div>
      <!--//container-->
    </section>

    @section('content')
    
    <!-- Div de footer -->
    <section class="how-section py-5">
      <div class="container-fluid">
        <!-- Titulo seccion covid-19 con emojis -->
        <h3 class="mb-2 text-center font-weight-bold section-title">
          &#9888; Vamos a vencer al COVID-19 &#9888;
        </h3>
        <!-- Parrafo del seccion -->
        <div class="mb-5 text-center section-intro">
          Vamos a vencer al COVID-19. Necesitamos tu ayuda, solo así podemos
          lograr un gimnacio más seguro para todos con estos tres simples pasos.
        </div>
        <!-- seccion 1  -->
        <div class="row">
          <div class="item col-12 col-md-4">
            <div class="icon-holder">
              <!-- Imagen seccion 1 -->
              <img
                src="/img/tapabocas.png"
                alt="imagen de chica con tapabocas"
              />
              <div class="arrow-holder d-none d-lg-inline-block"></div>
            </div>
            <!--//icon-holder-->
            <!-- Titulo seccion 1  -->
            <div class="desc p-3">
              <h5><span class="step-count me-2">1</span>Uso de tapabocas</h5>
              <!-- Contenido seccion 1  -->
              <p>
                El tapabocas es obligatorio. Todo nuestro equipo debe usar
                protección, así como también los usuarios.
              </p>
            </div>
            <!--//desc-->
          </div>
          <!--//item-->
          <!-- seccion 2  -->
          <div class="item col-12 col-md-4">
            <div class="icon-holder">
              <!-- Imagen seccion 2  -->
              <img src="/img/2m.png" alt="Dos metros de distancia" />
              <div class="arrow-holder d-none d-lg-inline-block"></div>
            </div>
            <!--//icon-holder-->
            <div class="desc p-3">
              <!-- Titulo seccion 2  -->
              <h5>
                <span class="step-count me-2">2</span>Distancia entre máquinas
              </h5>
              <!-- Contenido seccion 2  -->
              <p>Recuerda mantener minimo 2 mt de distancia de los demás</p>
            </div>
            <!--//desc-->
          </div>
          <!--//item-->
          <!-- seccion 3  -->
          <div class="item col-12 col-md-4">
            <div class="icon-holder">
              <!-- Imagen seccion 3  -->
              <img src="/img/desinfeccion.png" alt="" />
            </div>
            <!--//icon-holder-->
            <div class="desc p-3">
              <!-- Titulo seccion 3  -->
              <h5>
                <span class="step-count me-2">3</span>Desinfección completa
              </h5>
              <!-- Contenido seccion 3  -->
              <p>Desinfectaremos todas las sedes varias veces al día</p>
            </div>
            <!--//desc-->
          </div>
          <!--//item-->
        </div>
        <!--//row-->
      </div>
      <!--//container-->
    </section>
    
@endsection
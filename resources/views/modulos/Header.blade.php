<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Gym Style</title>

    <!-- Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/logo.png" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap"
      rel="stylesheet"
    />

    <!-- Local CSS -->
    <link id="theme-style" rel="stylesheet" href="css/index.css" />
  </head>
 
    <header class="header fixed-top">
      <!-- div container -->
      <div class="container-fluid position-relative">
        <nav class="navbar navbar-expand-lg">
          <div class="site-logo">
            <!-- Enlace de la pag prinipal -->
            <a href="/" class="navbar-brand">
              <!-- Imagen del logo -->
              <img
                class="logo-icon m-2 rounded"
                src="/img/Gym_Style.png"
                alt="logo Gym Style"
                width="70"
              />
              <!-- Nombre del gym -->
              <span class="logo-text">Gym<span class="text-alt">Styles</span></span>
            </a>
          </div>
          <!-- Boton de responsibe para movil o tablet -->
          <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navigation"
            aria-controls="navigation"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span> </span>
            <span> </span>
            <span> </span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <!-- La etiqueta <ul> situa los botones en el lado derecho -->
            <ul class="navbar-nav ms-lg-auto">
              <!-- Espacio del boton -->
              <li class="nav-item me-lg-4">
                <!-- Enlace a inicio de sesión -->
                  <!-- Codigo para que funcione el sistema de inicio de sesión y registro -->
                      @guest
                            <!-- Codigo para autenticar el inicio de sesion -->
                            @if (Route::has('login'))
                                <!-- Botón para iniciar sesión -->
                                <li class="nav-item me-lg-4">
                                    <a class="btn btn-primary text-white" style="background-color: #6610f2" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                </li>
                            @endif
                            <!-- Codigo para autenticar el registro -->
                            @if (Route::has('register'))
                                <!-- Botón de registro -->
                                <li class="nav-item me-lg-0 mt-3 mt-lg-0">
                                    <a class="btn btn-primary text-white" style="background-color: #6610f2" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <!-- Botón desplegable -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                              <!-- Botón para cerrar sesión -->
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              </li>
            </ul>
          </div>
          <!-- //collapse navbar -->
        </nav>
        <!-- //nav -->
      </div>
      <!--//container-->
    </header>
    <!--//header-->
    
    <br>
    <br>
    <br>
    @yield('content')
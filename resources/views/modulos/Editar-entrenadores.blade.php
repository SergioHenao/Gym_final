<!-- linea para extender el contenido de un documento a otro -->
@extends('plantilla')
@section('content')
<br>
<br>
<!-- Div contenedor -->
<div class="content-wrapper">
    <!-- Encabezado -->
    <section class="content-header">
        <!-- Contenido del encabezado -->
        <h1>Editar el entrenador:{{$entrenadores->name}}</h1>
    </section>
    <!-- Contenido -->
    <section class="content">
        <!-- Div contenedor -->
        <div class="box">
            <br>
            <!-- Div contenedor que separa -->
            <div class="row">
                <!-- Div contenedor del cuerpo de la pagina -->
                <div class="box-body">
                    <!-- Formulario -->
                    <form method="put" action="{{url('actualizarCoach/'.$entrenadores->id)}}">
                        <!-- Input para colocar la información -->
                        <h2>Nombre y Apellido</h2>
                        <input type="text"class="form-control" name="name" value="{{$entrenadores->name}}">
                        <!-- Input para colocar la información -->
                        <h2>Email</h2>
                        <input type="text"class="form-control" name="email" value="{{$entrenadores->email}}">
                        <!-- Input para colocar la información -->
                        <h2>Nueva Contraseña</h2>
                        <input type="text"class="form-control" name="passwordN" value="">
                        <input type="hidden"class="form-control" name="password" value="{{$entrenadores->password}}">
                        <br>
                        <br>
                        <!-- Botón para enviar los datos -->
                        <button class="btn btn-success form-control" type="submit">Actualizar</button>                            
                    </form>
                    <!-- Botón para regresar a la pagina de entrenadores -->
                    <a href="/Entrenadores">
                        <button class="btn btn-danger">Volver</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
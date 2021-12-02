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
        <h1>Editar el Usuario:{{$users->name}}</h1>
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
                    <form method="post" action="{{url('actualizar-user/'.$users->id)}}">
                        <!-- Input para colocar la información -->
                        <h2>Nombre y Apellido</h2>
                        <input type="text"class="form-control" name="name" value="{{$users->name}}">
                        <!-- Input para colocar la información -->
                        <h2>Email</h2>
                        <input type="text"class="form-control" name="email" value="{{$users->email}}">
                        <!-- Input para colocar la información -->
                        <h2>Nueva Contraseña</h2>
                        <input type="text"class="form-control" name="passwordN" value="">
                        <input type="hidden"class="form-control" name="password" value="{{$users->password}}">
                        <br>
                        <!-- Botón para enviar los datos -->
                        <button class="btn btn-success form-control" type="submit">Actualizar</button>                            
                    </form>
                    <br>
                    <!-- Botón para regresar a la pagina de usuarios -->
                    <a href="/Users">
                        <button class="btn btn-danger">Volver</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
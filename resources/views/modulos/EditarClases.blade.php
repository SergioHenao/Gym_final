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
        <h1>Editar la Clase: {{$clases->Name}}</h1>
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
                    <form method="put" action="{{url('actualizar-clase/'.$clases->id)}}">
                        <!-- Input para colocar la información -->
                        <h2>Nombre y Apellido</h2>
                        <input type="text"class="form-control" name="name" value="{{$clases->Name}}">
                        <!-- Input para colocar la información -->
                        <h2>Dias</h2>
                        <input type="text"class="form-control" name="dias" value="{{$clases->Dias}}">
                        <!-- Input para colocar la información -->
                        <h2>Nuevo horario</h2>
                        <input type="text"class="form-control" name="horario" value="{{$clases->Horario}}">
                        <br>
                        <br>
                        <!-- Botón para enviar los datos -->
                        <button class="btn btn-success form-control" type="submit">Actualizar</button>                            
                    </form>
                    <!-- Botón para regresar a la pagina de usuarios -->
                    <a href="/Clases">
                        <button class="btn btn-danger">Volver</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
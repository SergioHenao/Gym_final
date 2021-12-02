<!-- linea para extender el contenido de un documento a otro -->
@extends('plantilla')
@section('content')
<!-- Div contenedor -->
<div class="content-wrapper">
    <!-- Encabezado -->
    <section class="content-header">
        <!-- Contenido del encabezado -->
        <h1>Gestor de clases</h1>
    </section>
    <!-- Contenido de la pagina -->
    <section class="content">
        <!-- Div contenedor -->
        <div class="box">
            <br>
            <!-- Formulario para enviar la información -->
            <form method="post">
                @csrf
                <!-- Div contenedor -->
                <div class="row">
                    <!-- Div que separa el input  -->
                    <div class="col-6">
                        <div class="col-12">
                            <!-- Contenido del div -->
                            <h5>Nombre de la clase</h5>
                            <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre de la clase" require="">
                            <br>
                        </div>
                        <!-- Div que separa el input  -->
                        <div class="col-12">
                            <!-- Contenido del div -->
                            <h5>Dias de clase</h5>
                            <input type="text" class="form-control" name="dias" placeholder="Ingrese los días que se va a realizar la clase" require="">
                            <br>
                        </div>
                        <!-- Div que separa el input  -->
                        <div class="col-12">
                            <!-- Contenido del div -->
                            <h5>Horario</h5>
                            <input type="text" class="form-control" name="horario" placeholder="Ingrese la hora de inicio y fin" require="">
                            <br>
                        </div>
                        <!-- Botón para enviar la información del formulario -->
                        <button class="btn btn-primary" type="submit">Agregar clase</button>
                    </div>
                    <div class="col-6">
                        <!-- Tabla contenedora -->
                        <table name="clases" class="table col-6 table-responsive">
                            <!-- Encabezado de la tabla -->
                            <thead>
                                <!-- Contenido del encabezado de la tabla -->
                                <tr>
                                    <td>Id</td>
                                    <td>Nombre</td>
                                    <td>Dias</td>
                                    <td>Horario</td>
                                </tr>
                            </thead>
                            <!-- Cuerpo de la tabla -->
                            <tbody>
                            <!-- Comando para poder traer los registros de la base de datos -->
                            @foreach($clases as $clase)
                                <tr>
                                    <!-- Contenido del cuerpo de la tabla -->
                                    <td>{{$clase->id}}</td>
                                    <td>{{$clase->Name}}</td>
                                    <td>{{$clase->Dias}}</td>
                                    <td>{{$clase->Horario}}</td>
                                    <td>
                                        <!-- Botón para editar registro -->
                                    <form method="put" action="{{url('editarClase/'.$clase->id)}}">
                                        <button type="submit" class="btn btn-success">Editar</button>
                                    </form>
                                    </td>
                                    <td>
                                        <!-- Botón para eliminar registro -->
                                    <form method="put" action="{{url('borrarClase/'.$clase->id)}}">
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </section>
</div>
@endsection
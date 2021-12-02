<!-- linea para extender el contenido de un documento a otro -->
@extends('plantilla')
@section('content')
<!-- Div contenedor -->
<div class="content-wrapper">
    <!-- Encabezado -->
    <section class="content-header">
        <!-- Contenido del encabezado -->
        <h1>Gestor de usuarios</h1>
    </section>
    <!-- Contenido -->
    <section class="content">
        <!-- Div contenedor -->
        <div class="box">
            <br>
            <!-- Formulario -->
            <form method="post">
                <!-- Codigo para evitar errores -->
                @csrf
                <!-- Div contenedor del cuerpo de la pagina -->
                <div class="row">
                    <!-- Div contenedor con tamaño -->
                    <div class="col-6">
                        <!-- Div separador -->
                        <div class="col-12">
                            <!-- Contenido del div -->
                            <h5>Nombre y apellido del usuario</h5>
                            <input type="text" class="form-control" name="name" placeholder="Ingrese el nombre del usuario" require="">
                            <br>
                        </div>
                        <!-- Div separador -->
                        <div class="col-12">
                            <!-- Contenido del div -->
                            <h5>Email</h5>
                            <input type="text" class="form-control" name="email" placeholder="Ingrese el correo del usuario" require="">
                            <br>
                        </div> 
                        <!-- Div separador -->
                        <div class="col-12">
                            <!-- Contenido del div -->
                            <h5>Contraseña</h5>
                            <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña del usuario" require="">
                            <br>
                        </div> 
                        <!-- Botón para enviar la información del formulario -->
                        <button class="btn btn-primary" type="submit">Agregar usuario</button>
                    </div>
                    <!-- Div contenedor con tamaño -->
                    <div class="col-6">
                        <!-- Tabla -->
                        <table name="clases" class="table col-6 table-responsive">
                            <!-- Encabezado de la tabla -->
                            <thead>
                                <!-- Contenido del encabezado de la tabla -->
                                <tr>
                                    <td>ID</td>
                                    <td>Nombre y Apellido</td>
                                    <td>Email</td>
                                </tr>
                            </thead>
                            <!-- Cuerpo de la tabla -->
                            <tbody>
                            <!-- Codigo para traer registros de la DB -->
                            @foreach($users as $user)
                                <!-- Contenido del cuerpo de la tabla -->
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <!-- Botón para editar -->
                                        <form method="put" action="{{url('Editar-users/'.$user->id)}}">
                                            <button type="submit" class="btn btn-success">Editar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <!-- Botón para eliminar -->
                                        <form method="put" action="{{url('borrarUser/'.$user->id)}}">
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
        </div>
    </section>
</div>
@endsection
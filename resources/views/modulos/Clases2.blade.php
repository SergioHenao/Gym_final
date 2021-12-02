<!-- linea para extender el contenido de un documento a otro -->
@extends('plantilla')
@section('content')
<!-- Div contenedor -->
<div class="content-wrapper">
    <!-- Encabezado -->
    <br>
    <H4>Disponibilidad de clases</H4>
    <br>
    <!-- Div contenedor -->
    <div class="col-12">
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
            @foreach($plans as $plan)
                <tr>
                    <!-- Contenido del cuerpo de la tabla -->
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->Name}}</td>
                    <td>{{$plan->Dias}}</td>
                    <td>{{$plan->Horario}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- Div con información de la tabla -->
    <div class="Col-6">
        <h6>Por el momento no contamos con disponibilidad de pagos virtuales,
            por lo tanto, es necesario que se presente de manera presencial
            y realice el pago en efectivo.
        </h6>
    </div>
</div>
@endsection
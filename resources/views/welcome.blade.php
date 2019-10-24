<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  <br>  Formulario para nuevo Cliente y Editar </br>
                  <span class="label label-default"> Ingrese nombre:</span>
                  <input type="text">

                  <span class="label label-default"> Ingrese apellido:</span>
                  <input type="text">

                  <span class="label label-default"> Ingrese estado:</span>
                  <input type="number">

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
     </div>

    <div class="container">
        <div class="row">
            <div class="ml-md-auto">
                <nav class="nav">
                    <br>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Cliente</button>
                </nav>
            </div>
        </div>
        <div class="row">
            <br>
            <div id="app">
                <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Estado</th>
                                <th>Creado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr v-for="cliente of clientes" >
                                <th>{{cliente.codigo}}</th>
                                <th>{{cliente.nombre}}</th>
                                <th>{{cliente.apellido}}</th>
                                <th>{{cliente.estado}}</th>
                                <th>{{cliente.creado}}</th>
                                <th>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Editar</button>
                                       <!-- <button type="button" class="btn btn-danger" @click="deleteCliente(cliente.codigo)">Eliminar</button>-->
                                    </div>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
            </div>
        </div>
    </div>
    <script src="vue/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>
    <script src="js/comsumoAPI.js"></script>
    <script src="js/cliente.js"></script>
    </body>
</html>

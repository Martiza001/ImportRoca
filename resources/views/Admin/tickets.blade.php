<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

@extends('adminlte::page')

@section('title', 'tickets')

@section('content_header')
@stop

@section('content')
<section class="content" style="background-color: #ffffff;">
    <div class="container mt-4">
        <h2 class="mb-4">Crear Ticket</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" class="new-ticket needs-validation" enctype="multipart/form-data"
                            action="genere_tikect" autocomplete="off" novalidate="">
                            <input type="hidden" name="csrf_token"
                                value="2e20a90d8270de6d788441b77e7b1ba4ead56194d933417c34b9297ba1bfef54702b707e287f34f812d2395c4884315fdcdf8d11014684536639e7a9e92e16f3">

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="product">Producto</label>
                                </div>
                                <div class="col-sm-9">
                                    <select name="product" class="form-control form-control-sm w-100 selectpicker"
                                        data-live-search="true">
                                        <option value="">Selecione el producto</option>

                                    </select>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="subject">Sujeto</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="subject" class="form-control form-control-sm"
                                        placeholder="Sujeto" required="">
                                </div>
                            </div>
                            <p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="subject">Descripción</label>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="subject" class="form-control form-control-sm"
                                        placeholder="Descripción detallada del problema que presenta...." rows="20"
                                        required="">
                                </div>
                            </div>
                            <!-- ... -->
                            <p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="file_attachment">Subir archivo</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="controls col-sm-9 input-group input-file" name="file_attachment">
                                        <input type="file" name="file_attachment"
                                            class="file"
                                            placeholder="Escoge un archivo..." style="cursor: pointer;">
                                    </div>
                                    <input type="file" class="input-ghost" style="visibility:hidden; height:0"
                                        name="file_attachment">
                                </div>
                            </div>
                            <p>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-sm-9 input-group">
                                    <span class="help-text text-gray" style="margin-top: -15px;">
                                        Nota: Sólo se permiten archivos de imagen del tipo gif/jpeg/png.</span>
                                </div>
                            </div>
                            <hr>
                            <!-- ... -->

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="refuse_access">Acceso al servidor</label>
                                </div>
                                <div class="controls col-sm-9">
                                    <div class="form-group clearfix">
                                        <div class="icheck-success d-inline">
                                            <input id="refuse_access" type="checkbox" name="cf_11" value="y" checked=""
                                                onclick="ssh_fields();">
                                        <label for="refuse_access">Permito que Importaciones Agua de la Roca acceda
                                                y realice modificaciones</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ... -->
                            <hr>
                            <!-- ... -->

                            <div class="card-footer text-center">
                                <button type="submit" name="submit"
                                    class="btn btn-custom">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@stop
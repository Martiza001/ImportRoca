<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">



<?php $__env->startSection('title', 'Perfil'); ?>

<?php $__env->startSection('content_header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="content" style="background-color: #ffffff;">
    <div class="container mt-4">
        <h2 class="mb-4">Perfil de Usuario</h2>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-8">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <form id="profileForm">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nombre</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Apellidos</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Contraseña</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="contrasena" name="contrasena"
                                        required>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Foto</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" id="foto" name="foto">
                                </div>
                            </div>
                            <hr>

                            <button type="button" class="btn btn-primary" onclick="editarPerfil()">Editar
                                Perfil</button>
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    console.log('Hi!'); 
    function mostrarImagen(input) {
          var reader = new FileReader();

          reader.onload = function (e) {
              document.getElementById('avatar').src = e.target.result;
          };

          reader.readAsDataURL(input.files[0]);
      }
</script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
    function editarPerfil() {
          // Implementa la lógica para cargar los datos del usuario y llenar el formulario
          // Aquí puedes usar AJAX para obtener datos del servidor y llenar los campos del formulario
        }
      
        document.getElementById('profileForm').addEventListener('submit', function(event) {
          event.preventDefault();
          // Implementa la lógica para actualizar los datos del usuario en la base de datos
          // Puedes usar AJAX para enviar los datos del formulario al servidor
        });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragonnew\www\proyect\resources\views/Admin/setitings.blade.php ENDPATH**/ ?>
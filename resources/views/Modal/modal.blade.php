<!-- Botón para iniciar sesión -->
<a href="#" class="login-button" data-bs-toggle="modal" data-bs-target="#modalSignin">
    <i class="bi bi-person-circle"></i>
    Iniciar Sesión
</a>
<!-- Modal de inicio de sesión -->
<div class="modal fade" id="modalSignin" tabindex="-1" role="dialog" aria-labelledby="modalSigninLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <img class="logo mx-auto d-block text-center" src="/IMG/ROCA.png" width="210" height="108">
            <div class="modal-body p-5 pt-0">
                <form action="/home" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="floatingInput" class="form-label">Dirección de correo electrónico</label>
                        <input type="email" class="form-control rounded-3" id="floatingInput"
                            placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="floatingPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control rounded-3" id="floatingPassword"
                            placeholder="Contraseña">
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Iniciar
                        Sesión
                    </button>
                    <label for="floatingInput" class="form-label">¿Si aún no tienes una cuenta? </label>
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#modalSignup" href="">
                        Regístrate.
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal de Registro (Nuevo modal para registrarse) -->
<div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="modalSignupLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <img class="logo mx-auto d-block text-center" src="/IMG/ROCA.png" width="210" height="108">
            <div class="modal-body p-5 pt-0">
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="nombre" class="form-label">Nombre (s): </label>
                        <input type="text" class="form-control rounded-2" id="nombre" name="nombre"
                            placeholder="Nombre">
                    </div>
                    <div class="mb-2">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control rounded-2" id="apellidos" name="apellidos"
                            placeholder="Apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Dirección de correo electrónico</label>
                        <input type="email" class="form-control rounded-3" id="email" name="email"
                            placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" class="form-control rounded-3" id="contrasena" name="contrasena"
                            placeholder="Contraseña">
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>
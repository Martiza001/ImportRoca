<!--navbar-->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand me-auto" href="#"><img class="logo" src="/IMG/roca.ico" width="110" height="70"></a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 active" aria-current="page" href="/home">Casa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Inicio
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                    <i class="bi bi-hdd-network"></i>
                                    Vps
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                    <i class="bi bi-image"></i>
                                    Windows vps
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                    <i class="bi bi-server"></i>
                                    Vps almacenamiento
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item dropdown-item-danger d-flex gap-2 align-items-center"
                                    style="color: brown" href="#">
                                    <i class="bi bi-house-door-fill" style="color: brown"></i>
                                    Casa
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <a href="#"><?php echo $__env->make('Modal.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<!--navbar-->
<?php /**PATH C:\laragonnew\www\proyect\resources\views/PAGES/Nabar.blade.php ENDPATH**/ ?>
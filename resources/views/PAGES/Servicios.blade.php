<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMPORT ROCA</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/titulos.css">
</head>
@include('PAGES.Navbar')
<header class="hero mb-5">
    <div class="container">
        <div class="row g-4 align-items-center g-4 py-5">
            <div class="col-sm-6 col-lg-6 ">
                <h1 class="pr fw-bold font-weight-bold">Servicios <span style="color: #059b50;"></h1>
                <p class="lead font-weight-light text-justify">Eleva tu presencia online con nuestros servidores
                    dedicados y VPS. ¡Tu éxito digital comienza aquí, donde la velocidad y la flexibilidad se
                    encuentran en cada byte!".
                </p>
                <h2 class="pr mb-4 fw-bold" style="color: #059b50;">$6.00 <span class="fw-light text-dark">/Por
                        mes</span>
                </h2>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Comprar</a>
                    <a class="btn btn-outline-danger btn-lg px-4" href="#!">Saber Más</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6"> <img class="tag img-fluid" src="/IMG/body/storage-main.png"></div>
        </div>
    </div>
    <div style="background-color: rgba(0, 27, 180, 0.637)">
        <div class="wrapper slicers pt-5 pb-5">
            <h1 class="pr fw-bold font-weight-bold text-center" style="color:white">¡Elige Tu Plan! </h1>
            <div class=" container">
                <div class="row row-cols-1 row-cols-md-4 mb-3 text-center justify-content-sm-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-white bg-primary border-primary">
                                <h4 class="my-0 fw-normal">1 Núcleo</h4>
                            </div>
                            <div class="card-body">
                                <img class="logo" src="/IMG/card/concepto-evaluacion.avif" width="125" height="108">
                                <h1 class="card-title pricing-card-title">$6.00<small
                                        class="text-muted fw-light">/mes</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><span class="fw-bold">1</span> Núcleo</li>
                                    <li><span class="fw-bold">2 GB</span> Memoria</li>
                                    <li><span class="fw-bold">1 TB</span> SATA</li>
                                    <li> <span class="fw-bold">2 TB</span> Transferencia</li>
                                </ul>
                                <a href=""
                                    button="" type="button" class="w-100 btn btn-primary blue-btn">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-white bg-primary border-primary">
                                <h4 class="my-0 fw-normal">2 Núcleos</h4>
                            </div>
                            <div class="card-body">
                                <img class="logo" src="/IMG/card/compras-linea.jpg" width="125" height="108">
                                <h1 class="card-title pricing-card-title">$12.00<small
                                        class="text-muted fw-light">/mes</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><span class="fw-bold">2</span> Núcleos</li>
                                    <li><span class="fw-bold">4 GB</span> Memoria</li>
                                    <li><span class="fw-bold">2 TB</span> SATA</li>
                                    <li><span class="fw-bold">4 TB</span> Transferencia</li>
                                </ul>
                                <a href="#-"
                                    button="" type="button" class="w-100 btn btn-primary blue-btn">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-white bg-primary border-primary">
                                <h4 class="my-0 fw-normal">3 Núcleos</h4>
                            </div>
                            <div class="card-body">
                                <img class="logo" src="/IMG/card/precio-empresa.jpg" width="125" height="108">
                                <h1 class="card-title pricing-card-title">$18.00<small
                                        class="text-muted fw-light">/mes</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li><span class="fw-bold">3</span> Núcleos</li>
                                    <li><span class="fw-bold">6 GB</span> Memoria</li>
                                    <li><span class="fw-bold">3 TB</span> SATA</li>
                                    <li><span class="fw-bold">6 TB</span> Transferencia</li>
                                </ul>
                                <a href="#"
                                    button="" type="button" class="w-100 btn btn-primary blue-btn">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="/js/modal.js"></script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Venta</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
<?php //parte de encabezado
include("encabezado.php")
?>
    
        <!-- Slide de imagenes -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- Contenedor principals de las imagenes -->
            <div class="carousel-inner"> <!-- Contenedor interno -->
                <div class="carousel-item active"> <!-- imagen 1 -->
                    <img src="img/foto1.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 2 -->
                    <img src="img/foto2.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 3 -->
                    <img src="img/foto3.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 4 -->
                    <img src="img/foto4.png" class="d-block w-100">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                
            </div>
        </div>

            <!-- Fin del slide -->

        <section class="container p-5 bg-light"> <!-- Buscador -->


            <form>
                <div class="row">
                    <div class="col-lg-10">
                        <input class="form-control" type="text" placeholder="Introducir el nombre del calzado">
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-success">Buscar</button>
                    </div>
                </div>
            </form>

            <!-- Tabla de precios -->

            <div class="row p-5">
                <div class="col-lg-8">
                    <table class="table">
                        <tr>
                            <td>Código</td>
                            <td>Modelo</td>
                            <td>Tipo</td>
                            <td>Talla</td>
                            <td>Precio</td>
                            <td>Opciones</td>
                        </tr>

                        <tr>
                            <td>000001</td>
                            <td>Nike Runeer</td>
                            <td>Tennis</td>
                            <td>26</td>
                            <td>$2000</td>
                            <td><a href="" class="btn btn-danger">Eliminar</a></td>
                        </tr>

                        <tr>
                            <td>000001</td>
                            <td>Nike Runeer</td>
                            <td>Tennis</td>
                            <td>26</td>
                            <td>$2000</td>
                            <td><a href="" class="btn btn-danger">Eliminar</a></td>
                        </tr>

                        <tr>
                            <td>000001</td>
                            <td>Nike Runeer</td>
                            <td>Tennis</td>
                            <td>26</td>
                            <td>$2000</td>
                            <td><a href="" class="btn btn-danger">Eliminar</a></td>
                        </tr>

                    </table>
                </div>
                <div class="col-lg-4 align-self-end">
                    <h3 class="text-center">Tu pedido es por: $4000</h3>
                </div>
            </div>

            

        </section>


    <footer class="container-fluid bg-light text-center p-3">
        <p>Todos los derechos reservados 2022</p>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
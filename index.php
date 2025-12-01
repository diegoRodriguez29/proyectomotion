<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motion_Wear</title>
    <link rel="icon" type="image/png" href="recursos/img/logo (1).png">
    <link rel="stylesheet" href="../montion-php/recursos/css/estilos.css">
    <link rel="stylesheet" href="recursos/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <?php include ("plantilla/header.php") ?>

    <section id="banner">
        <div class="back-montion">
            <div class="cont-banner">
                <div class="titulo-banner titulos">
                    OTOÑO & <br> INVIERNO

                </div>

            </div>

            <div class="boton">
                <button class="btn-g btn">Comprar</button>
            </div>
        </div>
    </section>

    <section id="Tienda">
        <div class="ev">
            NO ES CARO, ES HECHO A MANO
        </div>

        <div class="tienda">
            <span>TIENDA</span>
        </div>
        <div class="container">

            <div class="container-card">
                <div class="card">
                    <img src="recursos/img/Buzo_Negro2-removebg-preview.png">
                    <div class="intro">
                        <a href="plantilla/producto.php">Ver detalles</a>
                    </div>
                </div>

                <div class="footer-card">
                    <div class="np">
                        Hoodie Overzise color negro
                    </div>
                    <div class="precio">
                        $115.000
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <img src="recursos/img/Buzo_Negro1-removebg-preview.png"
                        alt="Animated Card Hover Effect Html & CSS">
                    <div class="intro">
                        <a href="">Ver detalles</a>
                    </div>
                </div>

                <div class="footer-card">
                    <div class="np">
                        Hoodie Overzise color negro
                    </div>
                    <div class="precio">
                        $115.000
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <img src="recursos/img/Buzo_Verde1-removebg-preview.png"
                        alt="Animated Card Hover Effect Html & CSS">
                    <div class="intro">
                        <a href="">Ver detalles</a>
                    </div>
                </div>

                <div class="footer-card">
                    <div class="np">
                        Hoodie Overzise color verde
                    </div>
                    <div class="precio">
                        $115.000
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <img src="recursos/img/Buzo_Verde2-removebg-preview.png">
                    <div class="intro">
                        <a href="">Ver detalles</a>
                    </div>
                </div>

                <div class="footer-card">
                    <div class="np">
                        Hoodie Overzise color verde
                    </div>
                    <div class="precio">
                        $115.000
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <img src="recursos/img/Camiza_Azul1-removebg-preview.png">
                    <div class="intro">
                        <a href="">Ver detalles</a>
                    </div>
                </div>

                <div class="footer-card">
                    <div class="np">
                        Camiseta Overzise azul
                    </div>
                    <div class="precio">
                        $70.000
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <img src="recursos/img/Camiza_Azul2-removebg-preview.png">
                    <div class="intro">
                        <a href="">Ver detalles</a>
                    </div>
                </div>

                <div class="footer-card">
                    <div class="np">
                        Camiseta Overzise azul
                    </div>
                    <div class="precio">
                        $70.000
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <img src="recursos/img/Camiza_Roja1-removebg-preview.png">
                    <div class="intro">
                        <a href="">Ver detalles</a>
                    </div>
                </div>

                <div class="footer-card">
                    <div class="np">
                        Camiseta Overzise morada con cuello
                    </div>
                    <div class="precio">
                        $70.000
                    </div>
                </div>
            </div>

            <div class="container-card">
                <div class="card">
                    <img src="recursos/img/Camiza_gris2-removebg-preview.png">
                    <div class="intro">
                        <a href="">Ver detalles</a>
                    </div>
                </div>

                <div class="footer-card">
                    <div class="np">
                        Camiseta Overzise Gris
                    </div>
                    <div class="precio">
                        $70.000
                    </div>
                </div>
            </div>

        </div>

    </section>
    
    <?php include ("plantilla/go.php") ?>

    <script>
        $(function () {
            // Owl Carousel
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 2,
                margin: 10,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    650: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },

                    1200: {
                        items: 4
                    }

                }


            });
        });

    </script>

</body>

</html>
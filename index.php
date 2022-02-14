<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="static/css/EstiloMenu2.css" />
    <link rel="stylesheet" href="estilo_SLIDE.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="responsiveslides.min.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
</head>

<body>
    <?php require("menu.php"); ?>


    <!--Slider de fotos responsivo con JS-->
    <script>
        $(function () {
            $("#slider4").responsiveSlides({
                auto: false,
                pager: false,
                nav: true,
                speed: 500,
                namespace: "callbacks",
            });
        });
    </script>
    <section class="section1-slider">
        <section id="contenedorslide">
            <div class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li class="cajatexto">
                        <img src="imagenesTaller/slide1.jpg" alt="" />
                        <div class="caption">
                            <p class="animate__animated animate__backInLeft animate__delay-2s">Lorem ipsum dolor sit
                                amet.
                            </p>

                    </li>
                    <li class="cajatexto">
                        <img src="imagenesTaller/slide2.jpg" alt="" />
                    </li>
                    <li class="cajatexto">
                        <img src="imagenesTaller/slide3.jpg" alt="" />
                    </li>
                </ul>
            </div>
        </section>
    </section>
    <!--Slider de fotos responsivo con JS-->


    <!--Section5 Galeria-->
    <section class="section5 ">
        <h2>Nuestros servicios</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, reiciendis!</p>
        <section id="galeria" class="ancho">
            <div class="contenedor-figure">
                <figure>
                    <a class="fancybox" rel="gallery1" href="imagenesTaller/foto1.jpg" title="FOTO1">
                        <img src="imagenesTaller/foto1.jpg" alt="" /></a>
                    <a class="fancybox" rel="gallery1" href="imagenesTaller/foto2.jpg" title="FOTO2">
                        <img src="imagenesTaller/foto2.jpg" alt="" /></a>
                </figure>
                <figure>
                    <a class="fancybox" rel="gallery1" href="imagenesTaller/foto3.jpg" title="FOTO3">
                        <img src="imagenesTaller/foto3.jpg" alt="" /></a>
                    <a class="fancybox" rel="gallery1" href="imagenesTaller/foto4.jpg" title="FOTO4">
                        <img src="imagenesTaller/foto4.jpg" alt="" /></a>
                </figure>
            </div>
        </section>
    </section>
    <!--Section5 Galeria-->

</body>

</html>
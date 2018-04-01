<!DOCTYPE html>
<html>
    <head>
        <title>Skeleton</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link media="all" rel="stylesheet" href="css/normalize.css">
        <link media="all" rel="stylesheet" href="css/skeleton.css">
        
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="css/magnific-popup.min.css">
        
        <!--minha folha de estilo-->
        <link media="all" rel="stylesheet" href="css/style.css">
        
        <!--fonts com css literalmente font-->
        <link media="all" rel="stylesheet" href="fonts/fontawsome/css/fontawesome-all.min.css">
        <!--fonts com SVG-->
        <!--<script src="fonts/fontawsome/js/fontawesome-all.min.js"></script>-->
        <!--cnd-->
        <!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->

        <!--
        [if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        [endif]
        -->
    </head>
    <body>
        <header class="topo">
            <div class="container">
                <div class="row">
                    <img class="logo" src="imagens/logo.png">
                </div>
            </div>
        </header>
        <div class="container">
            <section>
                <h1>12 Casas</h1>
                <div class="row">
                    <div class="columns four">
                        <a href="imagens/kamui/aries.jpg" class="image-popup"><img src="imagens/signos/aries.jpg" /></a>
                    </div>
                    <div class="columns four">
                        <a href="imagens/kamui/touro.jpg" class="image-popup"><img src="imagens/signos/touro.jpg" /></a>
                    </div>
                    <div class="columns four">
                        <a href="imagens/kamui/gemeos.jpg" class="image-popup"><img src="imagens/signos/gemeos.jpg" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="columns four">
                        <a href="imagens/kamui/cancer.jpg" class="image-popup"><img src="imagens/signos/cancer.jpg" /></a>
                    </div>
                    <div class="columns four">
                        <a href="imagens/kamui/virgem.jpg" class="image-popup"><img src="imagens/signos/virgem.jpg" /></a>
                    </div>
                    <div class="columns four">
                        <a href="imagens/kamui/leao.jpg" class="image-popup"><img src="imagens/signos/leao.jpg" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="columns four">
                        <a href="imagens/kamui/libra.jpg" class="image-popup"><img src="imagens/signos/libra.jpg" /></a>
                    </div>
                    <div class="columns four">
                        <a href="imagens/kamui/escorpiao.jpg" class="image-popup"><img src="imagens/signos/escorpiao.jpg" /></a>
                    </div>
                    <div class="columns four">
                        <a href="imagens/kamui/sargitario.jpg" class="image-popup"><img src="imagens/signos/sargitario.jpg" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="columns four">
                        <a href="imagens/kamui/capricornio.jpg" class="image-popup"><img src="imagens/signos/capricornio.jpg" /></a>
                    </div>
                    <div class="columns four">
                        <a href="imagens/kamui/aquario.jpg" class="image-popup"><img src="imagens/signos/aquario.jpg" /></a>
                    </div>
                    <div class="columns four">
                        <a href="imagens/kamui/peixes.jpg" class="image-popup"><img src="imagens/signos/peixes.jpg" /></a>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="columns eight">
                        <h2>Meu titulo</h2>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt et tellus et vestibulum. Morbi venenatis, nisi vitae rutrum dapibus, leo ex dictum lorem, id commodo diam nisl sed magna. Morbi sagittis augue nec ante vestibulum venenatis. Vestibulum condimentum elementum ligula, nec commodo lacus aliquam vestibulum. In nec tristique enim, a pellentesque nisl. Suspendisse tincidunt at sapien sed vulputate. Curabitur sollicitudin magna non urna varius, et dapibus diam mattis. Aliquam ante sapien, pharetra at ornare at, dapibus a ex. Nam vulputate imperdiet velit efficitur porta. Donec eu imperdiet odio. Integer malesuada nulla ornare ultrices placerat.</p>
                    </div>
                    <img src="imagens/Kurumada.jpg" class="columns four" />
                </div>
            </section>
        </div>
        <footer class="row">
            <div class="columns offset-by-four one"><i class="fab fa-facebook fa-3x"></i></div>
            <div class="columns one"><i class="fab fa-instagram fa-3x"></i></div>
            <div class="columns one"><i class="fab fa-twitter fa-3x"></i></div>
            <div class="columns one"><i class="fab fa-pinterest fa-3x"></i></div>
        </footer>

        <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <!-- Magnific Popup core JS file -->
        <script src="sciprts/magnific-popup.min.js"></script>

        <script>
            $(document).ready(function() {
                $(".image-popup").magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-img-mobile',
                    image: {
                        verticalFit: true
                    }
                });
            });
        </script>
    </body>
</html>

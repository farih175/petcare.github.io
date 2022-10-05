<!-- <?php include 'connect.php' ?> -->
<?php include './layouts/header.php'?>
<body>
    <div class="container-fluid banner opacity-100" style="height: 100%  ;
    background-image: url(distribution/img/hero-banner-8.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    ">
        <div class="container container position-relative align-items-center justify-content-center pt-5">
            <div class="container border col-sm-5 bg bg-light offset-sm-4 position-auto top-500 end-500" style="border-radius: 30px ; ">
                <form class="containerd-flex align-items-start flex-column mb-3 align-items-center justify-content-center">
                    <div class="row-sm-6 mb-auto align-items-center justify-content-center">
                        <div class="mb-2 mt-2">
                            <p class="text-center fs-5">Sign In</p>
                            <div class="container mb-3 col-sm-12 offset-sm-0">
                                <label for="usernameInput1" class="form-label"></label>
                                <input type="username" class="form-control" id="usernameInput1" placeholder="username" style=" border-radius:10px; border-color: #BB255D; ">
                            </div>
                            <div class="container mb-3 col-sm-12 offset-sm-0">
                                <label for="inputPassword2" class="visually-hidden"></label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password" style=" border-radius:10px; border-color: #BB255D; ">
                            </div>
                            <div class="container mb-3 col-sm-12 offset-sm-0">
                                <a href="./home.php" button type="button" class="btn col-sm-12 offset-sm-0 h-30 border" style="background-color: #BB255D; border-radius:10px; color:#FF858A;">Submit</a>
                            </div>
                            <div class="col-sm-8 offset-sm-2">
                                <p class="mb-3">
                                <p class="mb-3 col-sm-12 offset-sm-0"> don’t have an account yet?</p>
                                <a href="register.php" class="text-register col-sm-4 offset-sm-0 " style="color: #109BFF;">click here to register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <script src="distribution/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="distribution/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="distribution/vendor/modal-video/js/modal-video.js"></script>
    <script src="distribution/vendor/leaflet/leaflet.js"></script>
    <script src="distribution/js/front.js"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>
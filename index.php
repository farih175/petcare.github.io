<?php 
include('./layouts/header.php');
include('./layouts/nav.php');



?>

    <!-- Hero Slider -->
    <section>
      <div class="swiper hero-slider">
        <div class="swiper-wrapper">
          <!-- Hero Slide-->
          <div class="swiper-slide hero-slide bg-size bg-center py-5" style="background: url(distribution/img/hero-banner-7.jpg)">
            <div class="container text-white py-5 index-forward">
              <div class="row">
                <div class="col-lg-7">
                  <h1>Pilihlah Solusi Terbaik Untuk Hewan Peliharaanmu</h1>
                  <p class="lead">PET CARE Siap Membantu</p>
                  <ul class="list-inline">
                    <li class="list-inline-item me-0"><a class="btn btn-primary" href="../php/login.php">Login</a></li>
                    <li class="list-inline-item"></li><a class="btn btn-outline-light" href="./Artikel.php">Artikel</a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Hero Slide-->
          <div class="swiper-slide hero-slide bg-size bg-center py-5" style="background: url(distribution/img/hero-banner-8.jpg)">
            <div class="container text-white py-5 index-forward">
              <div class="row">
                <div class="col-lg-7">
                  <h1>Kita Akan Membantu Merawat Kesehatan Hewan Peliharaanmu</h1>
                  <p class="lead">PET CARE selalu siap</p>
                  <ul class="list-inline">
                    <li class="list-inline-item me-0"><a class="btn btn-primary" href="../php/login.php">Login</a></li>
                    <li class="list-inline-item"></li><a class="btn btn-outline-light" href="../php/Artikel.php">Artikel</a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Hero Slide-->
          <div class="swiper-slide hero-slide bg-size bg-center py-5" style="background: url(distribution/img/hero-banner-9.jpg)">
            <div class="container text-white py-5 index-forward">
              <div class="row">
                <div class="col-lg-7">
                  <h1>Kamu Akan Mendapatkan Pengalaman Perawatan Hewan Terbaik</h1>
                  <p class="lead">PET CARE selalu perhatian</p>
                  <ul class="list-inline">
                    <li class="list-inline-item me-0"><a class="btn btn-primary" href="../php/login.php">Login</a></li>
                    <li class="list-inline-item"></li><a class="btn btn-outline-light" href="../php/Artikel.php">Artikel</a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-nav-custom d-none d-lg-block"></div>
        <div class="swiper-button-prev swiper-nav-custom d-none d-lg-block"></div>
        <div class="swiper-pagination py-3 d-block d-lg-none"></div>
      </div>
    </section>
    <section class="py-5 bg-light">
      <div class="container py-4">
        <div class="row">
          <div class="col-lg-4 order-2 order-lg-1">
            
          </div>
        <script>
            function dateFix(){
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //Adding one because January is month 0!
                var yyyy = today.getFullYear();

                if(dd<10){
                    dd='0'+dd
                } 
                if(mm<10){
                    mm='0'+mm
                } 

                today = yyyy + '-' + mm + '-' + dd;
                document.getElementById("datefield").setAttribute("max", today);
                document.getElementById("datefield2").setAttribute("max", today);
            }
        </script>
            <h2>Articles list:</h2>
            <!-- NUMERIC ARTICLES LIST-->
            <ol>
                <!-- PHP CODE -->
                <?php
                    //Connection variables
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "petcare";
                    //Connection variable
                    $connect = mysqli_connect($host, $username, $password, $database);
                    //SQL query variable
                    $query = "SELECT id, title from articles";
                    //Result for articles list
                    $result = mysqli_query($connect, $query);
                    //Reading lines returned from database
                    while($row = mysqli_fetch_array($result)){
                        echo "$row[id]. $row[title]<br>";
                    }
                    //Closing connection
                    mysqli_close($connect);
                ?>
            </ol>
     
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/style.css" />
      </head>
      <body>
        <div class="container" style="margin-top: -15%">
          <div class="row">
            <div class="col-md-4 mt-5">
              <div class="card rounded">
                <center>
                  <img
                    class="card-img-top w-75 text-center"
                    src="assets/img/Online article-bro.png"
                  />
                </center>
                <div class="card-body">
                  <h3 class="text-title">Title Article</h3>
                  <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Consequatur, obcaecati. Atque expedita ut laboriosam
                    necessitatibus eveniet deleniti possimus aspernatur libero
                    delectus blanditiis quo dolorem quasi, amet quia quaerat, et
                    veritatis.
                  </p>
                  <a class="btn btn-md btn-danger text-white" href=""
                    >Read More <i class="fa fa-book"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-5">
              <div class="card rounded">
                <center>
                  <img
                    class="card-img-top w-75 text-center"
                    src="assets/img/Online article-bro.png"
                  />
                </center>
                <div class="card-body">
                  <h3 class="text-title">Title Article</h3>
                  <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Consequatur, obcaecati. Atque expedita ut laboriosam
                    necessitatibus eveniet deleniti possimus aspernatur libero
                    delectus blanditiis quo dolorem quasi, amet quia quaerat, et
                    veritatis.
                  </p>
                  <a class="btn btn-md btn-danger text-white" href=""
                    >Read More <i class="fa fa-book"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-5">
              <div class="card rounded">
                <center>
                  <img
                    class="card-img-top w-75 text-center"
                    src="assets/img/Online article-bro.png"
                  />
                </center>
                <div class="card-body">
                  <h3 class="text-title">Title Article</h3>
                  <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Consequatur, obcaecati. Atque expedita ut laboriosam
                    necessitatibus eveniet deleniti possimus aspernatur libero
                    delectus blanditiis quo dolorem quasi, amet quia quaerat, et
                    veritatis.
                  </p>
                  <a class="btn btn-md btn-danger text-white" href=""
                    >Read More <i class="fa fa-book"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <center>
            <button
              class="
                btn btn-lg
                rounded
                btn-danger
                text-white
                font-weight-bold
                mt-5
              "
            >
              More Article <i class="fa fa-arrow-right"></i>
            </button>
          </center>
        </div>
        <br/>
      <br/>
        

        <script
          src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
          integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
          crossorigin="anonymous"
        ></script>
        <script
          src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
          integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
          crossorigin="anonymous"
        ></script>
        <script
          src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
          integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
          crossorigin="anonymous"
        ></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script
          src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"
          integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        ></script>
      </body>

    </section>
    
          <div class="swiper-pagination">                               </div>
        </div>
      </div>
    </section>
<?php 
include('./layouts/footer.php');



?>
<?php 
include('./layouts/header.php');
include('./layouts/nav.php');



?>
<body>
 <!-- GETTING ARTICLES BY ID SECTION -->
 <section class = "getArticleById">
            <h2>Search for articles</h2>
            <!-- FORM FOR SEARCHING ARTICLES -->
            <form method = "POST">
                <!-- ARTICLE ID INPUT -->
                Article id:&emsp;<input type = "number" name = "id"/>&emsp;
                <!-- SEARCH BUTTON -->
                <button type = "submit">SEARCH</button>
            </form>
            <!-- PHP CODE -->
            <?php
                //Getting rid of errors (undefined index etc.)
                error_reporting(0);
                //Connection variables
                $host = "localhost";
                $username = "root";
                $password = "";
                $database = "petcare";
                //Connection variable
                $connect = mysqli_connect($host, $username, $password, $database);
                //Getting variables from form
                $id = $_POST['id'];
                //Checking if form is filled
                if(isset($id)){
                    //SQL query variable for article
                    $query = "SELECT title, article, article_date FROM articles WHERE id = $id";
                    //SQL query variable for authors
                    $query2 = "SELECT name, surname FROM authors au RIGHT JOIN articles_authors aa ON (au.id = aa.author_id) LEFT JOIN articles a ON (a.id = aa.article_id) WHERE a.id = $id";
                    //Result for article
                    $result = mysqli_query($connect, $query);
                    //Result for authors
                    $result2 = mysqli_query($connect, $query2);
                    //Article database row
                    $row = mysqli_fetch_array($result);

                    //PRINTING RESULTS
                    echo "ARTICLE WITH ID $id:";
                    echo "<h4>$row[title]</h4><br>$row[article]<br><br>";
                  
                    //Authors database row loop
                    while($row2 = mysqli_fetch_array($result2)){
                        echo "$row2[name] $row2[surname]<br>";
                    }
                    //PRINTING RESULTS
                    echo "<br><br>$row[article_date]";
                }
                //Closing connection
                mysqli_close($connect);
            ?>
        </section>
    <!-- Features Section -->
        <section>
            <h2 style="text-align: center;">Articles list:</h2>
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
                  </section>
                  <section>
                  
            <!DOCTYPE html>
<html lang="en">
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
    <div class="container" style="margin-top: 5%">
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
              <h3 class="text-title">Judul Artikel</h3>
              <p class="text-justify">
              Ini Adalah isi dari Artikel 1.
              </p>
              <a class="btn btn-md btn-danger text-white" href=""
                >Read More <i class="fa fa-book"></i
              ></a>
            </div>
          </div>
        </div>
        <section>
        <div class="col-md-4 mt-5">
          <div class="card rounded">
            <center>
              <img
                class="card-img-top w-75 text-center"
                src="assets/img/Online article-bro.png"
              />
            </center>
            <div class="card-body">
              <h3 class="text-title">Judul Artikel</h3>
              <p class="text-justify">
              Ini Adalah isi dari Artikel 2.
              </p>
              <a class="btn btn-md btn-danger text-white" href=""
                >Read More <i class="fa fa-book"></i
              ></a>
            </div>
          </div>
        </div>
        </section>
        <section>
        <div class="col-md-4 mt-5">
          <div class="card rounded">
            <center>
              <img
                class="card-img-top w-75 text-center"
                src="assets/img/Online article-bro.png"
              />
            </center>
            <div class="card-body">
              <h3 class="text-title">Judul Artikel</h3>
              <p class="text-justify">
              Ini Adalah isi dari Artikel 3.
              </p>
              <a class="btn btn-md btn-danger text-white" href=""
                >Read More <i class="fa fa-book"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      </section>
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
</html>


       
    </body>
</html>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section -->
   
<?php 
include('./layouts/footer.php');



?>
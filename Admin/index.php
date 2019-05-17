<!DOCTYPE html>
<?php
session_start();
?>
<?php
include('lib/php/v_connection.php');
require './lib/php/admin_liste_include.php';
$cnx = Connexion:: getInstance($dsn, $user, $pass);



?>

<html>
    <head>
      <meta charset="UTF-8">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> <!-- Ne pas enlever l'intégrité sinon le tableau éditable ne fonctionne plus-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

      <script src="./lib/js/jquery1_editable.js"></script>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"/>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">

       <script src='./lib/js/FunctionJqueryDA.js'></script>
        <link rel="stylesheet" href="./lib/css/custom.css" />
        <link rel="stylesheet" type="text/css" href="./lib/css/style.css"/>
        <link rel="icon" href="./images/coding.png"/>

    </head>

    <body>
        <header class="header_nav">
            <div class ="container" >

                <?php

                if (file_exists('./lib/php/menuA.php')) {
                    require './lib/php/menuA.php';
                }
                ?>

            </div>
        </header>
        <section class="section1">
            <div class="container" id="home">

            <?php
            if (!isset($_SESSION['page'])) {
                $_SESSION['page'] = "home.php"; // page par défaut
            }
            if (isset($_GET['page'])) {
                $_SESSION['page'] = $_GET['page'];
            }
            $path = "./pages/".$_SESSION['page'];



            if (file_exists($path)) {
                include ($path);
            } else {
                include ('./pages/Page404.php');
            }

            ?>
            </div>
        </section>


        <footer class="footer">

              <?php
              if (file_exists('./lib/php/menuA.php')) {
                  require './lib/php/footerA.php';
              }
              ?>




        </footer>

    </body>


</html>

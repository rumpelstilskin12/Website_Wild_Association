<!DOCTYPE html>
<?php
session_start();
?>
<?php
require './lib/php/admin_liste_include.php';
$cnx = Connexion:: getInstance($dsn, $user, $pass);
//include('lib/php/v_connexion.php');

?>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
        <script src="./lib/js/fonctionJquery.js" ></script>
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
            //$_SESSION = array();


            if (file_exists($path)) {
                include ($path);
            } else {
                include ('./pages/Page404.php');
            }

            ?>
            </div>
        </section>


        <footer class="footer">
            <!--<div class="container text-center w-100 p-3" >-->
              <?php
              if (file_exists('./lib/php/menuA.php')) {
                  require './lib/php/footerA.php';
              }
              ?>

            <!--</div>-->


        </footer>

    </body>


</html>

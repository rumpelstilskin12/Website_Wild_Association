<!DOCTYPE html>
<?php
session_start();
?>
<?php
require './admin/lib/php/admin_liste_include.php';
$cnx = Connexion:: getInstance($dsn, $user, $pass);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
        <script src="./Admin/lib/js/fonctionJquery.js" ></script>
        <link rel="stylesheet" href="./Admin/lib/css/custom.css" />
        <link rel="stylesheet" type="text/css" href="./Admin/lib/css/style.css"/>
        <link rel="icon" href="./Admin/images/favicon.ico"/>

    </head>

    <body>
        <header class="header_nav">
            <div class ="container" >

                <?php
                if (file_exists('./lib/php/menu.php')) {
                    require './lib/php/menu.php';
                }
                ?>

            </div>
        </header>
        <section class="section1">
            <div class="container" id="accueil">

            <?php
            if (!isset($_SESSION['page'])) {
                $_SESSION['page'] = "accueil.php"; // page par défaut
            }
            if (isset($_GET['page'])) {
                $_SESSION['page'] = $_GET['page'];
            }
            $path = "./page/".$_SESSION['page'];
            $_SESSION = array();//vider la session


            if (file_exists($path)) {
                include ($path);
            } else {
                include ('Admin/pages/Page404.php');
            }

            ?>
            </div>
        </section>


        <footer class="footer">
            <!--<div class="container text-center w-100 p-3" >-->
              <?php
              if (file_exists('./lib/php/menu.php')) {
                  require './lib/php/footer.php';
              }
              ?>

            <!--</div>-->


        </footer>

    </body>


</html>

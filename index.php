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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> <!-- Ne pas enlever l'intégrité sinon le tableau éditable ne fonctionne plus-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="./Admin/lib/js/jquery1_editable.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"/>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
        <script src="./Admin/lib/js/FunctionJqueryDA.js"></script> <!--javascript-->
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


            if (file_exists($path)) {
                include ($path);
            } else {
                include ('page/Page404.php');
            }

            ?>
            </div>
        </section>
        <section class="section2" style="background-color: #393e46;">
          <?php
          if (file_exists('./lib/php/menu.php')) {
              require './lib/php/over_nav.php';
          }
          ?>
        </section>

        <footer class="footer" style= "background-color:#eeeeee;">

              <?php
              if (file_exists('./lib/php/footer.php')) {
                  require './lib/php/footer.php';
              }
              ?>



        </footer>

    </body>


</html>

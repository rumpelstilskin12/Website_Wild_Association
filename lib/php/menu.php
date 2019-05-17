
    <nav class="navbar navbar-expand-md navbar-light">



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>





        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <a href="index.php?page=accueil.php"><img src="./Admin/images/tiplouf.jpg" class="hidden-xs" style="height: 60px;" alt="tiplouf image"/></a>

            <ul class="navbar-nav mx-auto">
                <li class="nav-item active" >
                  <!---<img src="./Admin/images/tiplouf.jpg" style="height: 60px;"/>-->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Species
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg-right">
                      <a class="dropdown-item" href="./index.php?page=listofthemes.php">Species</a>
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our missions
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg-right">
                      <a class="dropdown-item" href="./index.php?page=listOfMissions.php">list of missions</a>
                      <a class="dropdown-item"  href="#">Commitments</a>
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About us
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg-right">
                      <a class="dropdown-item" href="#">History</a>
                    </div>

                </li>

                <?php if(isset($_SESSION['member'])){?>
                <li class="nav-item" id="donate">
                    <a class="nav-link text-light" href="./index.php?page=donate.php" role="button">Donate</a>
                </li>

                <li class="nav-item pl-5">
                  <a href="index.php?page=disconnect.php" class="btn btn-dark border border-white" role="button" aria-pressed="true">Disconnect</a>

                <?php }?>
                  <?php if(empty($_SESSION['member'])){ ?>
                  <li class="nav-item  pl-5">
                    <a href="index.php?page=login.php" class="btn btn-dark border border-white" role="button" aria-pressed="true">Login</a>

                  </li>
                  <li class="nav-item  pl-3 ">
                    <a href="index.php?page=sign_up.php" class="btn btn-dark border border-white"role="button" aria-pressed="true">Sign up</a>
                  </li>
                <?php }?>

            </ul>
        </div>
    </nav>

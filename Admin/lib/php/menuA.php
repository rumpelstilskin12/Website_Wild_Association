<nav class="navbar navbar-expand-md navbar-light">



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

        <img class="img-fluid .hidden-sm-down" src="./images/tiplouf.jpg" alt="banniere" style="height: 60px;"/>&nbsp;



    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <a href="index.php?page=home.php"><img src="./images/tiplouf.jpg" classe="img-fluid .hidden-sm-up" style="height: 60px;" alt="tiplouf image"/></a>

        <ul class="navbar-nav mx-auto">
            <li class="nav-item active" >
              <!---<img src="./Admin/images/tiplouf.jpg" style="height: 60px;"/>-->
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="./index.php?page=donation.php" role="button">
                    Donation
                </a>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Members
                </a>

                <div class="dropdown-menu dropdown-menu-lg-right">
                  <a class="dropdown-item" href="./index.php?page=listOfMembers.php">List of members</a>
                  <a class="dropdown-item"  href="./index.php?page=insertMembers.php">Insert members</a>
                </div>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Missions
                </a>

                <div class="dropdown-menu dropdown-menu-lg-right">
                  <a class="dropdown-item" href="./index.php?page=listOfMissions.php">List of missions</a>
                  <a class="dropdown-item"  href="./index.php?page=insertMissions.php">Insert missions</a>
                  <a class="dropdown-item"  href="./index.php?page=listOfMemberCarryoutMission.php">Mission to perform</a>
                </div>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Themes
              </a>

                <div class="dropdown-menu dropdown-menu-lg-right">
                  <a class="dropdown-item" href="./index.php?page=listofthemes.php">List of themes</a>
                  <a class="dropdown-item" href="./index.php?page=insertThemes.php">Insert themes</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link  text-light" href="index.php?page=disconnect.php">
                    Déconnexion
                </a>
            </li>



        </ul>
    </div>
</nav>

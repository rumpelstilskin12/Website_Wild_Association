<?php

//si on a cliqué sur le bouton "envoyé" du formulaire

if (isset($_POST['submit_login'])) {

    extract($_POST, EXTR_OVERWRITE);
    $log = new AdminDB($cnx);
    $admin = $log->getAdmin($admin, $password);
    var_dump($admin);
    if (is_null($admin)) {
        print "</br>Données incorrectes";
    } else {
        $_SESSION['admin'] = 1;
        unset($_SESSION['page']);
        print "<meta http-equiv=\"refresh\": Content=\"3;URL=./admin/index.php\">";

    }
}
?>
<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" class-"form-login">

    <!--<input type="submit" name="submit_login" id="submit_login" value="Se connecter"/>-->

<div class="col-4">
           <div class="login-dark p-3 shadow-lg rounded">
               <div class="pt-3">
                   <h2 class="text-white ">Login | Sign In</h2>
               </div>

               <form class="mt-5">
                   <div class="form-group">
                       <input type="email"
                           class="form-control form-control-sm bg-light" id="admin"
                           placeholder="Email Id">
                   </div>

                   <div class="form-group">
                       <input type="password"
                           class="form-control form-control-sm bg-light"
                           placeholder="Password"  name="password" id="password">
                   </div>

                   <div class="form-group form-check">
                       <input type="checkbox" class="form-check-input" id="rememberCheckBox">
                       <label class="form-check-label text-light" for="rememberCheckBox">Remember me?</label>
                   </div>

                   <div class="mt-5">
                       <button class="btn btn-sm btn-light col"  type="submit" name="submit_login" id="submit_login">
                           Login
                       </button>
                   </div>

                   <div class="text-center mt-2">
                       <a href="#" class="text-warning">Forgot Password?</a>
                   </div>

                   <div class="mt-5">
                       <p class="text-white text-center">
                           Don't have an account?
                           <a href="page/sign_up.php" class="text-warning">Click here to register</a>
                       </p>
                   </div>
               </form>
           </div>
       </div>
   </div>
   </form>

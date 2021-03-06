<?php


if (isset($_POST['submit_login'])) {

    extract($_POST, EXTR_OVERWRITE);
    $log = new MemberDB($cnx);
    $member = $log->getMember($member, $password1);
    if (is_null($member)) {
        print "</br>Données incorrectes";
    } else {
        $_SESSION['member'] = 1;
        $_SESSION['idmember']=$member[0]->idmember;
        $_SESSION['statuts']=$member[0]->statuts;
        unset($_SESSION['page']);
        if($_SESSION['statuts']==1){
        print "<meta http-equiv=\"refresh\": Content=\"3;URL=./admin/index.php\">";
         }
        else {
          print "<meta http-equiv=\"refresh\": Content=\"3;URL=./index.php\">";
        }

    }
}
?>
<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" class-"form-login" style="width:100%; padding-top:30px;padding-bottom: 30px;">


<div class="col-lg-6" style="margin: 0 auto; border:solid white;border-radius:10px;">
           <div class="login-dark p-3 shadow-lg rounded">
               <div class="pt-3">
                   <h2 class="text-white ">Login | Sign In</h2>
               </div>

               <form class="mt-5">
                   <div class="form-group">
                       <input type="email"
                           class="form-control form-control-sm bg-light" name="member" id="member"
                           placeholder="Email Id"/>
                   </div>

                   <div class="form-group">
                       <input type="password"
                           class="form-control form-control-sm bg-light"
                           placeholder="Password"  name="password1" id="password1">
                   </div>

                   <div class="form-group form-check">
                       <input type="checkbox" class="form-check-input" id="rememberCheckBox">
                       <label class="form-check-label" for="rememberCheckBox" style="color:#00adb5;">Remember me</label>
                   </div>

                   <div class="mt-5">
                       <button class="btn btn-sm btn-light col"  type="submit" name="submit_login" id="submit_login">
                           Login
                       </button>
                   </div>

                   <div class="text-center mt-2">
                       <a href="#" class="text" style="color:#00adb5;">Forgot Password</a>
                   </div>

                   <div class="mt-5">
                       <p class="text-white text-center">
                           Don't have an account?
                           <a href="index.php?page=sign_up.php" class="text" style="color:#00adb5;">Click here to register</a>
                       </p>
                   </div>
               </form>
           </div>
       </div>
   </div>
   </form>

<!--<div >
<img src="./Admin/images/lynx2.jpg" class="img-fluid" alt="Responsive image">

  <form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" class-"form-login" style="background-image:url(./Admin/images/lynx2.jpg);">

  </form>
</div>-->
<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" class-"form-login" style="width:100%; padding-top:30px;padding-bottom: 30px;">
    <!---<input type="submit" name="submit_login" id="submit_login" value="Se connecter"/>-->
<!--//background-image:url(./Admin/images/aigle.png);-->
<div class="col-lg-6" style="margin: 0 auto; border:solid white;border-radius:10px;">
           <div class="login-dark p-3 shadow-lg rounded">
               <div class="pt-3">
                   <h2 class="text-dark text-center">Donate</h2>
               </div>

               <form class="mt-5">
                   <div class="form-group">
                       <input type="txt"
                           class="form-control form-control-sm bg-light border border-dark" name="amount" id="amount"
                           placeholder="Donation amount: 10$,25,50$"/>
                   </div>

                   <div class="form-group">
                       <input type="date"
                           class="form-control form-control-sm bg-light border border-dark"
                           placeholder="Donation date"  name="datedon" id="datedon">
                   </div>
                   <div class="form-group">
                                            <?php
                                                //récupération des elements pour la liste déroulante
                                                $theme = new ThemeDB($cnx);
                                                $themes = $theme->getTheme();
                                                $nbr = count($themes);
                                            ?>
                                            <select class="form-control">
                                                <option class="hidden" selected disabled>what species do you want to support </option>
                                                 <?php
                                                    for ($i = 0; $i < $nbr; $i++) {?>
                                                <option><?php print $themes[$i]->themename;?></option>
                                                     <?php } ?>
                                            </select>
                  </div>
                   <div class="mt-5 pt-3 ">
                       <button class="btn btn-sm btn-light col border border-dark"  type="submit" name="submit_login" id="submit_login">
                           donate
                       </button>
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

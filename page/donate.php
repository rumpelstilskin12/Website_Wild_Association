<?php

if (isset($_GET['submit_don'])) {
    extract($_GET, EXTR_OVERWRITE);

    if (empty($amount) || empty($datedon) ) {
        $erreur = "<span class='txtRouge txtGras'>Veuillez remplir tous les champs obligatoire</span>";
    } else {
        $don = new DonDB($cnx);
        $retour = $don->addDon($_GET);
        print "Insertion dans la base de données réussie ! <br/>";

    }
    
}


if (isset($erreur))
    print $erreur;
?>

<form action="<?php print $_SERVER['PHP_SELF'];?>" method="get" class-"form-login" style="width:100%; padding-top:30px;padding-bottom: 30px;">

<div class="col-lg-6" style="margin: 0 auto; border:solid white;border-radius:10px;background-image:url(./Admin/images/aigle.png);">
           <div class="login-dark p-3 shadow-lg rounded">
               <div class="pt-3">
                   <h2 class="text-dark text-center">Donate</h2>
               </div>
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
                                            <select class="form-control form-control-sm bg-light border border-dark" name="idtheme">
                                                <option class="hidden"  selected disabled>what species do you want to support </option>
                                                 <?php
                                                    for ($i = 0; $i < $nbr; $i++) {?>
                                                <option value="<?php print $themes[$i]->idtheme;?>"><?php print $themes[$i]->themename;?></option>
                                                     <?php } ?>
                                            </select>
                  </div>
                   <div class="mt-5 pt-3 ">
                       <input type="hidden" name="idmember" value="<?php print $_SESSION['idmember'];?>"/>
                       <button class="btn btn-sm btn-light col border border-dark"  type="submit" name="submit_don" id="submit_don" value="1">
                           donate
                       </button>
                   </div>

               </form>
           </div>
       </div>
   </div>
   </form>

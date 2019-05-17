
<?php
include ('./lib/php/v_connection.php');
//récupération des produits
$vue = new VueMCMDB($cnx);
$liste = array();
$liste = null;
$liste = $vue->getAllMCM();
$nbr = count($liste);
?>


<div class="container table py-5">
   <table class="table-responsive text-white">
       <tr>
           <th class="ecart">IdCarryout</th>
           <th class="ecart">Idmember</th>
           <th class="ecart">Last name</th>
           <th class="ecart">First name</th>
           <th class="ecart">Start date</th>
           <th class="ecart">End date</th>
           <th class="ecart">Roles mission</th>
           <th class="ecart">Country mission</th>

       </tr>
       <?php
       for ($i = 0; $i < $nbr; $i++) {
           ?>
           <tr>
               <td class="ecart"><?php print $liste[$i]['idcarryout']; ?></td>

               <td><span contenteditable="false" name="idmember" class="ecart" id="<?php print $liste[$i]['idcarryout']; ?>">
                       <?php print $liste[$i]['idmember']; ?></span>
               </td>
               <td><span contenteditable="false" name="lastname" class="ecart" id="<?php print $liste[$i]['idcarryout']; ?>">
                       <?php print $liste[$i]['lastname']; ?></span>
               </td>

               <td><span contenteditable="false" name="firstname" class="ecart" id="<?php print $liste[$i]['idcarryout']; ?>">
                       <?php print $liste[$i]['firstname']; ?></span>
               </td>
               <td><span contenteditable="true" name="startdate" class="ecart" id="<?php print $liste[$i]['idcarryout']; ?>">
                       <?php print $liste[$i]['startdate']; ?></span>
               </td>
               <td><span contenteditable="true" name="enddate" class="ecart" id="<?php print $liste[$i]['idcarryout']; ?>">
                       <?php print $liste[$i]['enddate']; ?></span>
               </td>
               <td><span contenteditable="false" name="rolem" class="ecart" id="<?php print $liste[$i]['idcarryout']; ?>">
                       <?php print $liste[$i]['rolem']; ?></span>
               </td>
               <td><span contenteditable="false" name="countrym" class="ecart" id="<?php print $liste[$i]['idcarryout']; ?>">
                       <?php print $liste[$i]['countrym']; ?></span>
               </td>

           </tr>
           <?php
       }
       ?>
   </table>
</div>

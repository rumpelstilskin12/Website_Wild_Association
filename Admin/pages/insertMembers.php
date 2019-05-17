

<?php
if (isset($_GET['submit'])) {
   extract($_GET, EXTR_OVERWRITE);

   if (empty($lastname) || empty($firstname) || empty($phone)||empty($email) || empty($password1) || empty($birthdate)
    ){
       $erreur = "<span class='txtRouge txtGras'>Veuillez remplir tous les champs</span>";
  } else {
       $member = new MemberDB($cnx);
       $retour = $member->addMember($_GET);
       print "Insertion dans la base de données réussie ! <br/>";

   }
   var_dump($_GET);
}


if (isset($erreur))
   print $erreur;
?>




<div class="container py-3">

   <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_inscription" class="col-lg-6 py-3" style="margin: 0 auto; border:solid white;border-radius:10px;">

       <label for="lastname">Lastname :</label>
       <input class="form-control form-control-sm bg-light" type="txt" id="lastname" name="lastname" placeholder="Pogba"/>



       <label for="firstname">Firstname :</label>
       <input  class="form-control form-control-sm bg-light" type="txt" id="firstname" name="firstname" placeholder="Paul"/>


       <label  for="phone">phone :</label>
       <input class="form-control form-control-sm bg-light" type="phone" name="phone" id="phone"/>



       <label  for="email">email :</label>
       <input class="form-control form-control-sm bg-light" type="email" name="email" id="phone"/>



       <label  for="password1">password :</label>
       <input class="form-control form-control-sm bg-light" type="password" name="password1" id="password1"/>



       <label  for="birthdate">birthdate :</label>
       <input class="form-control form-control-sm bg-light" type="date" name="birthdate" id="birthdate"/>



       <label  for="street">street :</label>
       <input  class="form-control form-control-sm bg-light" type="txt" name="street" id="street"/>



       <label  for="city">City :</label>
       <input class="form-control form-control-sm bg-light" type="txt" name="city" id="city"/>



       <label  for="postcode">Postcode :</label>
       <input class="form-control form-control-sm bg-light" type="txt" name="postcode" id="postcode"/>



       <label  for="country">Country :</label>
       <input class="form-control form-control-sm bg-light" type="txt" name="country" id="country"/>



        <label  for="job">Job :</label>
        <input class="form-control form-control-sm bg-light" type="txt" name="job" id="job"/>



        <label  for="statuts">Statuts :</label>
        <input class="form-control form-control-sm bg-light" type="txt" name="statuts" id="statuts"/>

      </br>
       <input class="btn btn-sm btn-light col" type="submit" name="submit" id="submit" value="valider"/>

       </div>

   </form>
</div>

<h3 class="aligner txtGras">Insertion Members:</h3>

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


<div class="container">

   <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_inscription">
       <div class ="form-group">

       <br/>

       <label for="lastname">Lastname :</label>
       <input type="txt" id="lastname" name="lastname" placeholder="Pogba"/>
       <br/>


       <label for="firstname">Firstname :</label>
       <input type="txt" id="firstname" name="firstname" placeholder="Paul"/>
       <br/>

       <label  for="phone">phone :</label>
       <input type="phone" name="phone" id="phone"/>

       <br/>

       <label  for="email">email :</label>
       <input type="email" name="email" id="phone"/>

       <br/>

       <label  for="password1">password :</label>
       <input type="password" name="password1" id="password1"/>

       <br/>

       <label  for="birthdate">birthdate :</label>
       <input type="date" name="birthdate" id="birthdate"/>

       <br/>

       <label  for="street">street :</label>
       <input type="txt" name="street" id="street"/>

       <br/>

       <label  for="city">City :</label>
       <input type="txt" name="city" id="city"/>

       <br/>

       <label  for="postcode">Postcode :</label>
       <input type="txt" name="postcode" id="postcode"/>

       <br/>

       <label  for="country">Country :</label>
       <input type="txt" name="country" id="country"/>

       <br/>

        <label  for="job">Job :</label>
        <input type="txt" name="job" id="job"/>

        <br/>

        <label  for="statuts">Statuts :</label>
        <input type="txt" name="statuts" id="statuts"/>

        <br/>
       <input type="submit" name="submit" id="submit" value="valider"/>

       </div>

   </form>

</div>

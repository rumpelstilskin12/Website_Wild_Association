
<?php
include('lib/php/v_connection.php');
if (isset($_GET['submit'])) {
    extract($_GET, EXTR_OVERWRITE);

    if (empty($themename) || empty($countryt) || empty($themegoal)){
        $erreur = "<span class='txtRouge txtGras'>Veuillez remplir tous les champs</span>";
    } else {
        $theme = new ThemeDB($cnx);
        $retour = $theme->addThemes($_GET);
        print "Insertion dans la base de données réussie ! <br/>";

    }
    var_dump($_GET);
}


if (isset($erreur))
    print $erreur;
?>


<div class="container py-3">

    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_inscription" class="col-lg-6 py-3" style="margin: 0 auto; border:solid white;border-radius:10px;">
        <div class ="form-group">

        <br/>

        <label for="themename">Name of the theme :</label>
        <input type="txt"  class="form-control form-control-sm bg-light" id="themename" name="themename" placeholder="Save the Lynx"/>
        <br/>


        <label for="countryt">Country :</label>
        <input type="txt"  class="form-control form-control-sm bg-light" id="countryt" name="countryt" placeholder="Belgium"/>
        <br/>

        <label  for="themegoal">Goal to reach :</label>
        <input type="txt"  class="form-control form-control-sm bg-light" name="themegoal" id="themegoal"/>

        <br/>

        <input class="btn btn-sm btn-light col" type="submit" name="submit" id="submit" value="valider"/>

        </div>

    </form>

</div>

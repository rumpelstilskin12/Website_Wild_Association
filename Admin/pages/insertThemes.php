<hgroup>
<h3 class="aligner txtGras">Create a new themes:</h3>
</hgroup>

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


<div class="container">

    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_inscription">
        <div class ="form-group">

        <br/>

        <label for="themename">Name of the theme :</label>
        <input type="txt" id="themename" name="themename" placeholder="Save the Lynx"/>
        <br/>


        <label for="countryt">Country :</label>
        <input type="txt" id="countryt" name="countryt" placeholder="Belgium"/>
        <br/>

        <label  for="themegoal">Goal to reach :</label>
        <input type="txt" name="themegoal" id="themegoal"/>

        <br/>

        <input type="submit" name="submit" id="submit" value="valider"/>

        </div>

    </form>

</div>

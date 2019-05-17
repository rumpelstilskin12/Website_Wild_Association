<hgroup class="pt-4 pl-5">
  <h3 class="">Nos différentes causes :</h3>
</hgroup>
<?php
//récupération des types pour la liste déroulante
$typ = new ThemeDB($cnx);
$types = $typ->getTheme();
$nbr_type = count($types);
//récupération des produits dans la vue créée
$vue = new VueThemeDB($cnx);
$liste = array();
$liste = null;
//sans filtre de produits
if (!isset($_GET['submit_choix_theme'])) {
    $liste = $vue->getAllTheme();
}
//avec filtre si on a fait un choix dans la liste déroulante:
else {
    if (isset($_GET['choix_theme']) && $_GET['choix_theme'] != "") {
        $liste = $vue->getThemeByTheme($_GET['choix_theme']);
    } else {
        $liste = $vue->getAllTheme();
    }
}
?>

<div class="container py-4">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
        <div class="row">
            <div class="col-sm-1 hidden-xs txtGras text-right">Filter</div>
            <div class="col-sm-11">
                <select name="choix_theme" id="choix_theme">
                    <option value="">Unroll</option>
                    <?php
                    for ($i = 0; $i < $nbr_type; $i++) {
                        ?>
                        <option value="<?php print $types[$i]->idtheme; ?>">
                            <?php
                            print $types[$i]->themename;
                            ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
                <input type="submit" name="submit_choix_theme" id="submit_choix_theme" style="border-radius:10px;">
            </div>
        </div>
    </form>
</div>

<?php
if ($liste != null) {
    $nbr = count($liste);
    ?>
    <div class="container ecartTop3pc m-5 col.md" style="color:blue;">

            <table class="table table-strip  border py-4">
              <thead>
                <tr>
                    <th ><span style="color:white;">Species</span></th>
                    <th ><span style="color:white;">Country</span></th>
                    <th ><span style="color:white;">Goal</span></th>
                    <th><span style="color:white;">Pictures</span></th>
                </tr>
              </thead>
              <tbody>
                  <?php
                   for ($i = 0; $i < $nbr; $i++) {?>
                     <div class="row">

                         <div class="col-sm-5 text-center borderBottom ">
                <tr>
                    <th><span style="color:white;"> <?php print $liste[$i]['themename']; ?></span></th>
                    <td><span style="color:white;"> <?php print $liste[$i]['countryt'];  ?></span></td>
                    <td><span style="color:white;"> <?php print $liste[$i]['themegoal']; ?></span></td>
                    <td><span style="color:white;"><img src="./Admin/images/<?php print  $liste[$i]['pictures']  ; ?>" alt="pictures"/></span></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>

    </div>
    <?php
}
else {
    ?>
    <div class="container">
        <p>We have 0 species </p>
    </div>
    <?php
}

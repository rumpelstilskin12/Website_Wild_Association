
<hgroup>
    <h3 class="aligner txtGras">Liste des themes</h3>
</hgroup>

<br/><br/>
<?php
//récupération des elements pour la liste déroulante
$typ = new ThemeDB($cnx);
$types = $typ->getTheme();
$nbr_type = count($types);
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th scope="col"><span style="color:white;">idtheme</span></th>
                    <th scope="col"><span style="color:white;">theme</span></th>
                    <th scope="col"><span style="color:white;">country</span></th>
                    <th scope="col"><span style="color:white;">goal</span></th>
                </tr>
              </thead>
              <tbody>
                  <?php
                   for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                    <th scope="row"><span style="color:white;"><?php print $types[$i]->idtheme;?></span></th>
                    <td><span style="color:white;"><?php  print $types[$i]->themename; ?></span></td>
                    <td><span style="color:white;"><?php print $types[$i]->countryt; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->themegoal; ?></span></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

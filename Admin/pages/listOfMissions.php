
<hgroup>
    <h3 class="aligner txtGras">Liste des missions</h3>
</hgroup>

<br/><br/>
<?php
include('lib/php/v_connection.php');
//récupération des élements pour la liste déroulante

$typ = new MissionDB($cnx);
$types = $typ->getMission();
$nbr_type = count($types);
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-stripe">
              <thead>
                <tr>
                    <th ><span style="color:white;">idmission</span></th>
                    <th ><span style="color:white;">role mission</span></th>
                    <th><span style="color:white;">country mission</span></th>
                    <th><span style="color:white;">description mission</span></th>
                </tr>
              </thead>
              <tbody>
                  <?php
                   for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                    <th><span style="color:white;"><?php print $types[$i]->idmission;?></span></th>
                    <td><span style="color:white;"><?php  print $types[$i]->rolem; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->countrym; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->descriptionm; ?></span></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

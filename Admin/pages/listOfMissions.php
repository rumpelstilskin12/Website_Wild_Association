
<hgroup>
    <h3 class="aligner txtGras">Liste des missions</h3>
</hgroup>

<br/><br/>
<?php
//récupération des elements pour la liste déroulante
$typ = new MissionDB($cnx);
$types = $typ->getMission();
$nbr_type = count($types);
?>


<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th ><span style="color:white;">idmission</span></th>
                    <th ><span style="color:white;">role mission</span></th>
                    <th ><span style="color:white;">start date</span></th>
                    <th><span style="color:white;">end date</span></th>
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
                    <td><span style="color:white;"><?php print $types[$i]->startdate; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->enddate; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->countrym; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->descriptionm; ?></span></td>
                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

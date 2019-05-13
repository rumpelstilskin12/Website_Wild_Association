<hgroup>
    <h3 class="aligner txtGras">Liste des membres</h3>
</hgroup>

<br/><br/>
<?php
//récupération des elements pour la liste déroulante
$typ = new MemberDB($cnx);
$types = $typ->__getMember();
$nbr_type = count($types);
?>

<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th><span style="color:white;">idmember</span></th>
                    <th><span style="color:white;">lastname</span></th>
                    <th><span style="color:white;">firstname</span></th>
                    <th><span style="color:white;">phone</span></th>
                    <th><span style="color:white;">email</span></th>
                    <th><span style="color:white;">password1</span></th>
                    <th><span style="color:white;">birthdate</span></th>
                    <th><span style="color:white;">street</span></th>
                    <th><span style="color:white;">city</span></th>
                    <th><span style="color:white;">postcode</span></th>
                    <th><span style="color:white;">country</span></th>
                    <th><span style="color:white;">job</span></th>
                    <th><span style="color:white;">statuts</span></th>


                </tr>
              </thead>
              <tbody>
                  <?php
                   for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                    <th><span style="color:white;"><?php print $types[$i]->idmember;?></span></th>
                    <td><span style="color:white;"><?php  print $types[$i]->lastname; ?></span></td>
                    <td><span style="color:white;"><?php print $types[$i]->firstname; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->phone; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->email; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->password1; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->birthdate; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->street; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->city; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->postcode; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->country; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->job; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->statuts; ?></span></td>

                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>

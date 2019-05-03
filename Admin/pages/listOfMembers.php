<hgroup>
    <h3 class="aligner txtGras">Liste des membres</h3>
</hgroup>

<br/><br/>
<?php
//récupération des elements pour la liste déroulante
$typ = new MemberDB($cnx);
$types = $typ->getMember();
$nbr_type = count($types);
?>

<div class="container">
    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th scope="col"><span style="color:white;">idmember</span></th>
                    <th scope="col"><span style="color:white;">lastname</span></th>
                    <th scope="col"><span style="color:white;">firstname</span></th>
                    <th scope="col"><span style="color:white;">phone</span></th>
                    <th scope="col"><span style="color:white;">email</span></th>
                    <th scope="col"><span style="color:white;">password</span></th>
                    <th scope="col"><span style="color:white;">birthdate</span></th>
                    <th scope="col"><span style="color:white;">street</span></th>
                    <th scope="col"><span style="color:white;">city</span></th>
                    <th scope="col"><span style="color:white;">postcode</span></th>
                    <th scope="col"><span style="color:white;">country</span></th>
                    <th scope="col"><span style="color:white;">job</span></th>
                    <th scope="col"><span style="color:white;">iddon</span></th>


                </tr>
              </thead>
              <tbody>
                  <?php
                   for ($i = 0; $i < $nbr_type; $i++) {?>
                <tr>
                    <th scope="row"><span style="color:white;"><?php print $types[$i]->idmember;?></span></th>
                    <td><span style="color:white;"><?php  print $types[$i]->lastname; ?></span></td>
                    <td><span style="color:white;"><?php print $types[$i]->firstname; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->phone; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->email; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->password; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->birthdate; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->street; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->city; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->postcode; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->country; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->job; ?></span></td>
                    <td><span style="color:white;"><?php  print $types[$i]->iddon; ?></span></td>

                </tr>
                    <?php } ?>
                </tbody>
            </table>
    </form>
</div>
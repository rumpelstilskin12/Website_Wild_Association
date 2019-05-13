<?php

if (isset($_GET['submit_signup'])) {
    extract($_GET, EXTR_OVERWRITE);

    if (empty($lastname) || empty($firstname) || empty($email) || empty($password) || empty($birthdate)
            || empty($street) || empty($city) || empty($postcode) || empty($country)|| empty($phone)) {
        $erreur = "<span class='txtRouge txtGras'>Veuillez remplir tous les champs obligatoire</span>";
    } else {
        $member = new MemberDB($cnx);
        $retour = $member->addMember($_GET);
        print "Insertion dans la base de données réussie ! <br/>";

    }
    //var_dump($_GET);
}


if (isset($erreur))
    print $erreur;
?>

<div id="fullscreen_bg" class="fullscreen_bg"/>
 <form class="form-signin" action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">
                        Register</h3>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <!--<img href="./Admin/images/owl.png" alt="chouette"/>-->
                        <div class="input-group">
                            <label for="lastname"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <label for="firstname"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="email"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <label for="password"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="birthdate"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Birthdate" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="street"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="street" id="street" placeholder="Street" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="city"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="City" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="postcode"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="postcode" id="postcode" placeholder="Postcode" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="country"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="country" id="country" placeholder="Country" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <label for="phone"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="job"><img src="/Admin/images/origami2.png" alt="origami"/></label>
                            <input type="text" class="form-control" name="job" id="job" placeholder="Job" />
                        </div>
                    </div>


                </div>


                <input type="submit" name="submit_signup" id="submit_signup" class="btn btn-sm btn-light btn-block" value="Sign up">
                <!--<input type="reset" id="reset" value="Annuler"/>-->
                </form>
            </div>
        </div>
    </div>
</div>
</form>


</div>

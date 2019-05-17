<?php
class MemberDB extends Member{
     private $_db;
    private $_array = array();

    public function __construct($db){
        $this->_db = $db;
    }
    public function addMember($data) {

        $query = "select addmember(:lastname,:firstname,:phone,:email,"
                . ":password1,:birthdate,"
                . ":street,:city,:postcode,:country,:job,:statuts) "
                . "as retour";


// addmember = fonction que l'on va créer dans pgadmin
        try {
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':lastname', $data['lastname'], PDO::PARAM_STR);
            $resultset->bindValue(':firstname', $data['firstname'], PDO::PARAM_STR);
            $resultset->bindValue(':phone', $data['phone'], PDO::PARAM_STR);
            $resultset->bindValue(':email', $data['email'], PDO::PARAM_STR);

            //$resultset->bindValue(':email2', $data['email2'], PDO::PARAM_STR);
            $resultset->bindValue(':password1', $data['password1'], PDO::PARAM_STR);
            $resultset->bindValue(':birthdate', $data['birthdate'], PDO::PARAM_STR);
            $resultset->bindValue(':street', $data['street'], PDO::PARAM_STR);
            $resultset->bindValue(':city', $data['city'], PDO::PARAM_STR);
            $resultset->bindValue(':postcode', $data['postcode'], PDO::PARAM_STR);
            $resultset->bindValue(':country', $data['country'], PDO::PARAM_STR);

            $resultset->bindValue(':job', $data['job'], PDO::PARAM_STR);
            $resultset->bindValue(':statuts', $data['statuts'], PDO::PARAM_STR);
            $resultset->execute();
            $retour = $resultset->fetchColumn(0); // permet le retour de la fonction embarquée (pgadmin)



            return $retour;
        } catch (PDOException $e) {
            print "<br/>Echec de l'insertion";
            print $e->getMessage();
        }
    }
    public function __addMember($data) {

        $query = "select addmember(:lastname,:firstname,:phone,:email,"
                . ":password1,:birthdate,"
                . ":street,:city,:postcode,:country,:job,:status) "
                . "as retour";


// addmember = fonction que l'on va créer dans pgadmin
        try {
            $statuts=0;
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':lastname', $data['lastname'], PDO::PARAM_STR);
            $resultset->bindValue(':firstname', $data['firstname'], PDO::PARAM_STR);
            $resultset->bindValue(':phone', $data['phone'], PDO::PARAM_STR);
            $resultset->bindValue(':email', $data['email'], PDO::PARAM_STR);

            //$resultset->bindValue(':email2', $data['email2'], PDO::PARAM_STR);
            $resultset->bindValue(':password1', $data['password1'], PDO::PARAM_STR);
            $resultset->bindValue(':birthdate', $data['birthdate'], PDO::PARAM_STR);
            $resultset->bindValue(':street', $data['street'], PDO::PARAM_STR);
            $resultset->bindValue(':city', $data['city'], PDO::PARAM_STR);
            $resultset->bindValue(':postcode', $data['postcode'], PDO::PARAM_STR);
            $resultset->bindValue(':country', $data['country'], PDO::PARAM_STR);

            $resultset->bindValue(':job', $data['job'], PDO::PARAM_STR);
            $resultset->bindValue(':statuts', $statuts, PDO::PARAM_STR);
            $resultset->execute();
            $retour = $resultset->fetchColumn(0); // permet le retour de la fonction embarquée (pgadmin)



            return $retour;
        } catch (PDOException $e) {
            print "<br/>Echec de l'insertion";
            print $e->getMessage();
        }
    }
    public function getMember($email,$password1){
        try{
            $query = "select * from member where email =:email and password1 =:password1";
           // print $query;
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':email',$email);
            $resultset->bindValue(':password1',$password1);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Member($data);
            }
        }
        catch(PDOException $e){
            print $e->getMessage();
        }
        if(!empty($_array)){
            return $_array;
        }
        else {
            return null;
        }
    }
    public function __getMember(){
        try{
            $query = "select * from member";
           // print $query;
            $resultset = $this->_db->prepare($query);
            //$resultset->bindValue(':email',$email);
            //$resultset->bindValue(':password1',$password1);
            $resultset->execute();

            while($data = $resultset->fetch()){
                $_array[] = new Member($data);
            }
        }
        catch(PDOException $e){
            print $e->getMessage();
        }
        if(!empty($_array)){
            return $_array;
        }
        else {
            return null;
        }
    }
    //put your code her
    public function updateMember($champ,$nouveau,$id){

         try {

             $query="UPDATE member set ".$champ." = '".$nouveau."' where idmember ='".$id."'";
            // var_dump($id);
             $resultset = $this->_db->prepare($query);
             $resultset->execute();

         }catch(PDOException $e){
             print $e->getMessage();
         }
     }

}

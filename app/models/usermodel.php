<?php
class usermodel extends Model{

public function Subscribe(){
    $this->getConnection();
    $a=$this->_connexion; 
     $nom = $_POST['nom'];
    $sql = "UPDATE `testeupdate` SET `nom`='$nom'";
    $executer = $a->prepare($sql);
    echo $sql;
    $executer->execute();
    


}









} 
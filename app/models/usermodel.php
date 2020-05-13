<?php
class usermodel extends Model{

public function Subscribe(){
    $this->getConnection();
    $_POST['nom']=$nom;
    $sql = "UPDATE `testeupdate` SET `nom`='$nom'";
    $query = $this->_connexion->prepare($sql);
    $query->execute();


}









} 
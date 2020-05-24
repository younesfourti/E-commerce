<?php
class articlemodel extends Model{
    
public function get(){
    
    // connxion a la base 
    $this->getConnection();
    $sql = ("SELECT * FROM `article` ") ; 
    $preparsql = $this->_connexion->prepare($sql);
    $preparsql->execute();
    return $preparsql->fetchall(); 
    
 
// declaration des variable 
}


 /**
     * Retourne un article en fonction de son slug
     *
     * @param string $id
     * @return void
     */
    public function findByid($id){
        $this->getConnection();
        var_dump($id);
        $sql = "SELECT * FROM `article` WHERE `idarticle`='$id'";
        $one = $this->_connexion->prepare($sql);
        $one->execute();
        return $one->fetch(PDO::FETCH_ASSOC);    
    }
    
    public function findBycato($gato){
        $this->getConnection();
        
        $sql = "SELECT * FROM `article` WHERE `categorie`='$gato'";
        $one = $this->_connexion->prepare($sql);
        $one->execute();
        return $one->fetchall();    
    }
}
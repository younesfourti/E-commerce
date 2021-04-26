<?php
class articlemodel extends Model{
    
public function getcamera(){
    
    // connxion a la base 
    $this->getConnection();
    $sql = ("SELECT * FROM `camera` ") ; 
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
    public function findcameraByid($id){
        $this->getConnection();
        
        $sql = "SELECT * FROM `camera` WHERE `idarticle`='$id'";
        $one = $this->_connexion->prepare($sql);
        $one->execute();
        return $one->fetch(PDO::FETCH_ASSOC);    
    }
    
    public function findcameraBycato($gato){
        $this->getConnection();
        
        $sql = "SELECT * FROM `camera` WHERE `categorie`='$gato'";
        $one = $this->_connexion->prepare($sql);
        $one->execute();
        return $one->fetchall();    
    }

// partis Camescopes



public function getCamescopes(){
    
    // connxion a la base 
    $this->getConnection();
    $sql = ("SELECT * FROM `Camescopes` ") ; 
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
    public function findCamescopesByid($id){
        $this->getConnection();
        var_dump($id);
        $sql = "SELECT * FROM `Camescopes` WHERE `idarticle`='$id'";
        $one = $this->_connexion->prepare($sql);
        $one->execute();
        return $one->fetch(PDO::FETCH_ASSOC);    
    }
    
    public function findCamescopesBycato($gato){
        $this->getConnection();
        
        $sql = "SELECT * FROM `Camescopes` WHERE `categorie`='$gato'";
        $one = $this->_connexion->prepare($sql);
        $one->execute();
        return $one->fetchall();    
    }




































}
<?php
session_start();
// require_once('defaultcontroleur.php');
class boutique extends Controller {

    

    public function article(){
     

     
         
     $this->loadModel('articlemodel');
     
     $article = $this->articlemodel->get();
   
     $this->render('boutique',compact('article'));  
        

        
        

        

    }
    
    public function lire(){
        $idurl= explode('/', $_GET['p']);
        $id =$idurl[2];
        
       
        
        // On instancie le modèle "Article"
        $this->loadModel('articlemodel');

        // On stocke l'article dans $article
        $article = $this->articlemodel->findByid($id);

        // On envoie les données à la vue lire
        $this->render('produit', compact('article'));
    }

}
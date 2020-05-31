<?php
session_start();
// require_once('defaultcontroleur.php');
class boutique extends Controller {

    

    public function article(){
       
     $this->loadModel('articlemodel');
     
     $article = $this->articlemodel->getcamera();
     $article2 = $this->articlemodel->getCamescopes();
   
     $this->render('boutique',compact('article','article2'));  
        

        
        

        

    }
    
    public function lire(){
        $idurl= explode('/', $_GET['p']);
        $id =$idurl[2];
        
       
        
        // On instancie le modèle "Article"
        $this->loadModel('articlemodel');

        // On stocke l'article dans $article
        $article = $this->articlemodel->findcameraByid($id);

        // On envoie les données à la vue lire
        $this->render('produit', compact('article'));
    }
    
    
    public function categ(){
        $gato= $_POST['GATG'];
        $this->loadModel('articlemodel');
         
        // On stocke l'article dans $article
        $article = $this->articlemodel->findcameraBycato($gato);

        $this->render('boutique',compact('article'));


    }
  // partis Camescopes 

  public function Camescopes(){
     

     
         
    $this->loadModel('articlemodel');
    
    $article = $this->articlemodel->getCamescopes();
  
    $this->render('camescopes',compact('article'));  
       

       
       

       

   }
   
   public function lireCamescopes(){
       $idurl= explode('/', $_GET['p']);
       $id =$idurl[2];
       
      
       
       // On instancie le modèle "Article"
       $this->loadModel('articlemodel');

       // On stocke l'article dans $article
       $article = $this->articlemodel->findCamescopesByid($id);

       // On envoie les données à la vue lire
       $this->render('produit', compact('article'));
   }
   
   
   public function categCamescopes(){
       $gato= $_POST['GATG'];
       $this->loadModel('articlemodel');
        
       // On stocke l'article dans $article
       $article = $this->articlemodel->findCamescopesBycato($gato);

       $this->render('camescopes',compact('article'));


   }













}
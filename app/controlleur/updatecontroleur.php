<?php
session_start();
// require_once('defaultcontroleur.php');
class update extends Controller {

    public function profile(){
       
        $this->loadModel('usermodel');
        
        $article = $this->usermodel->updateprofil();
        
      
        $this->render('updateprofil');  
           
   
           
           
   
           
   
       }






}

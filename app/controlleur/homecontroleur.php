



<?php
// require_once('defaultcontroleur.php');
class home extends Controller {

    public function index(){
        
         
        $this->render('home');
        
    }

    public function Subscribe(){
     

     
     $this->render('Subscribe');      
     $this->loadModel('usermodel');
     
    $this->usermodel->Subscribe($_POST);
        
        

        
        

        

    }

}

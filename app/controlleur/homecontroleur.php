<?php
 print_r($_GET);
 print_r($_POST);
//  $a=$_GET['nom'];
 ?>



<?php
// require_once('defaultcontroleur.php');
class home extends Controller {

    public function index(){
        
         
        $this->render('teste');
        
    }

    public function Subscribe(){
   
     
        $this->render('Subscribe');
        $this->loadModel('usermodel');
        $this->usermodel->Subscribe($_POST);

        

        
        

        

    }

}
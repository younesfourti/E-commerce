<?php
 print_r($_GET);
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
        echo ('afichage controleur    ') ; 
        var_dump($_POST);
        $this->usermodel->Subscribe($_POST);

        

        
        

        

    }

}
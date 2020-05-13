<?php

class home extends Controller{

    public function index(){
        
        
        $this->render('teste');
        
    }

    public function Subscribe(){
        $this->render('Subscribe');

        $articles = $this->usemodel->Subscribe($_POST['nom']);


        $this->loadModel('usermodel');
        
      
    }

}
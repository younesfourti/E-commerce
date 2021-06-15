<?php
session_start();
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


    public function connection(){
        $this->render('connection');      
        $this->loadModel('usermodel');
       $this->usermodel->connection($_POST);   


    }
    public function profil(){
        $this->render('profil');      
     


    }




























    public function deconnxion(){

       
        session_start();
        session_destroy();
        echo "<script type='text/javascript'>document.location.replace('http://localhost/lensshop/');</script>";
        exit;

    }

}
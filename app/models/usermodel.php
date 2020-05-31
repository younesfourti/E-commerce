<?php
class usermodel extends Model{
    
public function Subscribe(){
    var_dump($_GET['p']); 
    // connxion a la base 
    $this->getConnection();
    $a=$this->_connexion; 
// declaration des variable 
    if (count($_POST) > 0){

    $prenom = $_POST['firstName'];
    $nom = $_POST['lastName'];
    $mail = $_POST['email'];
    $mdp = $_POST['passeword'];
    $mdp2 = $_POST['passeword2'];
    $adr = $_POST['address'];
    $conty= $_POST['country'];
    $lang= $_POST['lang'];
    $zip= $_POST['zip'];
    $sex= $_POST['sex'];

    if(filter_var($mail,FILTER_VALIDATE_EMAIL))
    {
            // verification si le mai existe deja 
            $reqmail = $a->prepare("SELECT * FROM compte WHERE email = ?");
            $reqmail-> execute(array($mail));
            $mailexist = $reqmail->rowCount();
            var_dump($mailexist);

            if($mailexist == 0)
            {
                if($mdp == $mdp2)
                {
                // si c est bon bah on inscris l etulisateur 
                    $insertmbr = $a->prepare("INSERT INTO compte (lastname,firstname,email,password,adresse,country,lang,sex,zip) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $insertmbr->execute(array($nom, $prenom, $mail, $mdp, $adr, $conty, $lang, $zip, $sex));
                    
                    echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/');</script>";

                }else{
                    $this->render('motdepassenonidentic'); 
                }
                    
            }
            else
            {
            
            // a rendre le message plus beau 
            $this->render('mailexiste');                         
        }

    }
    else{
        $this->render('mailok');  

    }
}
}
public function connection(){
    $this->getConnection();
    $a=$this->_connexion; 
    if (count($_POST) > 0) {
        
    
        $mail = $_POST['email'];
        $mdp = $_POST['passeword'];
        $sql = "select *  from compte
         where email= '" . $mail . "' and password = '" . $mdp . "'";
         $result = $this->_connexion->prepare($sql);
         $result->execute();
         $reponse = $result->fetch(PDO::FETCH_LAZY);  
       
        
        
       
        
        
        if ($reponse) {
            
            $_SESSION['idCompte'] = $reponse["idCompte"];
            $_SESSION['lastname'] = $reponse['lastname'];
            $_SESSION['firstname'] = $reponse['firstname'];
            $_SESSION['email'] = $reponse['email'];
            $_SESSION['adresse'] = $reponse['adresse'];
            $_SESSION['country'] = $reponse['country'];
            $_SESSION['lang'] = $reponse['lang'];
            $_SESSION['sex'] = $reponse['sex'];
            $_SESSION['zip'] = $reponse['zip'];
            echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/');</script>";
    
        }else {
            echo "<h1> erreur de connxion</h1>";
        }
    
    }
}






































































}
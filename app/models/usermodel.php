<?php
class usermodel extends Model{
    
    
    // partis pour l insciption
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


// partis pour la connexion 
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


// partis pour les mise a jpur du profil


public function updateprofil(){
    $this->getConnection();
    $a=$this->_connexion; 
    if (count($_POST) > 0){
    $prenom = $_POST['newfirstName'];
    $nom = $_POST['newlastName'];
    $adr = $_POST['newaddress'];
    $conty= $_POST['newcountry'];
    $lang= $_POST['newlang'];
    $zip= $_POST['newzip'];
    var_dump($_POST);
    // mise a jour du nom si l utilisateur la modifier
    if(isset($_POST['newlastName']) AND !empty($_POST['newlastName']) AND $_POST['newlastName'] != $_SESSION['lastname'])
	{
		$newnom = htmlspecialchars($_POST['newlastName']);
		$_SESSION['lastname'] = $newnom;
		$insertnom = $a->prepare("UPDATE compte SET lastName = ? WHERE idCompte  = ?");
		$insertnom->execute(array($newnom, $_SESSION['idCompte']));
        echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/home/profil');</script>";
		

    }
    // mise a jour du prenom si l utilisateur la modifier 
    if(isset($_POST['newfirstName']) AND !empty($_POST['newfirstName']) AND $_POST['newfirstName'] !=  $_SESSION['firstname'])
	{
		
		$newprenom = htmlspecialchars($_POST['newfirstName']);
		$_SESSION['firstname'] = $newprenom;
		$insertprenom = $a->prepare("UPDATE compte SET firstName = ? WHERE idCompte  = ?");
		$insertprenom->execute(array($newprenom, $_SESSION['idCompte']));
        echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/home/profil');</script>";

    }
    // mise a jour du adresse si l utilisateur la modifier
    if(isset($_POST['newaddress']) AND !empty($_POST['newaddress']) AND $_POST['newaddress'] !=  $_SESSION['address'])
	{
		
		$newaddress = htmlspecialchars($_POST['newaddress']);
		$_SESSION['adresse'] = $newaddress;
		$insertaddress = $a->prepare("UPDATE compte SET adresse = ? WHERE idCompte  = ?");
		$insertaddress->execute(array($newaddress, $_SESSION['idCompte']));
        echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/home/profil');</script>";

    }
    // mise a jour du country si l utilisateur la modifier
    if(isset($_POST['newcountry']) AND !empty($_POST['newcountry']) AND $_POST['newcountry'] !=  $_SESSION['country'])
	{
		
		$newcountry = htmlspecialchars($_POST['newcountry']);
		$_SESSION['country'] = $newcountry;
		$insertcountry = $a->prepare("UPDATE compte SET country = ? WHERE idCompte  = ?");
		$insertcountry->execute(array($newcountry, $_SESSION['idCompte']));
        echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/home/profil');</script>";

    }
    // mise a jour du lang si l utilisateur la modifier
    if(isset($_POST['newlang']) AND !empty($_POST['newlang']) AND $_POST['newlang'] !=  $_SESSION['lang'])
	{
		
		$newlang = htmlspecialchars($_POST['newlang']);
		$_SESSION['lang'] = $newlang;
		$insertlang = $a->prepare("UPDATE compte SET lang = ? WHERE idCompte  = ?");
		$insertlang->execute(array($newlang, $_SESSION['idCompte']));
        echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/home/profil');</script>";

    }
    // mise a jour du zip si l utilisateur la modifier
    if(isset($_POST['newzip']) AND !empty($_POST['newzip']) AND $_POST['newzip'] !=  $_SESSION['zip'])
	{
		
		$newzip = htmlspecialchars($_POST['newzip']);
		$_SESSION['zip'] = $newzip;
		$insertzip = $a->prepare("UPDATE compte SET zip = ? WHERE idCompte  = ?");
		$insertzip->execute(array($newzip, $_SESSION['idCompte']));
        echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/home/profil');</script>";

	}
    
    
    




























}

}





































































}
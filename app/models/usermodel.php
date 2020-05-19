<?php
class usermodel extends Model{
    
public function Subscribe(){
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


// verification si le mai existe deja 
					$reqmail = $a->prepare("SELECT * FROM compte WHERE mail = ?");
					$reqmail->execute(array($mail));
                    $result=$reqmail->rowCount();
                    echo $result;
                    if($result == 0){       
                        if($mdp == $mdp2)
						{
						// si c est bon bah on inscris l etulisateur 
							$insertmbr = $a->prepare("INSERT INTO compte (lastname,firstname,email,password,adresse,country,lang,sex,zip) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
							$insertmbr->execute(array($nom, $prenom, $mail, $mdp, $adr, $conty, $lang, $zip, $sex));
							$erreur = "Votre compte a bien été créer";	
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
}
    


}
<?php



// On génère une constante contenant le chemin vers la racine publique du projet
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
// On appelle le modèle et le contrôleur principaux
require_once(ROOT.'app\controlleur\defaultcontroleur.php');
require_once(ROOT.'app\models\defaultmodel.php');
$params = explode('/', $_GET['p']);



if($params[0] != ""){

    $controller =(strtolower($params[0]));
    $controllerClass = $controller."controleur";
    // On sauvegarde le 2ème paramètre dans $action si il existe, sinon index
    $action = isset($params[1]) ? $params[1] : 'index';



  // On appelle le contrôleur
  require_once(ROOT.'app/controlleur/'. $controllerClass.'.php');

  // On instancie le contrôleur
  $controller = new $controller();

  if(method_exists($controller, $action)){
      unset($params[0]);
      unset($params[1]);
      call_user_func_array([$controller,$action], $params);
      // On appelle la méthode
      // $controller->$action();    
  }else{
      // On envoie le code réponse 404
      http_response_code(404);
      echo "La page recherchée n'existe pas";
  }
}else{
  // Ici aucun paramètre n'est défini
  // On appelle le contrôleur par défaut
  require_once(ROOT.'app\controlleur\homecontroleur.php');

  // On instancie le contrôleur
  $controller = new home();

  // On appelle la méthode index
  $controller->index();
}



























?>

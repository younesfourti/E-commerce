<?php
abstract class Controller {
    /**
     * Afficher une vue
     *
     * @param string $fichier
     * @param array $data
     * @return void
     */
    public function render($fichier,  $data = []){
        extract($data);

        

        // On génère la vue
        require_once(ROOT.'app/views/'.$fichier.'.php');

      
        
    }

    /**
     * Permet de charger un modèle
     *
     * @param string $model
     * @return void
     */
    public function loadModel($model){
        // On va chercher le fichier correspondant au modèle souhaité
        require_once(ROOT.'app/models/'.$model.'.php');
        
        // On crée une instance de ce modèle. Ainsi "Article" sera accessible par $this->Article
        $this->$model = new $model();
    }
}
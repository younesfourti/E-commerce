<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../../public\assets\css\style.css">
<link rel="stylesheet" href="../../public\assets\css\styleProd.css">

<head>
<?php
 include_once 'app\Views\navtohomeblanc.php';

?>
</head>
<body>

<!-- ------------------------------debut page boutique----------------------------- -->
    <section class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                
                <div class="imgprincipal row col-lg-9 img align-items-center">
                    
                  <div class="col-lg-2">
                        <aside class="col test">
        <!--Les miniatures : METTRE UN FOREACH POUR PLACER CHAQUES IMAGES AUTOMATIQUEMENT -->
        <?php
        $i=0;
        while($i<3)
        {
            ?>
        
                    <a href="#"><img class="img-thumbnail minia " src="../<?=$article['photo']?>"></a>
                <?php
                $i=$i+1;

                }
                ?>
                        </aside>
                   </div>
        <!-- L'image Principale -->
                   <aside class="cont_img_princ col-lg-10">
                        <img class="imgPrincipale img-fluid " src="../<?=$article['photo']?>">
                   </aside>

                </div>
        <!-- Description + Prix a droite de l'image -->
                <article class=" description col-lg-3">
                    <h1><?=$article['titre']?></h1>
                    
                    <h3 class="prix"><?=$article['prix'] ?> €</h3>

                    <div>
                        <a href="#"><img class="couleur" src="../<?=$article['photo']?>"></a>
                       
                    </div>

                    <div class="container">
                        <div class="row">
        <!-- Formulaire Pour choix de Taille + Quantitée -->
                            <form method="GET" action="panier.php">
                                
                                <label for="taille">Choisir une couleur  </label><br>

                                <select name="taille" id="taille">
                                    <option selected value="S">bleu</option>
                                    <option value="M">noir</option>
                                    <option value="L">blanc</option>
                                </select>

                                <input value="1" type="number" name="qte_panier" class="qte">
                                <button type="submit" class="boutonpannier"> AJOUTER AU PANNIER </button>

                            </form>
                        </div>
                    </div>

                </article>

            </div>

        </div>

        <div class="container">
            <article class="row">
                <div class="col-lg-6">
                    <h2>DESCRIPTION</h2>
                    <p><?=$article['descri']?></p>
                </div>

                <div class="col-lg-6">
                    <h2>CARACTERISTIQUES</h2>
                    <ul>
                        <li>c est le futur</li>
                        <li>c est le futur</li>
                        <li>c est le futur</li>
                        <li>achete</li>
                    </ul>
                </div>

            </article>

        </div>

    </section>
</body>

<footer class="pt-4 my-md-5 pt-md-5 border-top" style="max-width: 99%; ">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="../../public/assets/img/logo-rougepointpetits-0blanc.jpg"
                    style="position: relative;top:-20px; width=" 225" height="225">
                <small class="d-block mb-3 text-muted" style="position: relative;top:-20px;left:60px;">2020-2020</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</html>
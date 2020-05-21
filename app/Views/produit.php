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
 include_once 'app\Views\navtohome.php';

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
                    <p class="anotation">Catégorie/T-shirt</p>
                    <h1><?=$article['titre']?></h1>
                    <p><?=$article['descri']?></p>
                    <h3 class="prix"><?=$article['prix'] ?> €</h3>

                    <div>
                        <a href="#"><img class="couleur" src="../<?=$article['photo']?>"></a>
                       
                    </div>

                    <div class="container">
                        <div class="row">
        <!-- Formulaire Pour choix de Taille + Quantitée -->
                            <form method="GET" action="panier.php">
                                
                                <label for="taille">Choisir une taille  </label><br>

                                <select name="taille" id="taille">
                                    <option selected value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
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
                    <p>nn fini</p>
                </div>

                <div class="col-lg-6">
                    <h2>CARACTERISTIQUES</h2>
                    <ul>
                        <li>nn</li>
                        <li>nn</li>
                        <li>nn</li>
                        <li>fini</li>
                    </ul>
                </div>

            </article>

        </div>

    </section>
</body>


</html>
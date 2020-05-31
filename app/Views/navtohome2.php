<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<style>
.imgnav {
    position: relative;
    top: -6px;
    left: -110px;

}
</style>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <?php
                  if(isset($_SESSION['idCompte'])) {
                  ?>
                <a class="btn btn-sm btn-outline-secondary"
                    href="http://localhost/E-commerce/home/deconnxion"> deconnexion </a>
                    <?php}
                        if (isset($_SESSION['id'])) {
                        ?>

                        <?php
                        } else {
                        ?>
                             <a class="btn btn-sm btn-outline-secondary"
                    href="http://localhost/E-commerce/home/Subscribe">inscription</a>
                        <?php
                        }
                        ?>
               

            </div>
            <div class="col-4 text-center">
                <p style=color:BLACK;font-size:30px;>LensShop</p>
               
            </div>
            <img class="imgnav" src="../../public\assets\img\logo-rougepointpetits-0blanc.jpg" alt="" width="70" height="70">
            <div class="col-4 d-flex justify-content-end align-items-center">

               

                    <?php
                  if(isset($_SESSION['idCompte'])) {
                  ?>
                  <img src="../../public\assets\profillogo.png" style='float : right;
    width : 40px; height: 40px;'>
                <a class="btn btn-sm btn-outline-secondary"
                    href="http://localhost/E-commerce/home/Subscribe"> Bonjour <?= $_SESSION['firstname'], " ",   $_SESSION['lastname']; ?></a>
                    <?php}
                        if (isset($_SESSION['id'])) {
                        ?>

                        <?php
                        } else {
                        ?>
                              <a class="btn btn-sm btn-outline-secondary"
                    href="http://localhost/E-commerce/home/connection">connection</a>n 
                        <?php
                        }
                        ?>
            </div>
        </div>
    </header>





    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#">decouvert Appareils photo</a>
           
            <a class="p-2 text-muted" href="#">Accessoires et produits officiels</a>
            <a class="p-2 text-muted" href="#">Cadeaux et guides d'achat</a>
            <a class="p-2 text-muted" href="http://localhost/E-commerce/boutique/Camescopes">Caméscopes</a>
            <a class="p-2 text-muted" href="#">Offres</a>
            <a class="p-2 text-muted" href="http://localhost/E-commerce/boutique/article">boutique</a>
            <a class="p-2 text-muted" href="http://localhost/E-commerce/home/profil">parametre de compte</a>
        </nav>
    </div>
<html>
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


<head>

</head>

<body>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../public\assets\img\logo-rougepointpetits-0blanc.jpg" alt=""
                width="100" height="100">
            <h2>LensShop</h2>
            <p class="lead">phrace d explique pk s inscire katia tu le fais phrace d explique pk s inscire katia tu le
                faisphrace d explique pk s inscire katia tu le faisphrace d explique pk s inscire katia tu le faisphrace
                d explique pk s inscire katia tu le fais</p>
        </div>




        <!-- parti formulaire -->
        <div style="position:relative;left:200px; top: -30px;text-align:center;">

            <div class=" row">

                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">inscription</h4>
                    <form class="needs-validation was-validated" method="POST" action = "">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nom de famille</label>
                                <input type="text" class="form-control" name="firstName" placeholder="" value=""
                                    required="">
                                <div class="invalid-feedback">
                                    Un prénom valide est requis.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Prénom</label>
                                <input type="text" class="form-control" name="lastName" placeholder="" value=""
                                    required="">
                                <div class="invalid-feedback">
                                    Un nom de famille valide est requis.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="you@example.com" required="">
                            <div class="invalid-feedback">
                                Veuillez saisir une adresse e-mail valide pour les mises à jour d'expédition.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">mot de passse </label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="passeword" placeholder="mot de passse"
                                    required="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    mot de passe est requis.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username">mot de passse confermation</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="passeword2" placeholder="mot de passse"
                                    required="">
                                <div class="invalid-feedback" style="width: 100%;">
                                confermation de mot de passe est requis.
                                </div>
                            </div>
                        </div>

                        

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="1234 Main St" required="">
                            <div class="invalid-feedback">
                                Prière d'indiquer ton adresse d'expédition.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Pays</label>
                                <select class="custom-select d-block w-100" name="country" required="">
                                    <option value="">Choisir...</option>
                                    <option>United States</option>
                                    <option>france</option>
                                    <option>espagne</option>
                                    
                                </select>
                                <div class="invalid-feedback">
                                    Veuillez sélectionner un pays valide.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">langue</label>
                                <select class="custom-select d-block w-100" name="lang" required="">
                                    <option value="">Choisir...</option>
                                    <option>fr</option>
                                    <option>an</option>
                                </select>
                                <div class="invalid-feedback">
                                    Veuillez fournir un état valide.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">code postal</label>
                                <input type="text" class="form-control" name="zip" placeholder="" required="">
                                <div class="invalid-feedback">
                                    code postal obligatoire.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3"style = "position:relative;left:255px;">
                                <label for="state">sex</label>
                                <select class="custom-select d-block w-100" name="sex" required="">
                                    <option value="">Choisir...</option>
                                    <option>female</option>
                                    <option>male</option>
                                </select>
                                <div class="invalid-feedback">
                                    Veuillez fournir un état valide.
                                </div>
                            </div>
                        </div>
                       
                </div>
            </div>
            <hr class="mb-4" style=position:relative;left:-200px;>
            <button class="btn btn-primary btn-lg btn-block" type="submit" style=position:relative;left:-200px; href="home">valider l'inscription</button>
            </form>
           
        </div>

    </div>




</body>

</html>
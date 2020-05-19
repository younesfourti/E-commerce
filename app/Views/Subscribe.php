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
<script type="text/javascript" src="public\assets\js\inscip.js"></script>

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
                            <label for="username">Nom d'utilisateur</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    required="">
                                <div class="invalid-feedback" style="width: 100%;">
                                    Votre nom d'utilisateur est requis.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" name="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Veuillez saisir une adresse e-mail valide pour les mises à jour d'expédition.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="1234 Main St" required="">
                            <div class="invalid-feedback">
                                Prière d'indiquer ton adresse d'expédition.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" name="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Pays</label>
                                <select class="custom-select d-block w-100" name="country" required="">
                                    <option value="">Choisir...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Veuillez sélectionner un pays valide.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Etat</label>
                                <select class="custom-select d-block w-100" name="state" required="">
                                    <option value="">Choisir...</option>
                                    <option>California</option>
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
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="same-address">
                            <label class="custom-control-label" for="same-address">L'adresse de livraison est la même
                                que
                                mon adresse de facturation</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="save-info">
                            <label class="custom-control-label" for="save-info">Enregistrez ces informations pour la
                                prochaine fois</label>
                        </div>
                </div>
            </div>
            <hr class="mb-4" style=position:relative;left:-200px;>
            <button class="btn btn-primary btn-lg btn-block" type="submit" style=position:relative;left:-200px;>valider l'inscription</button>
            </form>
           
        </div>

    </div>




</body>

</html>
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
            <p class="lead">ici vous pouvez mettre a jour vos informations personelles facillement </p>
        </div>




        <!-- parti formulaire -->
        <div style="position:relative;left:200px; top: -30px;text-align:center;">

            <div class=" row">

                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">mise a jour du profile </h4>
                    <form class="needs-validation was-validated" method="POST" action = "">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nom de famille</label>
                                <input type="text" class="form-control" name="newfirstName" placeholder="<?= $_SESSION['firstname']?>" value=""
                                >
                                <div class="invalid-feedback">
                                    Un prénom valide est requis.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Prénom</label>
                                <input type="text" class="form-control" name="newlastName" placeholder="<?= $_SESSION['lastname']?>" value=""
                                >
                                <div class="invalid-feedback">
                                    Un nom de famille valide est requis.
                                </div>
                            </div>
                        </div>
                    

                        

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="newaddress" placeholder="<?= $_SESSION['adresse']?>">
                            <div class="invalid-feedback">
                                Prière d'indiquer ton adresse d'expédition.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Pays</label>
                                <select class="custom-select d-block w-100" name="newcountry" >
                                    <option value=""><?= $_SESSION['country']?></option>
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
                                <select class="custom-select d-block w-100" name="newlang">
                                    <option value=""><?= $_SESSION['lang']?></option>
                                    <option>fr</option>
                                    <option>an</option>
                                </select>
                                <div class="invalid-feedback">
                                    Veuillez fournir une langue valide.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">code postal</label>
                                <input type="text" class="form-control" name="newzip" placeholder="<?= $_SESSION['zip']?>">
                                <div class="invalid-feedback">
                                    code postal obligatoire.
                                </div>
                            </div>
                         
                        </div>
                       
                </div>
            </div>
            <hr class="mb-4" style=position:relative;left:-200px;>
            <button class="btn btn-primary btn-lg btn-block" type="submit" style=position:relative;left:-200px;>valider la mise a jour</button>
            </form>
           
        </div>

    </div>




</body>

</html>
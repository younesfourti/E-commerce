<html>

<head>
    <style type="text/css">
    @charset "UTF-8";


    .ng-cloak,
    .x-ng-cloak,
    .ng-hide:not(.ng-hide-animate) {
        display: none !important;
    }

    ng\:form {
        display: block;
    }

    .ng-animate-shim {
        visibility: hidden;
    }

    .ng-anchor {
        position: absolute;
    }
    </style>




    <title>LensShop ID</title>

    <!-- Favicon -->
    <link rel="icon" type="image/vnd.microsoft.icon"
        href="https://myid.canon/prd/1.1.24/canonid-assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="152x152"
        href="https://myid.canon/prd/1.1.24/canonid-assets/favicon/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="https://myid.canon/prd/1.1.24/canonid-assets/favicon/android-chrome-192x192.png">

    <!-- CSS -->
    <link rel="stylesheet" href="https://myid.canon/prd/1.1.24/canonid-assets/canonid.vendor.min.7282989d2e5c1c7b.css">

    <link rel="stylesheet" href="https://myid.canon/prd/1.1.24/canonid-assets/canonid.min.e758221f2a9d9eca.css"
        media="screen">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:Italic,400,600,700&amp;subset=latin,vietnamese,greek,cyrillic">


</head>

<body flex="noshrink" layout="column" class="layout-column flex-noshrink">
    <font-setter>

    </font-setter>
    <gcid-header flex="none" class="ng-isolate-scope flex-none">

        <div ng-if="headerCtrl.isLoggedIn()"
            class="header-content site-padding-l-r ng-scope layout-align-space-between-center layout-row" layout="row"
            layout-align="space-between center" style="">
            <a class="gcid-logo" href="http://localhost/E-commerce">
                <img src="../public\assets\img\logoenrouge.png"></a>
            <gcid-sign-out class="ng-isolate-scope">
                <a class="gcid-sign-out-button ng-binding ng-scope" href="http://localhost/E-commerce/home/deconnxion">
                    Déconnexion </a>
            </gcid-sign-out>
        </div>
    </gcid-header>



    <!-- uiView: -->
    <div id="site-container" ui-view="" flex="noshrink" layout="column" class="ng-scope layout-column flex-noshrink"
        style="">
        <account-container class="ng-scope ng-isolate-scope">



            <div class="site-padding-l-r no-padding-xs" ng-show="$ctrl.userDetailsLoaded" aria-hidden="false" style="">
                <div class="account-text-bar">
                    <h2 class="core-text-header core-text-color-content-grey account-text-overflow account-header-line ng-binding ng-scope"
                        ng-if="!$ctrl.isEno();"><?=$_SESSION['firstname']." ".$_SESSION['lastname']?></h2>
                    <p class="core-text-content core-text-color-content-grey account-text-bottom-margin ng-binding">Ceci
                        est votre compte LensShop ID.</p>
                </div>
                <account-row-container row-title="ACCOUNT_DETAILS_HEADER" layout="column"
                    class="ng-isolate-scope layout-column">
                    <div layout-gt-xs="row" layout="column" class="layout-gt-xs-row layout-column">
                        <div class="account-row-title-container flex-gt-xs-33 flex-auto" flex-gt-xs="33" flex="auto"
                            ng-click="$ctrl.displayContent()" role="button" tabindex="0"> <span
                                class="core-text-color-content-grey ng-binding">Vos informations</span>
                            <div class="expand-button arrow-right hide-gt-xs" hide-gt-xs=""></div>
                        </div>
                        <div class="account-row-content-container expandable-hidden hide-xs flex-gt-xs-66 flex-auto"
                            flex-gt-xs="66" flex="auto" hide-xs="" ng-transclude="">
                            <user-details details="$ctrl.details" countries="$ctrl.countries"
                                languages="$ctrl.languages" on-update="$ctrl.updateDetailsWrapper"
                                is-eno="$ctrl.isEno();" class="ng-scope ng-isolate-scope">
                                <div class="user-details-container" ng-init="$ctrl.syncData()">

                                    <div ng-if="$ctrl.displayDetails"
                                        class="display-details-container ng-scope layout-gt-sm-row layout-column"
                                        layout-gt-sm="row" layout="column">
                                        <div style="min-width:50%">
                                            <p class="core-text-small core-text-color-label-grey ng-binding">Nom</p>
                                            <p id="accountName" ng-if="!$ctrl.isEno();"
                                                class="account-text-margin core-text-content core-text-color-content-grey account-text-overflow ng-binding ng-scope">
                                                <?=$_SESSION['firstname']." ".$_SESSION['lastname']?></p>
                                            <!-- end ngIf: !$ctrl.isEno(); -->
                                            <p class="core-text-small core-text-color-label-grey ng-binding">Langue</p>
                                            <p id="accountLanguage"
                                                class="account-text-margin core-text-content core-text-color-content-grey account-text-overflow ng-binding">
                                                <?=$_SESSION['lang']?></p>
                                            <p class="core-text-small core-text-color-label-grey ng-binding">Pays/Région
                                            </p>
                                            <p id="accountCountry"
                                                class="account-text-margin core-text-content core-text-color-content-grey account-text-overflow ng-binding">
                                                <?= $_SESSION['country']?></p>
                                        </div>
                                        <div flex="66" class="flex-66">
                                            <p class="core-text-small core-text-color-label-grey ng-binding">
                                                Adresse</p>

                                            <p id="accountPhoneNumber" ng-if="!$ctrl.displayPhoneNumber()"
                                                class="account-text-margin core-text-content italic core-text-color-optional-grey ng-binding ng-scope">
                                                <?= $_SESSION['adresse']?></p>
                                            <p class="core-text-small core-text-color-label-grey ng-binding">Date de
                                                naissance</p>


                                            <p id="accountDateOfBirth" ng-if="!$ctrl.displaybirthDate()"
                                                class="account-text-margin core-text-content italic core-text-color-optional-grey ng-binding ng-scope">
                                                Non défini</p>
                                            <p class="core-text-small core-text-color-label-grey ng-binding">Zip</p>


                                            <p id="accountDateOfBirth" ng-if="!$ctrl.displaybirthDate()"
                                                class="account-text-margin core-text-content italic core-text-color-optional-grey ng-binding ng-scope">
                                                <?=$_SESSION['zip']?></p>
                                        </div>
                                        <div> <a href="http://localhost/E-commerce/update/profile" id="editButton"
                                                ng-click="$ctrl.toggleState()"
                                                class="core-text-small core-text-color-blue gcid-link edit-button ng-binding">Éditer</a>
                                        </div>
                                    </div>
                                </div>
                            </user-details>
                        </div>
                    </div>
                </account-row-container>
                <account-row-container row-title="ACCOUNT_ACCOUNT_HEADER" layout="column"
                    class="ng-isolate-scope layout-column">
                    <div layout-gt-xs="row" layout="column" class="layout-gt-xs-row layout-column">
                        <div class="account-row-title-container flex-gt-xs-33 flex-auto" flex-gt-xs="33" flex="auto"
                            ng-click="$ctrl.displayContent()" role="button" tabindex="0"> <span
                                class="core-text-color-content-grey ng-binding">Compte</span>
                            <div class="expand-button arrow-right hide-gt-xs" hide-gt-xs=""></div>
                        </div>
                        <div class="account-row-content-container expandable-hidden hide-xs flex-gt-xs-66 flex-auto"
                            flex-gt-xs="66" flex="auto" hide-xs="" ng-transclude="">
                            <div layout-gt-sm="row" class="ng-scope layout-gt-sm-row">
                                <div class="account-left-column" style="min-width:50%">
                                    <p class="core-text-small core-text-color-label-grey ng-binding">Adresse e-mail</p>
                                    <p class="core-text-content email-text core-text-color-content-grey ng-binding">
                                        <?= $_SESSION['email']?></p>
                                    <a ng-if="$ctrl.isPasswordSet() &amp;&amp; $ctrl.ableToChangeEmail()"
                                        class="gcid-link core-text-color-blue core-text-small ng-binding ng-scope"
                                        id="emailChangeButton" email-change-button="">Changer</a>


                                    <p
                                        class="core-text-small core-text-color-label-grey account-password-label ng-binding">
                                        Mot de passe</p>
                                    <a id="pwChangeButton"
                                        class="gcid-link core-text-color-blue account-semibold-text core-text-content ng-binding ng-scope"
                                        password-change-button="">Changer de mot de passe</a>


                                </div>
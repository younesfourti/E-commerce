<!DOCTYPE html>
<html lang="fr">

<html data-wf-page="6067b000dd78fd51e969430b" data-wf-site="6067b000dd78fd6d75694308">
<head> 
  <meta charset="utf-8">
  <title>Example Page - Webflow Template</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../public/assets/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../public/assets/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../public/assets/css/lensshop.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Roboto:300,regular,500"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="public/assets/img/logo-rougepointpetits-0blanc.jpg">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>

<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
    <div class="w-container">
      <a href="index.html" aria-current="page" class="brand-link w-nav-brand w--current">
        <h1 class="brand-text">LensShop</h1>
      </a><img src="../public/assets/img/logo-rougepointpetits-0blanc.jpg"  width="60" height="60"  sizes="60px" alt="" class="logo">
      <nav role="navigation" class="navigation-menu w-nav-menu">
        <a href="index.html" aria-current="page" class="navigation-link w-nav-link w--current">boutique</a>
        <a href="blog.html" class="navigation-link w-nav-link">nouveux produit</a>
        <a href="about.html" class="navigation-link w-nav-link">younes fourti</a>
      </nav>
      <div class="hamburger-button w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>

  <div class="section">
    <?php  foreach($article as $article): ?>

                   
                    
    <div class="div-block-3">
    <img src=<?=$article['photo']?> height="211"  class="image">
      <div class="textearticle">
        <a class="link"><?= $article['descri'] ?></a>
      </div>
      <div class="stock">
        <a class="link-2">En stock</a><br>
      </div>
      <a href="http://localhost/E-commerce/boutique/lire/<?= $article['idarticle']?>" class="button w-button"><?= $article['prix'] ?></a>
    </div>
    <?php endforeach ?>
  </div>
  <div class="footer">
    <div class="w-container">
      <div>
        <a href="#" class="social-icon-link w-inline-block"><img src="images/social-03.svg" width="20" alt=""></a>
        <a href="#" class="social-icon-link w-inline-block"><img src="images/social-18.svg" width="20" alt=""></a>
        <a href="#" class="social-icon-link w-inline-block"><img src="images/social-30.svg" width="20" alt=""></a>
      </div>
    </div>
    <div class="footer-text">Powered by Webflow</div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6067b000dd78fd6d75694308" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>

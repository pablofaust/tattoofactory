<!doctype html>
<html class="no-js" lang="es_ES">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/code.js"></script>
  <title>Ouest Drapeaux</title>

</head>

<body>

  <div class="navbar">
    <div class="logo" style="background-image:url(./img/logo.png)">
    </div>
    <ul class="menu">
      <li class="lien1">
        <a href="#"><h2>Communication et signalétique</h2></a>
      </li>
      <li class="lien2">
        <a href="#"><h2>Articles de mairie</h2></a>
      </li>
      <li class="lien3">
        <a href="#"><h2>Drapeaux, mâts et supports</h2></a>
      </li>
      <li class="lien4">
        <a href="#formulaire"><h2><strong>Demande de devis</strong></h2></a>
      </li>
    </ul>

    <div class="btn-group" id="dropdown-button">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="background-image:url(./img/dropdown.png)">
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Communication et signalétique</a></li>
        <li><a href="#">Articles de mairie</a></li>
        <li><a href="#">Drapeaux, mâts et supports</a></li>
      </ul>
    </div>
  </div>
<!-- <div class="wrapper"> -->
  <div class="section-bleue" id="accueil">
    <div class="titre">
      <h3>Nouveaux produits</h3>
    </div>
  </div>
 
  <div class="produits">
    <div class="img1" style="background-image:url(./img/produit1.png)">
    </div>
    <div class="img2" style="background-image:url(./img/produit2.png)">
    </div>
    <div class="img3" style="background-image:url(./img/produit3.png)">
    </div>
  </div>

  <!-- <div class="wrapper"> -->
  <div class="section-rouge-1">
    <a href="#contact"><button type="button" class="suite">
      <h4>Demandez un devis</button></h4>
    </a>
  </div>
  <!-- </div> -->
  <div class="section-rouge-2" id="contact">
    <div class="titre-2">
      <h3>Nous vous répondrons au plus vite !</h3>
    </div>
  </div>

  <div class="devis">
    <div class="formulaire" id="formulaire">
        <?php if(array_key_exists('errors', $_SESSION)): ?>
      <div class="alert alert-danger">
        <?= implode('<br>', $_SESSION['errors']); ?>
      </div>
    <?php unset($_SESSION['errors']); endif; ?>
    <?php if(array_key_exists('success', $_SESSION)): ?>
      <div class="alert alert-success">
        Votre message a bien été envoyé !
      </div>
    <?php unset($_SESSION['errors']); endif; ?>


    <form action="post_contact.php" method="POST">
          <div class="nom">
            <label for="inputname"><h3>Nom :</h3></label>
            <input required type="text" placeholder="Pour savoir qui nous écrit :)" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
          <div class="mail">
            <label for="inputemail"><h3>E-mail :</h3></label>
            <input required type="text" placeholder="Pour qu'on puisse vous répondre !" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
          </div>
          <div class="message">
            <label for="inputmessage"><h3>Message :</h3></label>
            <textarea required id="inputmessage" rows="8" placeholder="Ce sera toujours un plaisir de vous lire !" name="message" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div>
          <button type="submit" class="envoyer">Envoyer</button>
<!--               <div class="loi-donnees">
      <p>Conformément à la loi informatique et liberté du 06/01/1978, vous disposez d'un droit d'accès, de rectification et de radiation des données, vous concernant, en vous adressant au siège social de COUTARD PAVOISEMENT.</p>
    </div> -->
    </form>
    </div>

    <div class="infos">
      <div class="contact">
        <h3>Contact</h3>
      </div>
      <p>Coutard Pavoisement<br>Route de Saint-Lo<br>14400 Bayeux<br><br>Mail : coutard.pavoisement@hotmail.fr<br> Tel : 2 31 92 85 24<br>Fax : 2 31 92 99 22</p>
    </div>
  </div>
<!-- </div> -->
  
</body>

<html>
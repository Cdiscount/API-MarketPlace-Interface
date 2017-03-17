<!-- Page SubmitOfferPackage -->

<html lang="en">

  <head>
    <title>Interface API Methods</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/SubmitOfferPackage_FormValidationError.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
    <script type="text/javascript" src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
  </head>

  <body>

    <div class="container">

      <!-- Menu déroulant pour accéder aux différentes méthodes de l'API -->
      <?php
        include 'navbar/navbar.php';
      ?>    

      <!-- Formulaire de connexion -->
      <!-- Formulaire pour générer le token par vendeur -->
      <form class="form-horizontal" id="request" action="SubmitOfferPackage_Response.php" method="POST">

        <div class="col-md-6">

          <!-- Champ username a renseigner -->
          <div class="form-group">
            <label class="control-label col-sm-3" for="username">Username</label>
            <div class="col-sm-10">
              <input type="usename" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="col-xs-7 messageContainer"></div>
          </div>

          <!-- Champ password à renseigner -->
          <div class="form-group">
            <label class="control-label col-sm-3" for="password">Password</label>
            <div class="col-sm-10">          
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <div class="col-xs-7 messageContainer"></div>
          </div>

          <!-- Token généré une fois les deux champs ci-dessus remplit -->
          <div class="form-group">
            <label class="control-label col-sm-3" for="token">Token</label>
            <div class="col-sm-10">
              <input type="text" id="afficher_token_sop" class="form-control" placeholder="Enter token">
            </div>
            <div class="col-xs-7 messageContainer"></div>
          </div>

          <!-- URL du chemin d'accès au dossier archivé ZIP -->
          <div class="form-group">
            <label class="control-label col-sm-3" for="zipfile">ZipFileFullPath</label>
            <div class="col-sm-10">
              <input type="text" name="zipfile" id="zipfile" class="form-control" placeholder="Enter Zip File Full Path">
            </div>
            <div class="col-xs-7 messageContainer"></div>
          </div>

          <!-- Choisir le mode d'envoie pour récupérer la réponse -->
          <div class="form-group">
            <label class="control-label col-sm-5" for="radio">Select your sending mode</label>
            <div class="col-sm-10">
              <input type="radio" name="radio" id="ma_radio" value="Production" required> Production
              <label class="control-label col-sm-10" for="ma_radio"></label>
            </div>
            <div class="col-sm-10">
              <input type="radio" name="radio" id="ma_radio2" value="Pre - Production" required> Pre - Production
              <label class="control-label col-sm-10" for="ma_radio2"></label>
            </div>
            <div class="col-sm-10">
              <input type="radio" name="radio" id="ma_radio3" value="Recette" required> Recette
              <label class="control-label col-sm-10" for="ma_radio3"></label>
            </div>       
          </div>
          <!--<p><b>Results:</b><span id="results"></span></p>-->

          <!-- Bouton SEND -->
         <button type="submit" class="btn btn-default">Submit</button>

        </div>

        <!-- Réponse XML après le renseignement des champs -->
        <div class="col-md-6">
          <div class="form-group">  
            <label class="control-label col-sm-3" for="request">Request</label>
              <div class="col-sm-12">
                <textarea id="requestxml" rows="20" cols="100" class="form-control"></textarea>
              </div>
          </div>
        </div>

      </form>

    </div>

  </body>

</html>

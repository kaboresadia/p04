<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" type="text/css" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  </head>
  <body>
    <form action="enregistrement.php" method="post">
    <div class="mb-3">
  <label for="nom" class="form-label">Nom</label>
  <input type="text" class="form-control" id="nom" name="nom" required>
</div>
<div class="mb-3">
  <label for="prenom" class="form-label">Prénom</label>
  <input type="text" class="form-control" id="prenom" name="prenom" required>
</div>
<div class="mb-3">
  <label for="date_de_naissance" class="form-label">Date de naissance</label>
  <input type="date" class="form-control" id="prenom" name="date_de_naissance" required>
</div>
<div class="d-grid gap-2">
  <input class="btn btn-primary" type="submit" value="Enregistrer">
</div>
      
    </form>
  </body>
</html>

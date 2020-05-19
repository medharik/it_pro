<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <form action="store.php" method="post">
          <div class="form-group">
            <label for="nom">Nom: </label>
            <input type="text" class="form-control" name="nom" aria-describedby="emailHelp" placeholder="Tapez nom" />
          </div>
          <div class="form-group">
            <label for="nom">Prenom: </label>
            <input type="text" class="form-control" name="prenom" aria-describedby="emailHelp" placeholder="Tapez penom" />
          </div>
          <div class="form-group">
            <label for="nom">Email: </label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Tapez Email" />
          </div>
          <div class="form-group">
            <label for="nom">Adresse: </label>
            <textarea put class="form-control" name="adresse" aria-describedby="emailHelp" placeholder="Tapez adresse">
</textarea>
          </div>
          <div class="form-group">
            <label for="nom">Tel: </label>
            <input type="tel" class="form-control" name="tel" aria-describedby="emailHelp" placeholder="Tapez tel" />
          </div>
          <div class="form-group">
            <label for="nom">User_name: </label>
            <input type="text" class="form-control" name="user_name" aria-describedby="emailHelp" placeholder="" />
          </div>
          <div class="form-group">
            <label for="nom">Passeword: </label>
            <input type="passeword" class="form-control" name="passeword" aria-describedby="emailHelp" placeholder="" />
          </div>
          <div class="form-group">
            <label for="date_creation">Date de creation: </label>
            <input type="date" name="date_creation" name="date_creation" type="date" class="form_control">
          </div>
          <button type="submit" class="btn btn-primary">Ajouter client</button>

        </form>
      </div>
    </div>
  </div>





  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container">
        <div class="row">
            <h1>Se connecter</h1>
          <div class="col-md-6 mx-auto shadow p-2">
            <div class="alert alert-danger"></div>
            <form action="store.php" method="post">
              <div class="form-group">
                <label for="nom">Nom: </label>
                <input
                  type="nom"
                  class="form-control"
                  id="nom"
                  aria-describedby="emailHelp"
                  placeholder="Enter nom"
                />
                <small></small>
              </div>
              <div class="form-group">
                <label for="prenom">Prenom : </label>
                <input
                  type="prenom"
                  class="form-control"
                  id="prenom"
                  aria-describedby="emailHelp"
                  placeholder="Enter prenom"
                />
                <small></small>
              </div>
              <div class="form-group">
                <label for="email">Email </label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                  placeholder="Entre email"
                />
                <small></small>
              </div>
        
              <button type="button" class="btn btn-primary">Valider</button>
            </form>
          </div>
        </div>
      </div>





      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<script>
    $(document).ready(function() {
  $(".alert-danger").hide();

  $(document).on("click", "button", function() {
    var erreur = "";
    let modelEMail = /[a-z._]{1,}[0-9]{0,}@gmail.com/; //regex
    if (!modelEMail.test($("#email").val())) {
      erreur += "Email inavlide<br>";
    }


    if (erreur == "") {
      $("form").submit();
    } else {
      $(".alert-danger")
        .show()
        .html(erreur);
    }
  });
});



</script>






</html>
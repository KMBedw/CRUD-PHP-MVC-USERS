<!DOCTYPE html>
<html>
<head>
  <title>Éditer un utilisateur</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
  <h1>Éditer un utilisateur</h1>
  <a href="index.php" class="btn btn-secondary mb-3">Retour à la liste des utilisateurs</a>

  <form action="index.php?action=updateUser" method="POST">
    <input type="hidden" name="id" value="<?= $user['id'] ?>" />
    <div class="form-group">
      <label for="username">Nom d'utilisateur:</label>
      <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

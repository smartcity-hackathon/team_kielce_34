<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="">

    <title>Logowanie | WhereToGo</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>

    <div id="id01" class="modal">
      
      <form class="modal-content animate" action="/api_methods/login.php" method="POST">
        <div class="imgcontainer">
          <a href="/"><img src="img/logo.png" width="40%" height="40%" alt="logo"/></a>
        </div>

        <div class="container">
          <label for="uname"><b>Nazwa użytkownika</b></label>
          <input type="text" placeholder="Wpisz nazwę użytkownika" name="uname" <?= isset($_SESSION['un_rem']) ? 'value="'. $_SESSION['un_rem'] .'"' : "" ?> required>

          <label for="psw"><b>Hasło</b></label>
          <input type="password" placeholder="Wpisz hasło" name="psw" required>
        </form>
        <form method="get" action="/user-profile.php">
          <button type="submit">Zaloguj</button>
        </form>
      <form>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Pamiętaj mnie przy następnym logowaniu
          </label>
        </div>
        <div class="container" style="background-color:#f1f1f1">
          <span class="psw">Zapomniałeś <a href="#">hasła?</a></span>
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

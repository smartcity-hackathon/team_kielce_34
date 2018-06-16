
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="">

    <title>Rejestracja | WhereToGo</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>

    <div id="id01" class="modal">
      
      <form class="modal-content animate" action="api_methods/register.php" method="POST">
        <div class="imgcontainer">
          <a href="/"><img src="img/logo.png" width="40%" height="40%" alt="logo"/></a>
        </div>

        <div class="container">
          <label for="uname"><b>Nazwa użytkownika<font color="red">*</font></b></label>
          <input type="text" placeholder="Wpisz nazwę użytkownika" name="uname" required>

          <label for="psw"><b>Hasło<font color="red">*</font></b></label>
          <input type="password" placeholder="Wpisz hasło" name="psw" required id="psw">

          <label for="confirmpsw"><b>Potwierdź hasło<font color="red">*</font></b></label>
          <input type="password" placeholder="Wpisz swoje hasło ponownie" name="confirmpsw" id="confirmpsw" required>
          <span id="message"></span>

          <label for="email"><b>Wpisz e-mail<font color="red">*</font></b></label>
          <input type="text" placeholder="Wpisz swój adres e-mail" name="email" required>

          <label for="confirmemail"><b>Potwierdź e-mail<font color="red">*</font></b></label>
          <input type="text" placeholder="Wpisz swój adres e-mail ponownie." name="confirmemail" required>
            
          <button type="submit" name="register" onsubmit="false">Zarejestruj</button>
          <label>
            <input type="checkbox" name="remember" required> Rejestrując konto akceptuję <a href="#">regulamin</a> serwisu.<br>
          </label>
          <p>
            <font color="red">*</font> - Wymagane pola.
          </p>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          
        </div>
      </form>
    </div>
    <script>
        var submit = document.getElementById('submit');
        

          function (function() {
          if(document.getElementById('psw').value ==
            document.getElementById('confirmpsw').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Hasła pasują do siebie';
          } 
          else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Hasła nie pasują do siebie!';
          
        })
    </script>
    <script>
        function check_pass() {
          if (document.getElementById('psw').value ==
                  document.getElementById('confirmpsw').value) {
              document.getElementById('submit').disabled = false;
          } 
          else {
              document.getElementById('submit').disabled = true;
          }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </body>
</html>

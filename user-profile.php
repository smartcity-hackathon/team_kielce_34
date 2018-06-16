
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="">

    <title>Profil użytkownika | WhereToGo</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><a href="/"><img src="img/logo.png" height="45" width="200"></a></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="index.php">Home</a></li>
				  <li><a href="wyszukiwarka.php">Wyszukiwarka</a></li>
                  <li><a href="about-login.php">O nas</a></li>
                  <li><a href="contact-login.php">Kontakt</a></li>
                  <li class="active"><a href="user-profile.php">Profil: <b>Paweł</b></a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover animatefadeinfast" style="position: relative; top:150px;">
            <h1 class="cover-heading">Zmień swoje preferencje <b>Paweł</b></h1>
            <p class="lead">Na ich podstawie zaproponujemy Ci ciekawe miejsca.</p>
            <p class="lead"></p>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Historia</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Gastronomia</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Przyroda</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                <label class="form-check-label" for="inlineCheckbox4">Motoryzacja</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                <label class="form-check-label" for="inlineCheckbox5">Nauka</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                <label class="form-check-label" for="inlineCheckbox6">Imprezy</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">
                <label class="form-check-label" for="inlineCheckbox7">Wydarzenia</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="option8">
                <label class="form-check-label" for="inlineCheckbox8">Sklepy</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="option9">
                <label class="form-check-label" for="inlineCheckbox9">Turystyka</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="option10">
                <label class="form-check-label" for="inlineCheckbox10">Zabytki</label>
              </div>
            <h1 class="cover-heading">Twoje punkty</b></h1>
            <p class="lead">Zdobyte punkty podczas zwiedzania.</p>
            <h2 class="cover-heading" style="color:gold;">15</b></h3>

            <div id="tabuble" class="container" style="position:relative; top:20px;">
              <h2>Miejsca które już odwiedziłeś w tym miesiącu</h2>
              <p></p>            
              <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th>Nazwa</th>
                    <th>Kategoria</th>
                    <th>Punkty</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Targi Kielce</td>
                    <td>Imprezy, Wydarzenia</td>
                    <td><font color="gold">15</font></td>
                  </tr>
                </tbody>
              </table>
            </div>

            </div>
            <p class="lead"></p>
            <p class="lead"></p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p></p>
            </div>
          </div>

        </div>

      </div>

    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

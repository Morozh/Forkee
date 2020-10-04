<?php 
  require "includes/db.php";
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSS -->
    <link rel="stylesheet" href="libs/slick/slick.css"/>
    <link rel="stylesheet" href="libs/slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <meta name="description" content="Forkee">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Forkee</title>

  </head>
  <body>

    <!-- Page Wrap -->
    <main class="page-wrap">

      <!-- Header -->
      <header class="header">
        <div class="container">
          <nav class="nav">
            <div class="nav__logo"><img class="img-responsive" src="../app/img/main-logo.png" alt=""/></div>
            <div class="nav__buttons">
              <input class="btn black" type="button" value="sign in" />
              <input class="btn" type="button" value="sign up" onlick="openModal()" />
            </div>
          </nav>
          <div class="content">
            <h1 class="content-title">
              ANYTHING YOU NEED, <br />
              WE’VE GOT YOU COVERED.
            </h1>
            <h2 class="content-subtitle">
              classified advertissements website
            </h2>
            <div class="content-seach-input">
              <div class="content-search">
                <div class="search-select">
                  <select>
                    <option>CITY</option>
                    <option>Москва</option>
                    <option>Екатеринбург</option>
                  </select>
                </div>
                <div class="search-input">
                  <input class="search" type="search" placeholder="FIND VACANCY" />
                </div>
              </div>
              <input class="btn" type="button" value="search"  />
            </div>
          </div>
        </div>
      </header>

      <!-- Footer -->
      <footer class="footer">
        <div class="container">
          <div class="footer-copy">
            &#169&nbsp;Forkee studio
          </div>
        </div>
      </footer>

    </main>

    <!-- JavaScript -->
    <script src="../app/libs/jquery-3.5.1.min.js"></script>
    <script src="../app/libs/slick/slick.min.js"></script>
    <script src="../app/js/script.js"></script>
  </body>
</html>
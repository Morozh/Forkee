<?php 
  require "includes/db.php";

  $host = 'localhost';
  $user = 'root'; 
  $password = ''; 
  $db_name = 'forkee'; 
  $link = mysqli_connect($host, $user, $password, $db_name);
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
    <link rel="stylesheet" href="css/vacancy.css">

    <meta name="description" content="Forkee">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Forkee</title>

  </head>
  <body>

  <!-- Page Wrap -->
  <main class="page-wrap">
    <!-- Header -->
    <header id="header" class="header">
      <div class="header-nav">
        <div class="container">
          <nav class="nav">
            <div class="nav__logo">
              <img class="img-responsive" src="../app/img/main-logo.svg" alt=""/>
            </div>
            <div class="nav__menu">
              <ul class="menu">
                <li class="menu-item"><a href="../app/index.php">HOME</a></li>
                <li class="menu-item"><a style="color: #00C1DA;" href="../app/vacancy.php">VACANCY</a></li>
                <li class="menu-item"><a href="#about-us">ABOUT US</a></li>
                <li class="menu-item"><a href="#expertise">EXPERTISE</a></li>
                <li class="menu-item"><a href="#our-team">OUR TEAM</a></li>
                <li class="menu-item"><a href="#contact">CONTACT</a></li>
              </ul>
              <?php if( isset($_SESSION['logged_user'])) : ?>
                <div class="profile-dropdown">
                  <img src="../app/img/user.svg" width="24" height="24" alt="Profile" />
                  <div class="hidden-block">
                    <?php echo '<span class="logged-name">' .$_SESSION['logged_user']->surname . ' ' . $_SESSION['logged_user']->name. '</span>' ?>
                    <input style="border-radius: 4px;" class="btn" type="button" value="logout" onclick="window.location.href = '/app/includes/logout.php'" />
                  </div>
                </div>
              <?php else: ?>
                <input class="btn popup-log-open" type="button" value="sign in" />
                <input class="btn popup-reg-open" type="button" value="sign up" />
              <?php endif; ?>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <div class="search-block">
      <div class="container">
        <div class="search-box-bg">
          <div class="total-vac">
            <span class="total-vac__item">
            Found
              <?php
              $sql = mysqli_query($link, 'SELECT COUNT(*) FROM `vacancies`');
              $result = mysqli_fetch_array($sql);
                echo '<span style="color: #00C1DA;">'.$result[0].'</span>';
              ?>
              jobs
            </span>
          </div>
          <div class="search-vac">
            <div class="search-vac__input">
              <input class="v-input" type="search" placeholder="Profession, position or vacancy" />
            </div>
            <div class="search-vac__btn">
              <input class="v-btn" type="submit" value="SEARCH" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Job Cards -->
    <section class="section">
      <div class="container">
        <div class="filters-box">
          Фильтры
        </div>
        <div class="card-box-container">
          <div class="card-box-item">
            <div class="card-box-row">
              <span class="card-box-row__title">Front-end developer</span>
              <span class="card-box-row__price">5000$</span>
            </div>
          </div>
          <div class="card-box-item">
            <div class="card-box-row">
              <span class="card-box-row__title">Front-end developer</span>
              <span class="card-box-row__price">5000$</span>
            </div>
          </div>
          <div class="card-box-item">
            <div class="card-box-row">
              <span class="card-box-row__title">Front-end developer</span>
              <span class="card-box-row__price">5000$</span>
            </div>
          </div>
          <div class="card-box-item">
            <div class="card-box-row">
              <span class="card-box-row__title">Front-end developer</span>
              <span class="card-box-row__price">5000$</span>
            </div>
          </div>
          <div class="card-box-item">
            <div class="card-box-row">
              <span class="card-box-row__title">Front-end developer</span>
              <span class="card-box-row__price">5000$</span>
            </div>
          </div>
          <div class="card-box-item">
            <div class="card-box-row">
              <span class="card-box-row__title">Front-end developer</span>
              <span class="card-box-row__price">5000$</span>
            </div>
          </div>
          <div class="card-box-item">
            <div class="card-box-row">
              <span class="card-box-row__title">Front-end developer</span>
              <span class="card-box-row__price">5000$</span>
            </div>
          </div>
          <div class="card-box-item">
            <div class="card-box-row">
              <span class="card-box-row__title">Front-end developer</span>
              <span class="card-box-row__price">5000$</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Copy -->
    <div class="copy">
      <div class="container" style="display: flex; align-items: center;">
        <span class="copy-text">
          © 2020 Forkee team.
        </span>
      </div>
    </div>

  </main>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script src="libs/jquery-3.5.1.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
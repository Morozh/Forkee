<?php 
  require "includes/db.php";

  $host = 'localhost';
  $user = 'root'; 
  $password = ''; //index.php 6 string, db.php 4 string
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
                <li class="menu-item"><a href="../app/index.php#about-us">ABOUT US</a></li>
                <li class="menu-item"><a href="../app/index.php#expertise">EXPERTISE</a></li>
                <li class="menu-item"><a href="../app/index.php#our-team">OUR TEAM</a></li>
                <li class="menu-item"><a href="../app/index.php#contact">CONTACT</a></li>
              </ul>
              <?php if( isset($_SESSION['logged_user'])) : ?>
                <div class="profile-dropdown">
                  <img src="../app/img/user.svg" width="24" height="24" alt="Profile" />
                  <div class="hidden-block">
                    <?php echo '<span class="logged-name">' .$_SESSION['logged_user']->surname . ' ' . $_SESSION['logged_user']->name. '</span>' ?>
                    <input style="border-radius: 4px; box-shadow: none; font-weight: 400; margin: 10px 0;" class="btn" type="button" value="publish" onclick="window.location.href = '/app/new-vacancy.php'" />
                    <input style="border-radius: 4px; box-shadow: none; font-weight: 400;" class="btn" type="button" value="logout" onclick="window.location.href = '/app/includes/logout.php'" />
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
          <form method = "get" action ="main_search.php"> 
            <div class="search-vac">
              <div class="search-vac__input">
                <input class="v-input" type="search" placeholder="Profession, position or vacancy" name ="search"/>
              </div>
              <div class="search-vac__btn">
                <input class="v-btn" type="submit" value="SEARCH" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Section Job Cards -->
    <section class="section">
      <div id="content-container" class="container">
        <div id="filter" class="filters-box">
          <div class="filter-row">
            <span class="filter-row__title">Income level</span>
            <ul class="filter-ul">
              <li class="filter-li">from 200$</li>
              <li class="filter-li">from 350$</li>
              <li class="filter-li">from 450$</li>
              <li class="filter-li">from 500$</li>
              <li class="filter-li">from +1000$</li>
            </ul>
          </div>
          <div class="filter-row">
            <span class="filter-row__title">Region</span>
            <ul class="filter-ul">
              <li class="filter-li">Moscow</li>
              <li class="filter-li">Perm Krai</li>
              <li class="filter-li">Russia</li>
              <li class="filter-li">And more 41</li>
            </ul>
          </div>
          <div class="filter-row">
            <span class="filter-row__title">Prof area</span>
            <ul class="filter-ul">
              <li class="filter-li">IT</li>
              <li class="filter-li">Early career</li>
              <li class="filter-li">Admin</li>
              <li class="filter-li">And more 22</li>
            </ul>
          </div>
          <div class="filter-row">
            <span class="filter-row__title">Company industry</span>
          </div>
          <div class="filter-row">
            <span class="filter-row__title">Work schedule</span>
          </div>
          <div class="filter-row">
            <span class="filter-row__title">Type of employment</span>
          </div>
          <div class="filter-row">
            <span class="filter-row__title">Exceptions</span>
          </div>
        </div>
        <div id="content" class="card-box-container">
          <?php
            $sql = mysqli_query($link, 'SELECT va.title_vacancy, va.salary, en.title, ci.title_city, va.remote_work, va.phone_number, va.description, va.date FROM vacancies va, enterprises en, cities ci WHERE va.enterprise = en.id_enterprise and va.city = ci.id_city and active is true');
            while ($result = mysqli_fetch_array($sql)) {
              echo 
              '<div class="card-box-item">'.
                '<div class="card-box-row">'.
                  "<span class='card-box-row__title'>{$result['title_vacancy']}</span>".
                  "<span class='card-box-row__price'>{$result['salary']}$</span>".
                '</div>'.
                '<div class="card-box-row">'.
                  "<span class='card-box-row__phone'>Organization: {$result['title']}</span>".
                '</div>'.
                '<div class="card-box-row">'.
                  "<span class='card-box-row__city'>City: {$result['title_city']}</span>".
                '</div>'.
                '<div class="card-box-row">'.
                  "<span class='card-box-row__phone'>Phone: + {$result['phone_number']} </span>".
                '</div>'.
                '<div class="card-box-row">'.
                  "<p class='card-box-row__description'>{$result['description']}</p>".
                '</div>'.
                "<div class='p-bottom'>
                  <a class='card-box-row__respond' href=''>Respond</a>
                  <span class='card-box-row__date'>{$result['date']}</span>
                </div>".
              '</div>';
            }
          ?>
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
    <script src="libs/jquery-3.5.1.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
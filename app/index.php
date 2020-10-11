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
    <header id="header" class="header">
      <div class="header-nav">
        <div class="container">
          <nav class="nav">
            <div class="nav__logo">
              <img class="img-responsive" src="../app/img/main-logo.svg" alt=""/>
            </div>
            <div class="nav__menu">
              <ul class="menu">
                <li class="menu-item"><a href="#">HOME</a></li>
                <li class="menu-item"><a href="#about-us">ABOUT US</a></li>
                <li class="menu-item"><a href="#our-team">OUR TEAM</a></li>
                <li class="menu-item"><a href="#contact">CONTACT</a></li>
              </ul>
              <input class="btn" type="button" value="sign up" onlick="openModal()" />
            </div>
          </nav>
        </div>
      </div>
      <div class="content">
        <div class="container">
          <h1 class="content-title">
            FORKEE
          </h1>
          <span class="content-subtitle">
            EASY TO FIND JOB
          </span>
          <div class="content-seach-input">
            <div class="content-search">
              <div class="search-select">
                Москва
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

    <!-- Section About Us -->
    <section id="about-us" class="section">
      <div class="container">
        <div class="section-info">
          <div class="section__title">
            About Us
          </div>
          <div class="section__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium commodi totam culpa, dolorum asperiores iusto<br /> 
            quidem, nesciunt hic eaque blanditiis enim, id maiores nam nobis dignissimos aliquam ad minus nisi. In, fuga blanditiis non<br /> 
            cum cupiditate dolore, accusantium odio doloremque quibusdam dignissimos nemo sed nisi, similique, mollitia et! Autem<br /> 
            laborum sint tenetur, earum facere veniam?<br />
            <br />
            Sunt fugiat veniam consectetur soluta quia ex tempora quaerat, perferendis! Itaque a praesentium saepe ex distinctio<br />
            aliquid quis laborum sit, porro dolor odio, iste eos laboriosam dolorum maiores harum reiciendis vitae doloribus illum<br />
            voluptatibus nobis maxime assumenda ipsam tempora fugiat. Perspiciatis quibusdam hic cum tempore.
          </div>
        </div>
      </div>
    </section>

    <!-- Section Our Expertise -->
    <section class="section">
      <div class="container">
        <div class="section-info-team">
          <div class="section__title">
            Our Expertise
          </div>
        </div>
      </div>
    </section>

    <footer id="contact" class="footer">
      <div class="container">
        <div class="footer-info">
          <div class="info-logo">
            <img class="img-responsive" src="../app/img/main-logo.svg" alt=""/>
          </div>
          <nav class="social">
            <ul class="social-menu">
              <li class="menu-item"><a href="#">Facebook</a></li>
              <li class="menu-item"><a href="#">Twitter</a></li>
              <li class="menu-item"><a href="#">Google+</a></li>
              <li class="menu-item"><a href="#">Behance</a></li>
              <li class="menu-item"><a href="#">Dribbble</a></li>
              <li class="menu-item"><a href="#">Instagram</a></li>
            </ul>
          </nav>
          <div class="info-text">
            City Perm, str. Genkelya, 7а<br />
            +7&nbsp;(342)&nbsp;239&ndash;67&ndash;97<br/>
            college@psu.ru
          </div>
          <div class="to-top-arrow">
            <img id="topArrow" class="img-responsive" src="../app/img/angle-up.svg" alt=""/>
          </div>
        </div>
      </div>
    </footer>

    <div class="copy">
      <div class="container">
        <span class="copy-text">
          @2020 Forkee theme
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
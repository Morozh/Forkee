<?php 
  require "includes/db.php";

  $host = 'localhost';
  $user = 'root'; 
  $password = ''; //vacancy.php 6 string, db.php 4 string
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
                <li class="menu-item"><a href="#header">HOME</a></li>
                <?php if( isset($_SESSION['logged_user'])) : ?>
                  <li class="menu-item"><a style="color: #00C1DA;" href="../app/vacancy.php">VACANCY</a></li>
                <?php endif; ?>
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
                    <input style="border-radius: 4px; box-shadow: none; font-weight: 400; margin: 10px 0;" class="btn popup-pub-open" type="button" value="publish" />
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
      <div class="content">
        <div class="container">
          <h1 class="content-title">
            FORKEE
          </h1>
          <span class="content-subtitle">
            EASY TO FIND JOB
          </span>
          <form method="get" action="vacancy.php">
            <div class="content-seach-input">
              <div class="content-search">
                <div class="search-select">
                  <div class="search-box" style="margin-top: 3px">
                    <a href="#" class="js-link">Choose city</a>
                    <ul class="js-dropdown-list">
                      <?php 
                        $sql = mysqli_query($link, 'SELECT * FROM `cities`');
                        while($result = mysqli_fetch_array($sql)) {
                          echo "<li class='js-dropdown-option'>{$result['title_city']}</li>";
                        };
                      ?>
                    </ul>
                  </div>
                </div>
                <input type="hidden" name="city" />
                <div class="search-input">
                  <input class="search" type="search" placeholder="FIND VACANCY" name="search" />
                </div>
              </div>
              <input class="btn" type="submit" value="search"  />
            </div>
          </form>
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
            Greetings! We team forever young developers. To make a website look professional yet unconventional is not easy  <br /> 
            but our company makes it look effortless. From the brand showcase to the photo display of the workplace, this bar-themed<br /> 
            website does a good job of establishing brand identity and promoting company reputation.<br /> 
            <br />
            This is a perfect example of a full stack web developer portfolio, which presents  both the author’s skills and personality. <br />
            The entire site looks like a designer’s little green world. Sean also helps others build personal websites. <br />
            Additionally, it has a lot of personalized elements, making it more eye-catching.
          </div>
        </div>
      </div>
    </section>

    <!-- Section Our Expertise -->
    <section id="expertise" class="section">
      <div class="container">
        <div class="section-info-team">
          <div class="section__title">
            Our Expertise
          </div>
          <div class="info-team">
            <div class="info-team__percent">
              <div class="percent-item">
                <span class="item-title">VACANCY</span>
                <span class="item-percent">90%</span>
              </div>
              <div class="percent-item">
                <span class="item-title">DESIGN</span>
                <span class="item-percent">80%</span>
              </div>
              <div class="percent-item">
                <span class="item-title">DEVELOPMENT</span>
                <span class="item-percent">85%</span>
              </div>
            </div>
            <div class="info-team__text">
              It will not be difficult to conduct an examination of the vacancy, provided that this is a familiar occupation for you. But if <br /> 
              you are not familiar with this magic phrase and have no idea what it is, we recommend that you familiarize yourself <br />
              with the job examination procedure.<br />
              <br />
              Portrait of an ideal job the First step is to determine what kind of job, in what area and company, and in what city you want to get. 
              If you already perferendis! Itaque a praesentium saepe ex distinctio aliquid quis. know what will happen to you and your career in 3,5,10 years, 
              then go straight to the next Chapter.And here I turn to those,<br /> 
            </div>
          </div>
          <div class="info-team-services">
            <div class="service">
              <div class="service-title">VACANCY</div>
              <div class="service-text">All of us sooner or later face a job search.<br />
                Someone is looking for a suitable internship <br />
                after University.
              </div>
            </div>
            <div class="service">
              <div class="service-title">WEB DEVELOPMENT</div>
              <div class="service-text">A more comprehensive list of tasks<br />
                to which Web development commonly<br />
                include Web engineering, Web design<br />
                Web content development.
              </div>
            </div>
            <div class="service">
              <div class="service-title">GRAPHIC DESIGN</div>
              <div class="service-text">Is the process of visual communication through the use <br />
                of typography, photography, iconography and illustration.The <br />
                field considered a subset of visual communication and<br />
                communication design.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Our Team -->
    <section id="our-team" class="section">
      <div class="container">
        <div class="section-info-team">
          <div class="section__title">
            Our Team
          </div>
          <div class="section-team-box">
            <div class="team-box">
              <img src="../app/img/our-team-akop.png" alt="Photo" />
              <span class="team-box__title">RUSLAN AKOPYAN</span>
              <span class="team-box__subtitle">Designer & Developer</span>
            </div>
            <div class="team-box">
              <img src="../app/img/our-team-bar.png" alt="Photo" />
              <span class="team-box__title">DANIL BARABOSHKIN</span>
              <span class="team-box__subtitle">Analytics</span>
            </div>
            <div class="team-box">
              <img src="../app/img/our-team-pas.png" alt="Photo" />
              <span class="team-box__title">DANIIL PASTOROV</span>
              <span class="team-box__subtitle">Testing</span>
            </div>
          <div>
        </div>
      </div>
    </section>

    <!-- Footer -->
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

    <!-- Footer Copy -->
    <div class="copy">
      <div class="container">
        <span class="copy-text">
          © 2020 Forkee team.
        </span>
      </div>
    </div>
  
    <!-- Modals -->
    <!-- Registration Modal -->
    <div class="popup-fade popup-reg">
      <form id="reg-form" class="popup" action="includes/reg.php" method="post">
        <a class="popup-close" href="#">&times;</a>
        <h2 class="form-title">Forkee</h2>
        <div class="row">
          <div class="col">
            <label class="form-label" for="fname">First name:</label>
            <input id="fname" class="form-input" type="text" placeholder="First name"  name = "fname"/>
          </div>
          <div class="col">
            <label class="form-label" for="lname">Last name:</label>
            <input id="lname" class="form-input" type="text" placeholder="Last name" name = "lname" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Email: </label>
            <input id="user_email" class="form-input full-w" type="email" placeholder="Email" name = "user_email"/>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Password: </label>
            <input id="psword" class="form-input full-w" type="password" placeholder="Password" name = "psword" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Confirm Password: </label>
            <input id="c_psword" class="form-input full-w" type="password" placeholder="Confirm Password" name="c_psword" />
          </div>
        </div>
        <div class="row">
          <input id="reg-submit" type="submit" class="btn" value="Sign Up" name="signup" />
        </div>
      </form>		
    </div>

    <!-- Authorization modal -->
    <div class="popup-fade popup-log">
      <form id="log-form" class="popup v-center" action="includes/auth.php" method="post">
        <a class="popup-close" href="#">&times;</a>
        <h2 class="form-title">Forkee</h2>
        <div class="row">
          <div class="col">
            <label class="form-label">Email: </label>
            <input id="user_email" class="form-input full-w" type="email" placeholder="Email"  name = "user_email"/>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Password: </label>
            <input id="psword" class="form-input full-w" type="password" placeholder="Password" name = "psword"/>
          </div>
        </div>
        <div class="row">
          <input id="reg-submit" type="submit" class="btn" value="Sign In"  name="signin"/>
        </div>
      </form>		
    </div>

    <!-- Publish new vacancy -->
    <div class="popup-fade popup-pub">
      <form id="reg-form" class="popup" action="" method="post" style="top: 0 !important;">
        <a class="popup-close" href="#">&times;</a>
        <h2 class="form-title">Publish your vacancy</h2>
        <div class="row">
          <div class="col">
            <label class="form-label">Vacancy title: </label>
            <input id="user_email" class="form-input full-w" type="email" placeholder="Enter vacancy title" name = "user_email"/>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Enterprise: </label>
            <input id="psword" class="form-input full-w" type="password" placeholder="Enter your company name" name="psword" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">City: </label>
            <input id="c_psword" class="form-input full-w" type="password" placeholder="Choose city" name="c_psword" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Phone: </label>
            <input id="psword" class="form-input full-w" type="password" placeholder="Enter your phone +7" name="psword"/>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Description: </label>
            <textarea id="text" class="text-description" type="password" placeholder="Vacancy description" name="psword" ></textarea>
          </div>
        </div>
        <div class="row">
          <input id="reg-submit" type="submit" class="btn" value="Publish" name="publish" />
        </div>
      </form>		
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

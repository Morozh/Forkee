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
                <li class="menu-item"><a href="#header">HOME</a></li>
                <li class="menu-item"><a href="#about-us">ABOUT US</a></li>
                <li class="menu-item"><a href="#expertise">EXPERTISE</a></li>
                <li class="menu-item"><a href="#our-team">OUR TEAM</a></li>
                <li class="menu-item"><a href="#contact">CONTACT</a></li>
              </ul>
              <input class="btn popup-log-open" type="button" value="sign in" />
              <input class="btn popup-reg-open" type="button" value="sign up" />
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
               <form method = "POST" action = "/chat">
                  <input class="search" type="text" name="text"  placeholder="FIND VACANCY" />
                </form>
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
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium commodi totam culpa, dolorum asperiores iusto<br /> 
              quidem, nesciunt hic eaque blanditiis enim, id maiores nam nobis dignissimos aliquam ad minus nisi.<br />
              <br />
              Autem laborum sint tenetur, earum facere veniam? Sunt fugiat veniam consectetur soluta quia ex tempora quaerat,<br /> 
              perferendis! Itaque a praesentium saepe ex distinctio aliquid quis.
            </div>
          </div>
          <div class="info-team-services">
            <div class="service">
              <div class="service-title">VACANCY</div>
              <div class="service-text">Lorem Ipsum Proin gravida nibh vel<br />
                velit auctor aliquet. Aenean sollicitudin, lorem<br />
                quis bibendum auctor, nisi elit consequat<br />
                ipsum.
              </div>
            </div>
            <div class="service">
              <div class="service-title">WEB DEVELOPMENT</div>
              <div class="service-text">Lorem Ipsum Proin gravida nibh vel<br />
                velit auctor aliquet. Aenean sollicitudin, lorem<br />
                quis bibendum auctor, nisi elit consequat<br />
                ipsum.
              </div>
            </div>
            <div class="service">
              <div class="service-title">GRAPHIC DESIGN</div>
              <div class="service-text">Lorem Ipsum Proin gravida nibh vel<br />
                velit auctor aliquet. Aenean sollicitudin, lorem<br />
                quis bibendum auctor, nisi elit consequat<br />
                ipsum.
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
          © 2020 Forkee theme
        </span>
      </div>
    </div>

    <!-- Modals -->
    <div class="popup-fade popup-reg">
      <form id="reg-form" class="popup" action="" method="post">
        <a class="popup-close" href="#">&times;</a>
        <h2 class="form-title">Forkee</h2>
        <div class="row">
          <div class="col">
            <label class="form-label" for="fname">First name:</label>
            <input id="fname" class="form-input" type="text" placeholder="First name" />
          </div>
          <div class="col">
            <label class="form-label" for="lname">Last name:</label>
            <input id="lname" class="form-input" type="text" placeholder="Last name" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Email: </label>
            <input id="user_email" class="form-input full-w" type="email" placeholder="Email" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Password: </label>
            <input id="psword" class="form-input full-w" type="password" placeholder="Password" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Confirm Password: </label>
            <input id="c_psword" class="form-input full-w" type="password" placeholder="Confirm Password" />
          </div>
        </div>
        <div class="row">
          <input id="reg-submit" type="submit" class="btn" value="Sign Up" />
          <span class="form-copy">Already registered?<a href="#"> Sign In</a></span>
        </div>
      </form>		
    </div>

    <div class="popup-fade popup-log">
      <form id="log-form" class="popup v-center" action="" method="post">
        <a class="popup-close" href="#">&times;</a>
        <h2 class="form-title">Forkee</h2>
        <div class="row">
          <div class="col">
            <label class="form-label">Email: </label>
            <input id="user_email" class="form-input full-w" type="email" placeholder="Email" />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label class="form-label">Password: </label>
            <input id="psword" class="form-input full-w" type="password" placeholder="Password" />
          </div>
        </div>
        <div class="row">
          <input id="reg-submit" type="submit" class="btn" value="Sign In" />
          <span class="form-copy">Not registered?<a href="#"> Sign Up</a></span>
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
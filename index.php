<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skillwill Exercise</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <?php 
      $rooms_cards_button = "Booking"
    ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="container__header">
          <img src="assets/images/Logo.svg" alt="" />
          <nav class="navigation">
            <ul class="menu">
              <li>
                <a class="menu__name" href="#first__section">Our Hotel</a>
              </li>
              <li>
                <a class="menu__name" href="page2index.html">Rooms & Rates</a>
              </li>
              <li>
                <a class="menu__name" href="#third__section">Facilities</a>
              </li>
              <li><a class="menu__name" href="#footer">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <main class="main">
      <section class="first__section" id="first__section">
        <div class="first__section-content">
          <h1 class="main__title">WELCOME TO BON HOTEL</h1>
          <p class="desctiption">Good people. Good thinking. Good feeling.</p>
          <a class="button" href="#">EXPLORE</a>
        </div>
      </section>
      <section class="second__section" id="second__section">
        <div class="container">
          <h2 class="second__title">Rooms & Rates</h2>
          <div class="rooms__gallery">
            <div class="rooms__card">
              <img src="assets/images/img-1.png" alt="img-1" />
              <div class="overlay"></div>
              <div class="cards__content">
                <h3 class="card__title">Standard Twin Room</h3>
                <a class="button button-small" href="#"><?php echo $rooms_cards_button ?></a>
              </div>
            </div>
            <div class="rooms__card">
              <img src="assets/images/img-2.png" alt="img-2" />
              <div class="overlay"></div>
              <div class="cards__content">
                <h3 class="card__title">Standard Room</h3>
                <a class="button button-small" href="#"><?php echo $rooms_cards_button ?></a>
              </div>
            </div>
            <div class="rooms__card" id="third__section">
              <img src="assets/images/img-3.png" alt="img-3" />
              <div class="overlay"></div>
              <div class="cards__content">
                <h3 class="card__title">Standard View Room</h3>
                <a class="button button-small" href="#"><?php echo $rooms_cards_button ?></a>
              </div>
            </div>
            <div class="rooms__card">
              <img src="assets/images/img-4.png" alt="img-4" />
              <div class="overlay"></div>
              <div class="cards__content">
                <h3 class="card__title">Deluxe Room</h3>
                <a class="button button-small" href="#"><?php echo $rooms_cards_button ?></a>
              </div>
            </div>
            <div class="rooms__card">
              <img src="assets/images/extra room.jpg" alt="extra" />
              <div class="overlay"></div>
              <div class="cards__content">
                <h3 class="card__title">Extra Room</h3>
                <a class="button button-small" href="#"><?php echo $rooms_cards_button ?></a>
              </div>
            </div>
            <div class="rooms__card">
              <img src="assets/images/Family room.jpg" alt="Family" />
              <div class="overlay"></div>
              <div class="cards__content">
                <h3 class="card__title">Family Room</h3>
                <a class="button button-small" href="#"><?php echo $rooms_cards_button ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="third__section">
        <div class="container">
          <div class="third__section-content">
            <h2 class="second__title">Get a room already!</h2>
            <a class="button" href="page2index.html">Book Now</a>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer" id="footer">
      <div class="container">
        <div class="footer__content">
          <img
            class="footer__img"
            src="assets/images/Footer logo.png"
            alt="footer logo"
          />
          <nav class="navigation__footer">
            <ul class="menu__footer">
              <li><a class="manu__footer-list" href="#">Our Hotels</a></li>
              <li>
                <a class="manu__footer-list" href="#">Our Conferencing</a>
              </li>
              <li><a class="manu__footer-list" href="#">Our Company</a></li>
              <li><a class="manu__footer-list" href="#">Hotel Design</a></li>
              <li><a class="manu__footer-list" href="#">Careers</a></li>
            </ul>
          </nav>
          <div class="copyright__content">
            <p class="copyright" href="#">Bon Hotels Head Office</p>
            <a class="copyright_1" href="tel:+27 434 344 432"
              >+27 434 344 432</a
            >
            <a class="copyright_2" href="mailto:info@bonhotels.com"
              >info@bonhotels.com</a
            >
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>

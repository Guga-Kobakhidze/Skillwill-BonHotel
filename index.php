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
    <?php require "./variables.php"; ?>
  </head>
  <body>
    <?php include "header.html" ?>
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
            <?php
            $i = 0;
            while ($i < 6) {
            echo '<div class="rooms__card">
              <img src="' . $card['imgs'][$i] . '"alt="img-1" />
              <div class="overlay"></div>
              <div class="cards__content">
                <h3 class="card__title">' . $card['card__title'][$i] . ' </h3>
                <a class="button button-small" href="#">Check rates</a>
              </div>
            </div>';
            $i++;
            } 
            ?>
          </div>
        </div>
      </section>
      <section class="third__section">
        <div class="container">
          <div class="third__section-content">
            <h2 class="second__title">Get a room already!</h2>
            <a class="button" href="page2index.php">Book Now</a>
          </div>
        </div>
      </section>
    </main>
    <?php include "footer.html" ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skillwill Exercise</title>
    <link rel="stylesheet"  type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <?php require "./variables.php"; ?>
  </head>
  <body>
    <?php include "header.php" ?>
    <main>
      <section class="First-list" id="First-list">
        <div class="container">
          <h2 class="second__title">Rooms & Rates</h2>
          <div class="news_cards">
            <?php 
           for ($i = 0; $i < 6; $i++) {
          echo  '<div class="news__list">
              <img
                class="news__list-img"
                src="' . $card['imgs'][$i] . '"
                alt="First"
              />
              <div class="news__list-text">
                <h3 class="card__title">' . $card['card__title'][$i] . ' </h3>
                <p class="card__title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                quis urna id arcu mattis por at eros.
                </p>
                <a class="button" href="">' . $card['buttons'][$i] . '</a>
              </div>
            </div>'; 
           }
            ?>
          </div>
        </div>
      </section>
      <section class="second-list">
        <div class="container">
            <h2 class="second__title">Gallery</h2>
            <div class="grid__gallery">
              <?php 
                foreach ($gridImgs as $gridImg) {
                  echo '<img src="' . $gridImg['img'] . '" alt="forth">';
                };
              ?>
            </div>
        </div>
      </section>
    </main>
    <?php include "footer.php" ?>
  </body>
</html>

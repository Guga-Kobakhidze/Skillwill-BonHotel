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
    <?php
      function title($tite1) {
      return $tite1;} ?>
  </head>
  <body>
  <?php require "./variables.php";?>
    <?php include "header.php"; ?>
    <main>
      <section class="First-list" id="First-list">
        <div class="container">
        <h2 class="second__title"><?php
          $result = title('Rooms & Rates');
                  echo $result;
          ?></h2>
          <div class="news_cards">

            <?php 
            cardsForIndex2();
            ?>

          </div>
        </div>
      </section>
      <section class="second-list">
        <div class="container">
            <h2 class="second__title"><?php 
            $result = title('Gallery');
                  echo $result; ?></h2>
            <div class="grid__gallery">

              <?php 
                callGridImgs($gridImgs);
              ?>
              
            </div>
        </div>
      </section>
    </main>
    <?php include "footer.php" ?>
  </body>
</html>

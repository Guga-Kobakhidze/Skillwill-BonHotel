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
    <?php require "./variables.php" ?>
    <?php include "header.php" ?>
  </head>
  <body>
  <?php function title($tite1) {
          return $tite1;}  ?>
    <main class="main">
      <section class="first__section" id="first__section">
        <div class="first__section-content">
          <h1 class="main__title"><?php
          $result = title('BON HOTEL');
                echo $result;
          ?></h1>
          <p class="desctiption">
          <?php
          $result = title('Good people. Good thinking. Good feeling.');
                echo $result;
          ?></p>
          <a class="button" href="#"><?php
          $result = title('EXPLORE');
                echo $result;
          ?></a>
        </div>
      </section>
      <section class="second__section" id="second__section">
        <div class="container">
          <h2 class="second__title"><?php
          $result = title('Rooms & Rates');
                echo $result;
          ?></h2>
          <div class="rooms__gallery">

            <?php
            cardsForIndex($card);
            ?>
            
          </div>
        </div>
      </section>
      <section class="third__section">
        <div class="container">
          <div class="third__section-content">
          <h2 class="second__title"><?php
          $result = title('Get a room already!');
              echo $result;
          ?></h2>
          <a class="button" href="page2index.php"><?php
          $result = title('Book Now');
              echo $result;
          ?></a>
          </div>
        </div>
      </section>
    </main>
    <?php include "./footer.php" ?>
  </body>
</html>

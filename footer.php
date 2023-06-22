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
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body>
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
              <?php 
              
              $i = 0;
              do {
                echo '<li><a class="manu__footer-list" href=" ' . $footerMenus[$i]['link'] . ' ">
                ' . $footerMenus[$i]['name'] . '</a></li>';
                $i++;
              }   
              while ($i < sizeof($footerMenus))
              
              ?>
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

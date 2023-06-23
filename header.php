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
    <?php require "./variables.php"; ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="container__header">
          <img src="assets/images/Logo.svg" alt="" />
          <nav class="navigation">
            <ul class="menu">

          <?php 
                foreach ($menus as $menu) {
                      echo '<li class="menu__name2">
                      <a class="menu__name" href="' . $menu['link'] . '">' . $menu['name'] . '</a>
                      <i class=' . $menu['icon'] . '></i>';
                if (!empty($menu['subcategories'])) {
                      echo '<ul class="Subnav">';
                for ($i = 0; $i < sizeof($menu['subcategories']); $i++) {
                $subcategorie = $menu['subcategories'][$i];   
                      echo '<li><a href="' . $subcategorie['link'] . '">' . $subcategorie['name']. '</a></li>';
                }     echo '</ul>';
                } else {
                      echo "";
                }     echo '</li>';
              }
          ?>

            </ul>
          </nav>
        </div>
      </div>
    </header>
  </body>
</html>

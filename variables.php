<?php


$card = [
    'imgs' => ['assets/images/First.png', 'assets/images/second.png', 'assets/images/third.png', 'assets/images/forth.png',
     'assets/images/extra room.jpg', 'assets/images/Family room.jpg'],
    'card__title' => ["Standard Twin Room", "Standard Room", "Standard View Room", "Deluxe Room", "Extra Room", "Family Room"],
    'buttons'  => ["Check Rates", "Check Rates", "Check Rates", "Check Rates", "Check Rates", "Check Rates",]
];

function cardsForIndex($card) {
    
    $i = 0;
    while ($i < 6) {
        echo '<div class="rooms__card">
        <img src="' . $card['imgs'][$i] . '"alt="img-1" />
        <div class="overlay"></div>
        <div class="cards__content">
        <h3 class="card__title">' . $card['card__title'][$i] . ' </h3>
        <a class="button button-small" href="#">' . $card['buttons'][$i] . '</a>
        </div>
        </div>';
    $i++;
    } 
    return $card;
}; 

function cardsForIndex2() {
    global $card; 
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
};

$gridImgs = [
    'assets/images/First.png', 'assets/images/Second.png', 'assets/images/third.png',
    'assets/images/forth.png', 'assets/images/extra room.jpg', 'assets/images/Family room.jpg'
];

function callGridImgs($gridImgs) {
    for ($i = 0; $i < sizeof($gridImgs); $i++) {
        echo '<img src="' . $gridImgs[$i] . '" alt="Rooms">';
   }
   return $gridImgs;
};

$menus = [
    [
        'link' => '/index.php',
        'name' => 'Our Hotel',
        'icon' => '"bx bx-chevron-down down-icon"',
        'subcategories' => [
            [
                'link' => '/#',
                'name' => 'Hotel Rooms'
            ],
            [
                'link' => '/#',
                'name' => 'Hotel Prices'
            ],
            [
                'link' => '/#',
                'name' => 'Hotel Offers'
            ]
        ],
    ],
    [
        'link' => './page2index.php',
        'name' => 'Rooms & Rates',
        'icon' => '"bx bx-chevron-down down-icon"',
        'subcategories' => [ 
            [    
                'link' => '/#',
                'name' => 'Rate Hotel'
            ],
            [
                'link' => '/#',
                'name' => 'Rate Room'
            ],
            [
                'link' => '',
                'name' => ''
            ]
        ],
    ],
    [
        'link' => '/#',
        'name' => 'Facilities',
        'icon' => '',
        'subcategories' => [],
    ],
    [
        'link' => '/#',
        'name' => 'Contact Us',
        'icon' => '',
        'subcategories' => [],
    ],
];

$footerMenus = [
    [
        'link' => './#',
        'name' => 'Our Hotels'
    ],
    [
        'link' => './#',
        'name' => 'Our Conferencing'
    ],
    [
        'link' => './#',
        'name' => 'Our Company'
    ],
    [
        'link' => './#',
        'name' => 'Hotel Design'
    ],
    [
        'link' => './#',
        'name' => 'Careers'
    ],
];

?>










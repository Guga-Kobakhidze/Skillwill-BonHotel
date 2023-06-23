<?php


$card = [
    'imgs' => ['assets/images/First.png', 'assets/images/second.png', 'assets/images/third.png', 'assets/images/forth.png',
     'assets/images/extra room.jpg', 'assets/images/Family room.jpg'],
    'card__title' => ["Standard Twin Room", "Standard Room", "Standard View Room", "Deluxe Room", "Extra Room", "Family Room"],
    'buttons'  => ["Check Rates", "Check Rates", "Check Rates", "Check Rates", "Check Rates", "Check Rates",]
];

$gridImgs = ['assets/images/First.png', 'assets/images/Second.png','assets/images/third.png',
 'assets/images/forth.png', 'assets/images/extra room.jpg', 'assets/images/Family room.jpg'];

function callGridImgs() {
global $gridImgs;
   for ($i = 0; $i < sizeof($gridImgs); $i++) {
       echo '<img src="' . $gridImgs[$i] . '" alt="Rooms">';
   }
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










<?php


$card = [
    'imgs' => ['assets/images/First.png', 'assets/images/second.png', 'assets/images/third.png', 'assets/images/forth.png',
     'assets/images/extra room.jpg', 'assets/images/Family room.jpg'],
    'card__title' => ["Standard Twin Room", "Standard Room", "Standard View Room", "Deluxe Room", "Extra Room", "Family Room"],
    'buttons'  => ["Check Rates", "Check Rates", "Check Rates", "Check Rates", "Check Rates", "Check Rates",]
];

$gridImgs = [
    [
    'img' => 'assets/images/forth.png'
    ],
     [
    'img' => 'assets/images/Second.png'
    ],
     [
    'img' => 'assets/images/third.png'
    ],
     [
    'img' => 'assets/images/First.png'
    ],
     [
    'img' => 'assets/images/extra room.jpg'
    ],
     [
    'img' => 'assets/images/Family room.jpg'
    ],
];

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










<?php

return [

    "location" => [
        "enabled" => true,
        "data" => [
            "area" => "Gachibowli",
            "city" => "Hyderabad"
        ]
    ],

    "categories" => [
        "enabled" => true,
        "data" => [
            [
                "id" => 1,
                "name" => "Home Services",
                "icon" => "home.png"
            ],
            [
                "id" => 2,
                "name" => "Cleaning",
                "icon" => "cleaning.png"
            ],
            [
                "id" => 3,
                "name" => "Repairs",
                "icon" => "repair.png"
            ]
        ]
    ],

    "banners" => [
        "enabled" => false,
        "data" => [
            [
                "id" => 1,
                "title" => "New Year Offer",
                "image" => "banner1.png"
            ],
            [
                "id" => 2,
                "title" => "50% OFF on Cleaning",
                "image" => "banner2.png"
            ]
        ]
    ],

    "services" => [
        "enabled" => true,
        "data" => [
            [
                "id" => 101,
                "name" => "Home Cleaning",
                "image" => "cleaning.png"
            ],
            [
                "id" => 102,
                "name" => "AC Repair",
                "image" => "ac_repair.png"
            ],
            [
                "id" => 103,
                "name" => "Plumbing",
                "image" => "plumbing.png"
            ]
        ]
    ]
];

<?php
namespace App\Helper;

class Profiles {

    const PROFILE_ADMIN = 1;
    const PROFILE_CONTROL = 2;
    const PROFILE_USER = 3;

    const RULES = [
        self::PROFILE_ADMIN => [
            'home' => [
                'list' => true
            ],
            'addresses' => [
                'list' => true
            ],
            'itineraries' => [
                'list' => true
            ],
            'protocols' => [
                'list' => true
            ],
            'qr' => [
                'list' => true
            ],
            'security' => [
                'list' => true
            ],
            'outfit' => [
                'list' => true
            ],
            'communication' => [
                'list' => true
            ],
            'behavior' => [
                'list' => true
            ],
            'video' => [
                'list' => true
            ],
            'administration' => [
                'list' => true
            ]
            
        ],
        self::PROFILE_CONTROL => [
            'home' => [
                'list' => true
            ]
        ],
        self::PROFILE_USER => [
            'home' => [
                'list' => true
            ]
        ],
        self::PROFILE_USER => [
            'administration' => [
                'list' => true
            ]
        ]

    ];

    public static function validate($control, $action) {

        if ($control != 'login') {
            if (!isset(self::RULES[$_SESSION['user_profile']][$control][$action]) || !self::RULES[$_SESSION['user_profile']][$control][$action]) {
                exit('Invalid permission');
            }
        }
    }
}
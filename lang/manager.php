<?php

require_once './vendor/autoload.php';

use I18n\Language;

$langConfig = [
    'default' => 'en',
    'list' => [
        'zh-tw',
        'zh-cn',
    ],
];

$Language = new Language($langConfig);

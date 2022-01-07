<?php

require 'functions.php';

// PHP Codes
$name = 'suhail';
$greeting = "สวัสดีครับ {$_GET['name']}";

$my_cat = [
    'eyes' => 'blue',
    'fur' => 'thick',
    'behaviour' => 'bad',
];

$students = [
    'Alwatif Luding', // 0
    'Areeya Thason', // 1
    'Izzah Farhanis', // 2
];

dd($my_cat);



require 'index.view.php';

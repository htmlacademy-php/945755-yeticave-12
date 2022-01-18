<?php
$is_auth = rand(0, 1);
$user_name = 'Кирилл';
require('helpers.php');
$categories = [
    'boards' => 'Доски и лыжи',
    'fasteners' => 'Крепления',
    'boots' => 'Ботинки',
    'clothes' => 'Одежда',
    'tools' => 'Инструменты',
    'other' => 'Разное'];

$products = [
    [
        'title' => '2014 Rossignol District Snowboard',
        'category' => $categories['boards'],
        'price' => 10999,
        'url_picture' => 'img/lot-1.jpg',
        'date_range' => '2022-01-25'
    ],
    [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => $categories['boards'],
        'price' => 159999,
        'url_picture' => 'img/lot-2.jpg',
        'date_range' => '2022-01-21'
    ],
    [
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => $categories['fasteners'],
        'price' => 8000,
        'url_picture' => 'img/lot-3.jpg',
        'date_range' => '2022-01-22'
    ],
    [
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => $categories['boots'],
        'price' => 10999,
        'url_picture' => 'img/lot-4.jpg',
        'date_range' => '2022-01-29'
    ],
    [
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => $categories['clothes'],
        'price' => 7500,
        'url_picture' => 'img/lot-5.jpg',
        'date_range' => '2022-01-21'
    ],
    [
        'title' => 'Маска Oakley Canopy',
        'category' => $categories['other'],
        'price' => 5400,
        'url_picture' => 'img/lot-6.jpg',
        'date_range' => '2022-01-17'
    ]
];

function formatting($num) {
    $num = number_format(ceil($num), 0, '', ' ');
    return($num . ' ' . '₽');
};

function elapsedTime($target) {
    $cur_time = strtotime('now');
    $next_time = strtotime($target);
    if ($next_time <= $cur_time) {
        return false;
    }
    $diff = $next_time - $cur_time;
    $hours = floor($diff / 3600);
    $mins = floor($diff % 3600 / 60);

    return [$hours, $mins];
}

$main_content = [];

$page_content =  include_template('main.php', ['categories' => $categories, 'products' => $products, 'main_content' => $main_content]);

$layout_content = include_template('layout.php', ['title' => 'YetiCave', 'is_auth' => $is_auth, 'user_name' => $user_name, 'page_content' => $page_content, 'categories' => $categories]);



print($layout_content);

?>

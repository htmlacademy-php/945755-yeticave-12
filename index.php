<?php
$is_auth = rand(0, 1);
$user_name = 'Кирилл';
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
        'url_picture' => 'img/lot-1.jpg'
    ],
    [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => $categories['boards'],
        'price' => 159999,
        'url_picture' => 'img/lot-2.jpg'
    ],
    [
        'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => $categories['fasteners'],
        'price' => 8000,
        'url_picture' => 'img/lot-3.jpg'
    ],
    [
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => $categories['boots'],
        'price' => 10999,
        'url_picture' => 'img/lot-4.jpg'
    ],
    [
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => $categories['clothes'],
        'price' => 7500,
        'url_picture' => 'img/lot-5.jpg'
    ],
    [
        'title' => 'Маска Oakley Canopy',
        'category' => $categories['other'],
        'price' => 5400,
        'url_picture' => 'img/lot-6.jpg'
    ]
];

function formatting($num) {
    $num = number_format(ceil($num), 0, '', ' ',);
    return($num . ' ' . '₽');
};

function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
};

$main_content = [];

$page_content =  include_template('main.php', ['categories' => $categories, 'products' => $products, 'main_content' => $main_content]);

$layout_content = include_template('layout.php', ['title' => 'YetiCave', 'is_auth' => $is_auth, 'user_name' => $user_name, 'page_content' => $page_content, 'categories' => $categories]);



print($layout_content);

?>

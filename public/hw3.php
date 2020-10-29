<?php
/* Задание 1
С помощью цикла while вывести все числа в промежутке от 0 до 100,
которые делятся на 3 без остатка */
$i = 0;
while (++$i < 100) {
    if ($i % 3 == 0) {
        echo $i . "<br>";
    }
}

echo "<br/> <hr/> <br/>";


/* Задание 2 */
$i = 0;

do {
    if ($i == 0) {
        echo $i, '- это ноль' . "<br>";
    } elseif ($i % 2 == 0) {
        echo $i, '- это четное число' . "<br>";
    } else {
        echo $i, '- это нечетное число' . "<br>";
    }
} while (++$i <= 10);


echo "<br/> <hr/> <br/>";

/* Задание 3 */
$cities = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Костино', 'Выша', 'Константиново']
];

foreach ($cities as $key => $value) {
    echo "$key: <br/>";
    $lastCity = end($value);
    foreach ($value as $subValue => $city) {
        if ($city == $lastCity) {
            echo "$city <br/>";
        } else {
            echo "$city, ";
        }
    }
}

echo "<br/> <hr/> <br/>";

/* Задание 4 */
function transliterate(string $word): string {
    $dictionary = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'ye',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ъ' => '',
        'ы' => 'y',
        'ь' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya'
    ];

    return strtr($word, $dictionary);
}

echo transliterate("вчера проходило собрание <br/>");


echo "<br/> <hr/> <br/>";

/* Задание 5 */
function replacing($string) {
    return str_replace(" ", "_", $string);
}
echo replacing("вчера проходило собрание <br/>");


echo "<br/> <hr/> <br/>";

/* Задание 6 */
$title = '<h1>Title</h1>';
$content = '<p>Content</p>';
$date = date('Y');
$menu = [
    'Главная страница' => 'index.html',
    'Продукты' => [
        'Мужская одежда' => 'product_male.html',
        'Женская одежда' => 'product_female.html',
        'Детская одежда' => 'product_kids.html'
    ],
    'Корзина' => 'basket.html'
];

function openMenu($menu) {
    $showMenu = "<ul>";
    foreach ($menu as $key => $page) {
        if (is_array($page)) {
            $showMenu .= "<li><a href='#'>".$key.openMenu($page)."</a></li>";
        } else {
            $showMenu .= "<li><a href='$page'>".$key."</a></li>";
        }
    }
    $showMenu .= "</ul>";

    return $showMenu;
}

echo $title;
echo $content;
echo openMenu($menu);
echo  $date;

echo "<br/> <hr/> <br/>";


/* Задание 7 */
for ($i = 0; $i <= 9; print_r($i++.' '));

echo "<br/> <hr/> <br/>";

?>






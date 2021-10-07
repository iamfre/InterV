<?php

$a = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam praesentium assumenda facilis rerum quas? Ea dolores rerum reprehenderit velit quisquam iure quas pariatur exercitationem! Atque consequatur placeat vitae officia rem impedit beatae fugit officiis recusandae dignissimos quod ullam est labore, laudantium asperiores, nihil ab laboriosam ipsam nemo. Esse error suscipit porro voluptatibus accusamus totam quasi cum corporis dolore corrupti vero dicta laudantium nesciunt maxime nam itaque nemo quibusdam, eius incidunt commodi enim officia cumque!';

$link = '#!';

// обрезаем до 180
$text_cut =  substr($a, 0, 180);

// делим на слова
$text_arr = explode(' ', $text_cut);

// индекс последнего элемента в массиве
$last_index = count($text_arr) - 1;

// Левая часть
$left_part = array_slice($text_arr, 0, $last_index - 1);;
$left_part = implode(' ', $left_part);

// правая часть
$right_part = array_slice($text_arr, $last_index - 1);
$right_part = implode(' ', $right_part);

// Запись и вывод
$b = $left_part . ' <a href="' . $link . '">' . $right_part . "...";
echo $b;

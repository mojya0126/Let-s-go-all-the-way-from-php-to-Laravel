<?php

// 数字と文字
// 数字は半角

// 123
// １２３・・文字として認識

// 'こんにちは'
// "こんばんは"
// 'こんば"んは"'
$array_member = [
    'name' => '山田',
    'height' => 180,
    'hobby' => '野球'
];

$array_fruits = ['appple', 'banana', 'cherry'];

var_dump($array_fruits);

foreach($array_members as $array_member){
    echo $array_member['name'];
}

var_dump($test);
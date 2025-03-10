<?php

// 数字と文字
// 数字は半角

// 123
// １２３・・文字として認識

// 'こんにちは'
// "こんばんは"
// 'こんば"んは"'

function getChallenge($string){
    return $string;
}


echo '<br>';
getChallenge($result);
$result = '成功';

function test(){
    echo 'test';
}

test();

$comment = 'コメント';

function getComment($string){
    echo $string;
}

echo '<br>';
getComment($comment);


for($i = 0; $i < 10; $i++){
    if($i === 5){
        echo $i;
    }
}

$array_fruits = ['appple', 'banana', 'cherry'];

echo '<br>';
var_dump($array_fruits);

$array_members = [
    [
    'name' => '山田',
    'height' => 180,
    'hobby' => '野球'
    ],
    [
        'name' => '佐藤',
        'height' => 170,
        'hobby' => '野球'
    ]
];

echo '<br>';
foreach($array_members as $array_member){
    echo $array_member['name'] . "\n";
}

// var_dump($test);
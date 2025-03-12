<?php

// 数字と文字
// 数字は半角

// 123
// １２３・・文字として認識

// 'こんにちは'
// "こんばんは"
// 'こんば"んは"'

$text = 'あいうえお';

echo strlen($text);

echo mb_strlen($text);

echo $text;

echo str_replace('あいうえお', 'aiueo', $text);

$str_2 = 'あいうえお、かきくけこ';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';

function getChallenge($string){
    // 20%の確率で成功
    if(rand(1, 100) <= 20) {
        return $string;
    }
    return '失敗';
}

$result = '成功';

echo '<br>';
echo getChallenge($result);


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

// var_dump($test);
<?php
$array = [
    ["id" => 1, "date" => "12.01.2020", "name" => "test1"],
    ["id" => 2, "date" => "02.05.2020", "name" => "test2"],
    ["id" => 4, "date" => "08.03.2020", "name" => "test4"],
    ["id" => 1, "date" => "22.01.2020", "name" => "test1"],
    ["id" => 2, "date" => "11.11.2020", "name" => "test4"],
    ["id" => 3, "date" => "06.06.2020", "name" => "test3"]
];

// 1

$exArray = [];

$exArray = $array;

$ids = array_column($exArray, 'id');
$ids = array_unique($ids);
$exArray = array_filter($exArray, function ($key, $value) use ($ids) {
    return in_array($value, array_keys($ids));
}, ARRAY_FILTER_USE_BOTH);


// 2 

usort($exArray, function ($item1, $item2) {
    return $item1['id'] <=> $item2['id'];
});

// 3

array_filter($array, function($key) {
    return $key['id'] == 2;
}, ARRAY_FILTER_USE_BOTH);

// 4

array_walk($exArray, function(&$val) {
    $oVal = $val['id'];
    $oVal2 = $val['name'];
    unset($val['id']);
    unset($val['name']);
    $val[$oVal2] = $oVal;
});

/* SQL */

//5// select gt.*, g.*, t.* from goods_tags as gt inner join goods as g on gt.goods_id = g.id inner join tags as t on gt.tag_id = t.id

//6// select * from evaluations where evaluations.gender = true and evaluations.value > 6 

?>
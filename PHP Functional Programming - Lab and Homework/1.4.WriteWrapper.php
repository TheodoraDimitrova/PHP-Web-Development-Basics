<?php
declare(strict_types = 1);
$arr = [['name' => 'Waffles', 'type' => 'dog', 'age' => 12],
    ['name' => 'Fluffy', 'type' => 'cat', 'age' => 14],
    ['name' => 'Spelunky', 'type' => 'dog', 'age' => 4],
    ['name' => 'Hank', 'type' => 'dog', 'age' => 11],
];
$word="young";
function filterDogs(array $arr, string $word): array
{
    $young=[];
    $old = [];


    foreach ($arr as $value) {
        if ($word == 'young') {
            if ($arr['age'] < 9) {
                $young[] = $arr['age'];


            }


        } elseif ($word == 'old') {

            if ($arr['age'] > 9) {
                $old[] = $arr['age'];
                return $old;
            }


        }
    }


}

if ($word=='young'){
    print_r(filterDogs($arr,'young'));
}
<?php

function number($i)
{

    echo $i;

    if ($i < 5) {
        $i++;
        number($i);
    }
}

number(1);

//      ################################################################
echo "<br>";
$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Front End'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Back End'
    ],
    [
        'id' => 3,
        'parent' => 2,
        'name' => 'PHP'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'VueJS'
    ],
    [
        'id' => 5,
        'parent' => 2,
        'name' => 'NodeJS'
    ],
    [
        'id' => 6,
        'parent' => 5,
        'name' => 'ExpressJS'
    ],
    [
        'id' => 7,
        'parent' => 1,
        'name' => 'ReactJS'
    ],
    [
        'id' => 8,
        'parent' => 1,
        'name' => 'AngularJS'
    ],
    [
        'id' => 9,
        'parent' => 3,
        'name' => 'Laravel'
    ]
];

function getCategories($arr, $parent = 0)
{
    $html = "";
    $html .= "<ul>";
    foreach ($arr as $value) {
        if ($value['parent'] == $parent) {
            $html .= "<li>";
            $html .= $value['name'];
            $html .= getCategories($arr, $value['id']);
            $html .= "</li>";
        }
    }
    $html .= "</ul>";
    return $html;
}

echo getCategories($categories);
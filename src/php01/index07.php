<?php
    $people = [
        [
         "Taro", 25,"men"
        ],
        [
         "Jiro", 20,"men"
        ],
        [
        "Hanako",16,"Women"
        ]
    ];

    foreach($people as $person){
        echo $person[0] . "(" . $person[1] . $person[2] . ")" . "<br />";
    }

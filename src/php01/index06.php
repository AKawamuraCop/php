<?php
function add($score1, $score2,$score3){
    $value = $score1+ $score2 + $score3;
    $message = "";
    if($value > 210){
        $message = "合格点は" . $value . "なので合格です";
    }else{
        $message = "合格点は" . $value . "なので不合格です";
    }
    return $message;

}


echo add(100,200,40);


<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$num = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "私の名前は" . $name . "ですね". "<br />";
print "ご希望の商品は" . $item . "<br />";
print "ご注文数は" . $num;
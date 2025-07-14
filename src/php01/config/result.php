<?php
$customer_name = htmlspecialchars($_POST['customer_name'], ENT_QUOTES);

$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);

$order = htmlspecialchars($_POST['order'], ENT_QUOTES);

print "私の名前は、" . $customer_name ."<br>";
print "希望の商品は、" . $goods . "<br>";
print "注文数は、" . $order . "ですね<br>";
?>
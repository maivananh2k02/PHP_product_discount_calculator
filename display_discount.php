<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $percent = $_REQUEST['percent']/100;
    $discountAmount = $price * $percent * 0.1;
    $discountPrice = $price + $discountAmount;
}
echo "san pham :" . $name . "<br>co gia sau khi chiet khau la :" . $discountPrice." dong";
?>
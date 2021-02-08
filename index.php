1.
<?php
$name = 'Vaida';
$surname = 'Eidžiulytė-Grauslienė';
$birthYear = 1989; 
$currentYear = 2021;
$age = $currentYear - $birthYear;
echo " Aš esu $name $surname. Man yra $age metai(ų)."

?>
<br>
2.
<?php
$randomFirst = rand(0, 4);
$randomSecond = rand(0, 4);
if ($randomFirst >= $randomSecond && $randomSecond !== 0) {
    echo round($rezult = $randomFirst / $randomSecond, 2);
} else if ($randomFirst !== 0) {
   echo round($rezult = $randomSecond / $randomFirst, 2);
}
?>
<br>
3.
<?php
$randomFirst = rand(0, 25);
$randomSecond = rand(0, 25);
$randomThird = rand(0, 25);
if ($randomSecond < $randomFirst && $randomFirst < $randomThird || $randomThird < $randomFirst && $randomFirst < $randomSecond) {
    echo $randomFirst;
} else if ($randomFirst < $randomSecond && $randomSecond < $randomThird || $randomThird < $randomSecond && $randomSecond < $randomFirst) {
    echo $randomSecond;
} else {
    echo $randomThird;
}
?>
<br>
4.
<?php
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo "<br >a = $a <br> b = $b <br> c = $c <br>";
if (($a + $b) > $c && ($a + $c) > $b && ($b + $c) > $a) {
    echo 'Yes. Sides a, b and c form triangle. <br>';
} else {
    echo 'No. Sides a, b and c do not form triangle. <br>';
}
?>
5.
<?php
$number1 = rand(0, 2);
$number2 = rand(0, 2);
$number3 = rand(0, 2);
$number4 = rand(0, 2);
$number5 = rand(0, 2);
$zero = 0;
$one = 0;
$two = 0;
if ($number1 == 0) {
    $zero++;
} else if ($number1 == 1) {
    $one++;
} else if ($number1 == 2) {
    $two++;
}
if ($number2 == 0) {
    $zero++;
} else if ($number2 == 1) {
    $one++;
} else if ($number2 == 2) {
    $two++;
}
if ($number3 == 0) {
    $zero++;
} else if ($number3 == 1) {
    $one++;
} else if ($number3 == 2) {
    $two++;
}
if ($number4 == 0) {
    $zero++;
} else if ($number4 == 1) {
    $one++;
} else if ($number4 == 2) {
    $two++;
}
if ($number5 == 0) {
    $zero++;
} else if ($number5 == 1) {
    $one++;
} else if ($number5 == 2) {
    $two++;
}
echo "There are $zero zeros, $one ones and $two twos.";
?>
<br>
6.
<?php
$randomNumber = rand(1, 6);
echo "<h1>" . $randomNumber . "</h1>";
?>
7.
<?php
$number1 = rand(-10, 10);
$number2 = rand(-10, 10);
$number3 = rand(-10, 10);
if ($number1 < 0) {
    echo "<h1 style=color:green;>" . $number1 . "</h1>";
} else if ($number1 == 0) {
    echo "<h1 style=color:red;>" . $number1 . "</h1>";
} else {
    echo "<h1 style=color:blue;>" . $number1 . "</h1>";
}
if ($number2 < 0) {
    echo "<h1 style=color:green;>" . $number2 . "</h1>";
} else if ($number2 == 0) {
    echo "<h1 style=color:red;>" . $number2 . "</h1>";
} else {
    echo "<h1 style=color:blue;>" . $number2 . "</h1>";
}
if ($number3 < 0) {
    echo "<h1 style=color:green;>" . $number3 . "</h1>";
} else if ($number3 == 0) {
    echo "<h1 style=color:red;>" . $number3 . "</h1>";
} else {
    echo "<h1 style=color:blue;>" . $number3 . "</h1>";
}
?>
<br>
8.
<?php
$price = 1.0;
$candleQuantity = rand(5, 3000);
$sum = $price * $candleQuantity;
$priceDiscount1000 = $price * 0.97;
$priceDiscount2000 = $price * 0.96;
if ($sum >= 1000 && $sum < 2000) {
    echo "You buy $candleQuantity candles for $priceDiscount1000 Eur eatch.";
} else if ($sum >= 2000) {
    echo "You buy $candleQuantity candles for $priceDiscount2000 Eur eatch.";
} else {
    echo "You buy $candleQuantity candles for $price Eur eatch.";
}
?>
<br>
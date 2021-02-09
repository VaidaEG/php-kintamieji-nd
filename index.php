<h1>1.</h1>
<?php
$name = 'Vaida';
$surname = 'Eidžiulytė-Grauslienė';
$birthYear = 1989; 
$currentYear = 2021;
$age = $currentYear - $birthYear;
echo " Aš esu $name $surname. Man yra $age metai(ų)."
?>
<br>
<h1>2.</h1>
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
<h1>3.</h1>
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
<h1>4.</h1>
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
<h1>5.</h1>
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
<h1>6.</h1>
<?php
$randomNumber = rand(1, 6);
echo "<h2>" . $randomNumber . "</h2>";
?>
<h1>7.</h1>
<?php
$number1 = rand(-10, 10);
$number2 = rand(-10, 10);
$number3 = rand(-10, 10);
if ($number1 < 0) {
    echo "<h2 style=color:green;>" . $number1 . "</h2>";
} else if ($number1 == 0) {
    echo "<h2 style=color:red;>" . $number1 . "</h2>";
} else {
    echo "<h2 style=color:blue;>" . $number1 . "</h2>";
}
if ($number2 < 0) {
    echo "<h2 style=color:green;>" . $number2 . "</h2>";
} else if ($number2 == 0) {
    echo "<h2 style=color:red;>" . $number2 . "</h2>";
} else {
    echo "<h2 style=color:blue;>" . $number2 . "</h2>";
}
if ($number3 < 0) {
    echo "<h2 style=color:green;>" . $number3 . "</h2>";
} else if ($number3 == 0) {
    echo "<h2 style=color:red;>" . $number3 . "</h2>";
} else {
    echo "<h2 style=color:blue;>" . $number3 . "</h2>";
}
?>
<br>
<h1>8.</h1>
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
<h1>9.</h1>
<?php
$numberFirst = rand(0, 100);
$numberSecond = rand(0, 100);
$numberThird = rand(0, 100);
$sum = 0;
$quantity = 0;
if ($numberFirst > 10 && $numberFirst < 90) {
    $sum += $numberFirst;
    $quantity++;
}
if ($numberSecond > 10 && $numberSecond < 90) {
    $sum += $numberSecond;
    $quantity++;
}
if ($numberThird > 10 && $numberThird < 90) {
    $sum += $numberThird;
    $quantity++;
}
$average = $sum / $quantity;
$roundAverage = round($average, 0);
echo "$roundAverage";
?>
<br>
<h1>10.</h1>
<?php
$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);
$extraSeconds = rand(0, 300);
echo "$hours hours $minutes minutes $seconds seconds <br>";
$allSeconds = $seconds + $extraSeconds;
echo "Extra seconds - $extraSeconds <br>";
if ($allSeconds >= 60) {
    $extraMinutes = intval($allSeconds / 60);
    $seconds = $allSeconds - $extraMinutes * 60;
    $minutes += $extraMinutes; 
} else {
    $seconds = $allSeconds;
    $minutes = $minutes;  
}
if ($minutes >= 60) {
    $hours += intval($minutes / 60);
    if ($hours === 24) {
        $hours = 0;
    }
    $minutes -= $hours * 60; 
} 

echo "$hours hours $minutes minutes $seconds seconds <br>";
?>



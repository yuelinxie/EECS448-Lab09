<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$date = $_POST["date"];
$area = $_POST["area"];
$city = $_POST["city"];
$grow = $_POST["grow"];
$company = $_POST["company"];

echo "<p>Answer</p>";

echo "<p>Question1: When is Christmas?<br>";
echo "You answered: $date<br>";
echo "Correct answer: 12-25<p><br>";

echo "<p>Question2: What occupies the largest area in the earth?<br>";
echo "You answered: $area<br>";
echo "Correct answer: Water<p><br>";

echo "<p>Question3: In which city is the University of Kansas located?<br>";
echo "You answered: $city<br>";
echo "Correct answer: Lawrence<p><br>";

echo "<p>Question4: Where does the pineapples grow?<br>";
echo "You answered: $grow<br>";
echo "Correct answer: Land<p><br>";

echo "<p>Question5: Which company produces a vaccine against the coronavirus?<br>";
echo "You answered: $company<br>";
echo "Correct answer: Pfizer<p><br>";

$total = 0;
if($date == "12-25"){
    $total++;
}
if($area == "Water"){
    $total++;
}
if($city == "Lawrence"){
    $total++;
}
if($grow == "Land"){
    $total++;
}
if($company == "Pfizer"){
    $total++;
}
$percent = $total * 20;
echo "<p>You have: $total out of 5 Correct = $percent%<p><br>";
?>
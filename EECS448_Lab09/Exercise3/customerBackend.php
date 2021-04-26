<?php
echo "Reciept";
echo "<body style = 'background-color: paleturquoise'>";
$email = $_POST["email"];
$password = $_POST["password"];

$eyeMask_nums = $_POST["eyeMask"];
$eyeMask_totalM = $eyeMask_nums * 1;
$faceMask_nums = $_POST["faceMask"];
$faceMask_totalM = $faceMask_nums * 0.2;
$facTissue_nums = $_POST["facTissue"];
$facTissue_totalM = $facTissue_nums * 1.5;
$ship_M = 0;

if($_POST["shipping"] == "Free 7 day"){
    $ship_M = 0;
}
else if($_POST["shipping"] == "$50.00 over night"){
    $ship_M = 50;
}
else{
    $ship_M = 5;
}

$Total_M = $eyeMask_totalM + $faceMask_totalM + $facTissue_totalM + $ship_M;
echo "<table style = 'background-color: #F072FF' border = '1'>
        <tr>
            <th> </th>
            <th>Quantity</th>
            <th>Cost per Item</th>
            <th>Sub Total</th>
        </tr>
        <tr>
            <th>Eye Masks</th>
            <th>$eyeMask_nums</th>
            <th>$1</th>
            <th>$$eyeMask_totalM </th>
        </tr>
        <tr>
            <th>Face Masks</th>
            <th>$faceMask_nums</th>
            <th>$0.2</th>
            <th>$$faceMask_totalM </th>
        </tr>
        <tr>
            <th>Facial Tissue</th>
            <th>$facTissue_nums</th>
            <th>$1.5</th>
            <th>$$facTissue_totalM </th>
        </tr>
        <tr>
            <th>Shipping</th>
            <th></th>
            <th></th>
            <th>$$ship_M</th>
        </tr>
        <tr>
            <th>Total</th>
            <th></th>
            <th></th>
            <th>$$Total_M</th>
        </tr>
        <p>User: $email</p>";
?>
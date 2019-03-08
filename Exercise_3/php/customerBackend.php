<?php

$b1 = $_POST["b1qty"];
$b2 = $_POST["b2qty"];
$b3 = $_POST["b3qty"];
$b1p = 55.00;
$b2p = 58.00;
$b3p = 56.00;
$b1t = $b1*$b1p;
$b2t = $b2*$b2p;
$b3t = $b3*$b3p;
$ship = $_POST["ship"];
$price = 0;
if($ship == "fifty") {
    $price = 50;
    $ship = "Express";
}
else if($ship == "five") {
    $price = 5;
    $ship = "Standard";
}
else {
    $price = 0;
    $ship = "Free";
}
$total = $b1t+$b2t+$b3t+$price;

echo "<table style=\"background-color: rgb(107, 235, 207);\"  border=\"1\">";

echo'<tr>';
echo '<th>' . '</th>';
echo '<th>' .'Quantity'. '</th>';
echo '<th>' .'Cost Per Item'. '</th>';
echo '<th>' .'Sub Total'. '</th>';
echo '</tr>';
echo'<tr>';
echo '<th>' .'Board 1'. '</th>';
echo '<td>' .$b1. '</td>';
echo '<td>' .'$' . $b1p. '</td>';
echo '<td>' .'$' . $b1t. '</td>';
echo '</tr>';
echo'<tr>';
echo '<th>' .'Board 2'. '</th>';
echo '<td>' .$b2. '</td>';
echo '<td>' .'$' . $b2p. '</td>';
echo '<td>' .'$' . $b2t. '</td>';
echo '</tr>';
echo '<th>' .'Board 3'. '</th>';
echo '<td>' .$b3. '</td>';
echo '<td>' .'$' . $b3p. '</td>';
echo '<td>' .'$' . $b3t. '</td>';
echo '</tr>';
echo '<th>' .'Shipping'. '</th>';
echo '<td colspan="2">' .$ship. '</td>';
echo '<td>' . '$' . $price. '</td>';
echo '</tr>';
echo '<th colspan="3">' .'Total Cost'. '</th>';
echo '<th>' .'$' . $total. '</th>';
echo '</tr>';

echo"</table>";
?>
<?php

$cols = 100;
$rows = 100;

echo "<table border=\"1\">";

for ($i =1; $i < $rows; $i++){

    echo'<tr>';

    for ($j = 1; $j < $cols; $j++){
         $k=0;
      if($i == 1 and $j == 1){
         echo '<td>' .$k. '</td>';
      
      }
      else{
        echo '<td>' .$i*$j.'</td>';
      }
      
    }

   echo '</tr>';

}

echo"</table>";
?>
<?php
    $x = [5,3,23,4];
    $y = ["samuel","allan","maria","pedro"];

    $tudo = [$x,$y];
    echo $tudo[1][0];
    echo "<br />";

    $total_x = count($x);
    $total_y = count($y);

    for($i = 0 ; $i < $total_x ; $i++){
        echo $tudo[0][$i]."<br />"; 
    }
    for($s = 0; $s < $total_y;$s++){
                echo $tudo[1][$s]."<br />";
    }
?>
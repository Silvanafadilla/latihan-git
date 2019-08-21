<?php
 
    for ($i=1; $i <= 10; $i++) {
        echo "perkalian $i";
        echo "<br>";
        for ($b=1; $b <= 10 ; $b++) { 
            $a = $i*$b;
            if ($a % 2 == 1) {
                echo "$i x $b = $a adalah bilangan ganjil";
            } else {
                echo "$i x $b = $a adalah bilangan genap";
            }
            echo "<br><br>";
        }
    }
?>
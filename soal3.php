<?php
    
    for ($i=1; $i <= 10 ; $i++) {
        echo "Perkalian $i";
        echo "<br><br>"; 
        for ($j=1; $j <= 10 ; $j++) { 
            $a = $i*$j;
            if ($a % 2 == 1){
                echo "$i x $j = $a Bilangan ganjil<br>";
            }else {
                echo "$i x $j = $a Bilangan genap<br>";
            }
            echo "<br>";
        }
    }
?>
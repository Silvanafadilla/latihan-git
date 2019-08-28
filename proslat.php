<?php
    if (isset($_POST['simpan'])) {
        $input = $_POST['bintang'];

        for($a=1; $a<=$input; $a++){
    for($b=$input; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
//         for ($i = 1; $i <= $input; $i++) {
//            for ($j = $input; $j >= $i; $j-=1) {
//                 echo "*";
//  }
//         for ($k = 1; $k <= $i; $k++) {
//              echo "*";
//  }
//              echo "<br/>";
//  }
    }
?>
<?php￼
    function cetak_ganjil(){
        for ($i=0; $i < 100; $i++) { 
            if ($i%2 == 1) {
                echo "$i ";
            }
        }
    }
    //panggilan fungsi
    cetak_ganjil();
//     function cetak_ganjil () {
// for ($i=0; $i<100; $i++) {
// if ($i%2 == 1) {
// echo "$i ";
// }
// }
// }
// //pemanggilan fungsi
// cetak_ganjil();
    // function cetak_ganjil (){
    //     for ($i=0; $i < 100 ; $i++) { 
    //         if ($i%2 == 1) {
    //             echo "$i ";
    //         }
    //     }
    // }
    // //panggilan fungsi
    // cetak_ganjil();
?>
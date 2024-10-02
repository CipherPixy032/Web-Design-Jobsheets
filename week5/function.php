<?php
/* no 4
    function perkenalan(){
        echo "Assalamualaikum, ";
        echo "Perkenalkan, nama saya Nindy<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan();
    perkenalan();
*/

/* no 5
// membuat fungsi
    function perkenalan($nama, $salam) {
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    //memanggil fungsi yang sudah dibuat
    perkenalan("Hamdana", "Hallo");

    echo"<hr>";

    $saya = "Hamdana";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi
    perkenalan($saya,$ucapanSalam);
*/



//membuat fungsi
    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo $salam. ", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }
    //memanggil fungsi yang sudah dibuat
    perkenalan("Hamdana", "Hallo");

    echo"<hr>";

    $saya = "Hamdana";
    $ucapanSalam = "Selamat Pagi";

    //memanggil lagi tanpa mengisi parameter salam
    perkenalan($saya);
?>
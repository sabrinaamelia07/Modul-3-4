<?php
    error_reporting (E_ALL ^ E_NOTICE);
    $kecepatan    =$_POST['kecepatan'];
    $waktu        =$_POST['waktu'];
                     
    $jarak        =$kecepatan*$waktu;
    echo 'Jarak tempuh dalam waktu';echo $waktu;echo'jam'; echo'adalah<u>';echo number_format($jarak,0,",",".");echo' KM</u>';
?>
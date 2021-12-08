<?php
    $conn = mysqli_connect("localhost","root","","revisao");
    mysqli_set_charset($conn,"utf8");
    if(!$conn){
        echo "Erro de coneção com o  BD";".mysqli_connect error";
    }
?>
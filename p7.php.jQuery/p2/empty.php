<?php
    // 2.1
    $myArray = array();
    if (empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong.";
    } else {
        echo "Array terdefinisi dan tidak kosong.";
    }

    echo "<br><br>";

    // 2.2
    if (empty($nonExistentVar)) {
        echo "Variabel tidak terdefinisi atau kosong.";
    } else {
        echo "Variabel terdefinisi dan tidak kosong.";
    }
?>
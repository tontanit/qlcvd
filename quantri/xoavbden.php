<?php
    require '../lib/dbcon.php';
    require '../lib/quantri.php';

?>
<?php

if (isset($_GET['socvd'])){
    $socvd = $_GET['socvd'];
}

    $qr = " DELETE FROM `cvden`
            WHERE cvden.socvd = $socvd ";
    
    mysqli_query($link, $qr);
    header ('location:../index.php');


?>
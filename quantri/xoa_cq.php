<?php
    require '../lib/dbcon.php';
    require '../lib/quantri.php';

?>
<?php

if (isset($_GET['mabp'])){
    $mabp = $_GET['mabp'];
}

    $qr = " DELETE FROM `cqbh`
            WHERE cqbh.mabp = $mabp ";
    
    mysqli_query($link, $qr);
    header ('location: danhsach_cq.php');


?>
<?php

function danhsach_cvd(){
    require 'lib/dbcon.php';
    $qr = " SELECT cvden.*, tenbp, tenloai 
            FROM cvden, cqbh, loaicv 
            WHERE cvden.mabp = cqbh.mabp 
            AND cvden.maloai = loaicv.maloai
            ORDER BY socvd DESC LIMIT 0,20
            ";
    return mysqli_query($link, $qr);     
}

function timkiem($tukhoa){
    require 'lib/dbcon.php';

    $qr = " SELECT cvden.*, tenbp, tenloai 
    FROM cvden, cqbh, loaicv 
    WHERE cvden.mabp = cqbh.mabp 
    AND cvden.maloai = loaicv.maloai
    AND trichyeu REGEXP '$tukhoa'
    ORDER BY socvd DESC LIMIT 0,20
    ";

    return mysqli_query($link, $qr);         
}

function danhsach_cqbh(){
    require '../lib/dbcon.php';

    $qr = " SELECT * FROM cqbh 
           ";
    return mysqli_query($link, $qr);         
}

function danhsach_loaicv(){
    require '../lib/dbcon.php';

    $qr = " SELECT * FROM loaicv 
           ";

    return mysqli_query($link, $qr);         
}

//SỬA VĂN BẢN ĐẾN

function danhsachsua_cvd($socvd){
    require '../lib/dbcon.php';
    $qr = " SELECT cvden.*, tenbp, tenloai 
            FROM cvden, cqbh, loaicv 
            WHERE cvden.mabp = cqbh.mabp 
            AND cvden.maloai = loaicv.maloai
            AND socvd = $socvd
           
            ";
    return mysqli_query($link, $qr);     
    }

    function danhsach_suacqbh($mabp){
        require '../lib/dbcon.php';
    
        $qr = " SELECT * FROM cqbh 
                WHERE mabp = $mabp";
        return mysqli_query($link, $qr);         
    }



?>
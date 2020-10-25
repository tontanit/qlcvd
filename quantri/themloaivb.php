<?php
    require '../lib/dbcon.php';
    require '../lib/quantri.php';

?>
<?php
    if (isset($_POST['btnthem'])){
        $maloai = $_POST['maloai'];
        $tenloai= $_POST['tenloai'];
       

    $qr = "INSERT INTO `loaicv` (`maloai`, `tenloai`) 
            VALUES ('$maloai', '$tenloai') ";

     mysqli_query($link, $qr);
     header ('location: danhsach_loaicv.php');
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
    <div id="layout">
        <div id="header">
            <h2> THÊM LOẠI VĂN BẢN</h2>
        </div>


        <div id="content">

            <div id="content-table">
          
                <form action="" method="post">
                    <table class="content-table-2">
                        <tr>
                            <th>Mã cơ quan</th>
                            <td><input class="input-date-2" type="text" name="maloai" id="" maxlength="80"></td>
                        <tr>
                             <th>Tên cơ quan</th>
                             <td><input class="input-text-2" type="text" name="tenloai" id="" maxlength="80"></td>
                        </tr>
                      
                        <tr style="text-align:center">
                            <td colspan="2"><input type="submit" value="Thêm" name="btnthem"></td>
                        </tr>
                                              
                    </table>


                </form>
            </div>
        </div>

        <div id="footer">
            Copyright @$#
        </div>

    </div>
</body>
</html>
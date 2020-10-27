<?php
    require '../lib/dbcon.php';
    require '../lib/quantri.php';

?>
<?php
    if (isset($_POST['btnthem'])){
        $mabp = $_POST['mabp'];
        $tenbp= $_POST['tenbp'];
        $tenlanhdao= $_POST['tenlanhdao'];
        $dt= $_POST['dt'];
       

    $qr = "INSERT INTO `cqbh` (`mabp`, `tenbp`, `tenlanhdao`, `dt`) 
            VALUES ('$mabp', '$tenbp', '$tenlanhdao', '$dt'); ";

     mysqli_query($link, $qr);
     header ('location: danhsach_cq.php');
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
            <h2> THÊM CƠ QUAN BAN HÀNH VĂN BẢN</h2>
        </div>


        <div id="content">

            <div id="content-table">
          
                <form action="" method="post">
                    <table class="content-table-2">
                        <tr>
                            <th>Mã cơ quan</th>
                            <td><input type="text" name="mabp" id="" maxlength="80"></td>
                        </tr>

                        <tr>
                             <th>Tên cơ quan</th>
                             <td><input type="text" name="tenbp" id="" maxlength="80"></td>
                        </tr>

                        <tr>
                             <th>Tên Lãnh đạo</th>
                             <td><input type="text" name="tenlanhdao" id="" maxlength="80"></td>
                        </tr>

                        <tr>
                             <th>Điện thoại</th>
                             <td><input type="text" name="dt" id="" maxlength="80"></td>
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
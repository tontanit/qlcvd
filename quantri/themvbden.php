<?php
    require '../lib/dbcon.php';
    require '../lib/quantri.php';

?>
<?php
    if (isset($_POST['btnthem'])){
        $ngaynhan = $_POST['ngaynhan'];
        $socvd= $_POST['socvd'];
        $mabp= $_POST['mabp'];
        $sokyhieu= $_POST['sokyhieu'];
        $ngayky= $_POST['ngayky'];
        $maloai= $_POST['maloai'];
        $trichyeu= $_POST['trichyeu'];
        $nguoiky= $_POST['nguoiky'];
        $ghichu= $_POST['ghichu'];

    $qr = "INSERT INTO `cvden` (`socvd`, `sokyhieu`, `trichyeu`, `ngaynhan`, `maloai`, `mabp`, `ngayky`, `nguoiky`, `ghichu`) 
    VALUES ('$socvd', '$sokyhieu', '$trichyeu', '$ngaynhan', '$maloai', '$mabp', '$ngayky', '$nguoiky', ' $ghichu') ";
     mysqli_query($link, $qr);
     header ('location:../index.php');
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
            <h2> THÊM VĂN BẢN ĐẾN</h2>
        </div>


        <div id="content">

            <div id="content-table">
          
                <form action="" method="post">
                    <table class="content-table-2">
                        <tr>
                            <th>Ngày đến</th>
                            <td><input class="input-date-2" type="date" name="ngaynhan" id="" maxlength="80"></td>
                        <tr>
                             <th>Số CV đến</th>
                             <td><input class="input-text-2" type="text" name="socvd" id="" maxlength="80"></td>
                        </tr>
                        <tr>
                            <th>Nơi ban hành</th>
                            <td>
                               
                                <select name="mabp">
                                    <?php
                                        $danhsach_cqbh = danhsach_cqbh();
                                        while ($row = mysqli_fetch_array($danhsach_cqbh)){
                                    ?>
                                    <option value="<?php echo $row['mabp']; ?>"><?php echo $row['tenbp']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                                
                                <a class="lienket" href="themcqbh.php">Thêm</a>

                            </td>
                        </tr>
                        <tr>
                            <th>Số, ký hiệu</th>
                            <td> <input class="input-text-2" type="text" name="sokyhieu" id="" maxlength="80"></td>
                           
                        </tr>
                        <tr>
                            <th class="label">ngày tháng</th>
                            <td><input type="date" name="ngayky" id="" maxlength="80"></td>
                            
                        </tr>  
                        <tr>
                            <th>Tên loại</th>
                            <td>
                                <select name="maloai">
                                    <?php
                                        $danhsach_loaicv = danhsach_loaicv();
                                        while ($row = mysqli_fetch_array($danhsach_loaicv)){
                                    ?>
                                    <option value="<?php echo $row['maloai']; ?>"><?php echo $row['tenloai']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>

                                <a class="lienket" href="themloaivb.php">Thêm</a>

                            </td>
                            
                        </tr>
                        <tr>
                            <th>Trích yếu</th>
                            <td><textarea name="trichyeu" placeholder="Nội dung ..."></textarea></td>
                            

                        </tr>
                        <tr>
                            <th>Người ký</th>
                            <td> <input class="input-text-2" type="text" name="nguoiky" id="" maxlength="80"></td>
                           
                        </tr>

                        <tr>
                             <th>Ghi chú</th>
                             <td><textarea name="ghichu" placeholder="Ghi chú..."></textarea></td>
                             
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
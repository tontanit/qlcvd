<?php
    require '../lib/dbcon.php';
    require '../lib/quantri.php';

?>
<?php
    if (isset($_GET['socvd'])){
        $socvd = $_GET['socvd'];
    }

    if (isset($_POST['btnsua'])){
        $ngaynhan = $_POST['ngaynhan'];
        $socvd= $_POST['socvd'];
        $mabp= $_POST['mabp'];
        $sokyhieu= $_POST['sokyhieu'];
        $ngayky= $_POST['ngayky'];
        $maloai= $_POST['maloai'];
        $trichyeu= $_POST['trichyeu'];
        $nguoiky= $_POST['nguoiky'];
        $ghichu= $_POST['ghichu'];
        
  $qr = "UPDATE cvden SET 
            socvd= '$socvd', 
            sokyhieu= '$sokyhieu', 
            trichyeu= '$trichyeu',
            ngaynhan= '$ngaynhan', 
            maloai= '$maloai', 
            mabp = '$mabp', 
            ngayky= '$ngayky', 
            nguoiky= '$nguoiky', 
            ghichu= '$ghichu'
            WHERE cvden.socvd = '$socvd' ";
    
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
            <h2> SỬA VĂN BẢN ĐẾN</h2>
        </div>


        <div id="content">

            <div id="content-table">
                <form action="" method="post">
                    <table class="content-table-2">
                        <?php
                            $danhsach_cvd = danhsachsua_cvd($socvd);
                            $row_cvd = mysqli_fetch_array($danhsach_cvd);
                        ?>
                        <tr>
                            <th>Ngày đến</th>
                            <td><input value= "<?php echo $row_cvd['ngaynhan'] ?>" class="input-date-2" type="date" name="ngaynhan" id="" maxlength="80"></td>
                        <tr>
                             <th>Số CV đến</th>
                             <td><input value= "<?php echo $row_cvd['socvd'] ?>" class="input-text-2" type="text" name="socvd" id="" maxlength="80"></td>
                        </tr>
                        <tr>
                            <th>Nơi ban hành</th>
                            <td>
                               
                                <select name="mabp">
                                    <?php
                                        $danhsach_cqbh = danhsach_cqbh();
                                        while ($row_cqbh = mysqli_fetch_array($danhsach_cqbh)){
                                    ?>
                                    <option <?php if ($row_cvd['mabp'] == $row_cqbh['mabp']){ echo "selected='selected'"; } ?> value="<?php echo $row_cqbh['mabp']; ?>"><?php echo $row_cqbh['tenbp']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Số, ký hiệu</th>
                            <td> <input value= "<?php echo $row_cvd['sokyhieu'] ?>" class="input-text-2" type="text" name="sokyhieu" id="" maxlength="80"></td>
                           
                        </tr>
                        <tr>
                            <th class="label">ngày tháng</th>
                            <td><input value= "<?php echo $row_cvd['ngayky'] ?>" type="date" name="ngayky" id="" maxlength="80"></td>
                            
                        </tr>  
                        <tr>
                            <th>Tên loại</th>
                            <td>
                                <select name="maloai">
                                    <?php
                                        $danhsach_loaicv = danhsach_loaicv();
                                        while ($row_loaicv = mysqli_fetch_array($danhsach_loaicv)){
                                    ?>
                                    <option <?php if ($row_cvd['maloai'] == $row_loaicv['maloai']){ echo "selected='selected'"; } ?> value="<?php echo $row_loaicv['maloai']; ?>"><?php echo $row_loaicv['tenloai']; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </td>
                            
                        </tr>
                        <tr>
                            <th>Trích yếu</th>
                            <td><textarea name="trichyeu"><?php echo $row_cvd['trichyeu'] ?></textarea></td>
                            

                        </tr>
                        <tr>
                            <th>Người ký</th>
                            <td> <input value= "<?php echo $row_cvd['nguoiky'] ?>" class="input-text-2" type="text" name="nguoiky" id="" maxlength="80"></td>
                           
                        </tr>

                        <tr>
                             <th>Ghi chú</th>
                             <td><textarea name="ghichu"><?php echo $row_cvd['ghichu'] ?> </textarea></td>
                             
                        </tr>
                        <tr style="text-align:center">
                            <td colspan="2"><input type="submit" value="Sửa" name="btnsua"></td>
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
<?php
    require '../lib/dbcon.php';
    require '../lib/quantri.php';

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
            <h2> QUẢN LÝ CÔNG VĂN ĐẾN</h2>
        </div>
       

        <div id="content">
            <div id="content-table">
          
                <form action="" method="post">
                    <table class="table-index">
                        <tr>
                            <th style="width:75px">Mã Loại VB</th>
                            <th style="width:75px">Tên Loại VB</th>
                            <th style="width:85px"><a href="./themloaivb.php">Thêm</a></th>
                            
                        </tr>
                        <?php
                            $danhsach_loaicv = danhsach_loaicv();
                            while ($row_dsloaicv=mysqli_fetch_array( $danhsach_loaicv)){
                        ?>
                        <tr>
                            <td><?php echo $row_dsloaicv['maloai']; ?></td>
                            <td><?php echo $row_dsloaicv['tenloai']; ?></td>
                            <td><a href="./quantri/suavbden.php?socvd=<?php echo $row['socvd']; ?>">Sửa</a> - <a onclick = "return confirm('Bạn có muốn xóa?')" href="./quantri/xoavbden.php?socvd=<?php echo $row['socvd']; ?>">Xóa</a></td>
                           
                        </tr>
                        <?php
                            }
                        ?>
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
<?php
    require './lib/dbcon.php';
    require './lib/quantri.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <div id="layout">
        <div id="header">
            <h2> QUẢN LÝ CÔNG VĂN ĐẾN</h2>
        </div>
            
        <div id="content-timkiem">
            <?php require'quantri/timkiem.php'; ?>
               
        </div>


        <div id="content">
            <div id="content-table">
          
                <form action="" method="post">
                    <table class="table-index">
                        <tr>
                            <th style="width:75px">Ngày đến</th>
                            <th style="width:75px">Số VB đến</th>
                            <th style="width:140px">Nơi ban hành</th>
                            <th style="width:97px">Số, ký hiệu</th>
                            <th style="width:75px">ngày tháng</th>
                            <th style="width:80px">Tên loại</th>
                            <th style="width:330px">Trích yếu</th>
                            <th style="width:100px">Ghi chú</th>
                            <th style="width:85px"><a href="./quantri/themvbden.php">Thêm</a></th>
                            
                        </tr>
                        <?php
                            $danhsach = danhsach_cvd();
                            while ($row=mysqli_fetch_array( $danhsach)){
                        ?>
                        <tr>
                            <td><?php echo $row['ngaynhan']; ?></td>
                            <td><?php echo $row['socvd']; ?></td>
                            <td><?php echo $row['tenbp']; ?></td>
                            <td><?php echo $row['sokyhieu']; ?></td>
                            <td><?php echo $row['ngayky']; ?></td>
                            <td><?php echo $row['tenloai']; ?></td>
                            <td style="text-align: justify"><?php echo $row['trichyeu']; ?></td>
                            <td><?php echo $row['ghichu']; ?></td>
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
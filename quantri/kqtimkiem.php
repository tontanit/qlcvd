<?php
    require '../lib/dbcon.php';
    require '../lib/quantri.php';
    $tukhoa = $_GET['q'];
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
            <h2> KẾT QUẢ TÌM KIẾM</h2>
        </div>

        <div id="content">
            <div id="content-table">
          
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>Ngày đến</th>
                            <th>Số CV đến</th>
                            <th>Nơi ban hành</th>
                            <th>Số, ký hiệu</th>
                            <th>ngày tháng</th>
                            <th>Tên loại</th>
                            <th>Trích yếu</th>
                            <th>Ghi chú</th>
                        </tr>
                        <?php
                            $timkiem = timkiem($tukhoa);
                            while ($row=mysqli_fetch_array($timkiem)){
                        ?>
                        <tr>
                            <td><?php echo $row['ngaynhan']; ?></td>
                            <td><?php echo $row['socvd']; ?></td>
                            <td><?php echo $row['tenbp']; ?></td>
                            <td><?php echo $row['sokyhieu']; ?></td>
                            <td><?php echo $row['ngayky']; ?></td>
                            <td><?php echo $row['tenloai']; ?></td>
                            <td><?php echo $row['trichyeu']; ?></td>
                            <td><?php echo $row['ghichu']; ?></td>
                           
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
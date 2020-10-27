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
            <h2> QUẢN LÝ CƠ QUAN BAN HÀNH VĂN BẢN</h2>
        </div>
       

        <div id="content">
            <div id="content-table">
          
                <form action="" method="post">
                    <table class="table-index">
                        <tr>
                            <th style="width:75px">Mã cơ quan</th>
                            <th style="width:75px">Tên cơ quan</th>
                            <th style="width:75px">Lãnh đạo cơ quan</th>
                            <th style="width:75px">Điện thoại</th>
                            <th style="width:85px"><a href="./themcqbh.php">Thêm</a></th>
                            
                        </tr>
                        <?php
                            $danhsach_cq = danhsach_cqbh();
                            while ($row_cq=mysqli_fetch_array( $danhsach_cq)){
                        ?>
                        <tr>
                            <td><?php echo $row_cq['mabp']; ?></td>
                            <td><?php echo $row_cq['tenbp']; ?></td>
                            <td><?php echo $row_cq['tenlanhdao']; ?></td>
                            <td><?php echo $row_cq['dt']; ?></td>
                            <td><a href="./quantri/sua_cq.php?mabp=<?php echo $row_cq['mabp']; ?>">Sửa</a> - <a onclick = "return confirm('Bạn có muốn xóa?')" href="./xoa_cq.php?mabp=<?php echo $row_cq['mabp']; ?>">Xóa</a></td>
                           
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
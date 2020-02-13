<?php
           $conn = mysqli_connect("localhost", "a20webcl_a","Phuclochy1") or die("Kết nối thất bại!");
      
           $db = mysqli_select_db($conn, "a20webcl_a") or die("Không Kết Nối Được CSDL a");
      
           mysqli_query($conn, 'SET NAMES UTF8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Sản Phẩm</title>
</head>
<body>
    <?php 
        if(isset($_POST['nhap'])){
            $nameP = $_POST['nameProduct'];
            $priceP = $_POST['priceProduct'];
            $introP = $_POST['introProduct'];
            $paraP = $_POST['paraProduct'];
            $target = "../imgs/";
            $target_file = $target.basename($_FILES['hinh']['name']);
            $uploadOK = 1;
            $imgfiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));       
            $query = "INSERT INTO `product` (`id`,`nameProduct`, 'avatarProduct',`priceProduct`,`introProduct`,`paraProduct`) VALUES ('','$nameP','$target_file','$priceP','$introP','$paraP')";
            mysqli_query($conn, $query) or die("Không thành công");
            header('location: product.php');
        }
        else if (isset($_POST['xoa'])&& $_POST['id'] !=""){
            $ma = $_POST['id'];
            $xoa = "DELETE FROM `product` WHERE `product`.`id` = $ma";
            $ketqua = mysqli_query($conn, $xoa) or die("Không thành công");
            header('location: product.php');
        }
        else if (isset($_POST['capnhat'])&& $_POST['id'] !=""){
            $ma = $_POST['id'];
            $nameP = $_POST['nameProduct'];
            $priceP = $_POST['priceProduct'];
            $introP = $_POST['introProduct'];
            $paraP = $_POST['paraProduct'];
            $capnhat = "UPDATE `product` SET `nameProduct` = '$nameP', `priceProduct` = '$priceP',`introProduct` = '  $introP', `paraProduct` = '$paraP' WHERE `product`.`id` = '$ma';";
            $ketqua = mysqli_query($conn, $capnhat) or die("Không thành công");
            header('location: product.php');
        }
        else{
            $ma = "";
            $nameP = "";
            $priceP = "";
            $introP ="";
            $paraP ="";
        }

        if (isset($_GET["action"]) && $_GET["action"]=="fix"){
            $ma = $_GET["id"];
            $result_kh = mysqli_query($conn, "SELECT * FROM `product` WHERE `id`= $ma");
            $row = mysqli_fetch_array($result_kh);
            $nameP = $row[1];
     
            $priceP = $row[3];
            $introP = $row[4];
            $paraP = $row[5];
        }
        if (isset($_GET["action"]) && $_GET["action"] == "xoa"){
            $ma = $_GET["id"];
            $result = mysqli_query($conn, "DELETE FROM `product` WHERE `product`.`id` = $ma");
        }
    ?>
    <form method="post">
        Mã sản phẩm: <br>
        <input type="text" name="id" readonly value="<?php echo $ma; ?>"><br>
        Nhập tên sản phẩm: <br>
        <input type="text" name="nameProduct" value="<?php echo $nameP; ?>"> <br>
        Hình : <br>
        <input type="file" name="hinh"><br>
        Giá: <br>
        <input type="text" name="priceProduct" value="<?php echo $priceP; ?>"> <br>
        Giới Thiệu: <br>
        <textarea name="introProduct" ><?php echo $introP; ?></textarea><br>
        Nguồn gốc: <br>
        <textarea name="paraProduct"><?php echo $paraP; ?></textarea>
         <br> <br>
        <input type="submit" name="nhap" value="Lưu Thông Tin">
         <br> <br>
        <input type="submit" name="xoa" value="Xóa KH">
        <br> <br>
        <input type="submit" name="capnhat" value="Cập nhật DATA">
    </form> 
    <table width=1180px>
        <tr></tr>
            <td>Mã Sản Phẩm</td>
            <td>Tên Sản Phẩm</td>
            <td>Hình Ảnh</td>
            <td>Giá Sản Phẩm</td>
            <td>Giới Thiệu </td>
            <td>Nguồn gốc</td>
            <td>Tùy Chọn</td>
        </tr>
        <?php 
            $query_show = "SELECT * FROM `product`";
            $show_bang = mysqli_query($conn, $query_show);
            while($row = mysqli_fetch_array($show_bang)){
                echo (
                    "<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        <td>
                            <a href='?action=fix&id=".$row[0]."'>EDIT</a>
                            <a href='?action=xoa&id=".$row[0]."'>DELETE</a>
                        </td>
                    </tr>"
                );
            }
        ?>
    </table>
</body>
</html>
<?php
           $conn = mysqli_connect("localhost", "root","") or die("Kết nối thất bại!");
      
           $db = mysqli_select_db($conn, "a") or die("Không Kết Nối Được CSDL a");
      
           mysqli_query($conn, 'SET NAMES UTF8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Coffe Home</title>
    <!-- lib -->
    <link href="../libs/fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nova+Flat&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/menu.css" >
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    <header>
        <div class="justify-content-center row">
            <div class="col-5 col-sm-4 col-md-3 col-lg-2 row left-side-menu">
                <div class="admin-logo">
                    <img src="./../imgs//favicon.png">
                </div>
                <div class="menu-icon" onclick="openClose()">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-7 col-sm-8 col-md-9 col-lg-10 right-side-menu">
                <div class="justify-content-end row">
                    <div class="admin-info row">
                            <div class="avatar">
                                <img src="../imgs/admin/avatar1.jpg" />
                            </div>
                            <div class="admin-name">
                                <b>Tn Lương</b>
                            </div>    
                    </div>
                    <div class="dropdown">
                            <div class="log" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="admin.php">Tài khoản</a>
                              <a class="dropdown-item" href="pass.php">Đổi mật khẩu</a>
                              <a class="dropdown-item" href="#">Đăng xuẩt</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="row justify-content-center no-gutters">
        <div class="col col-sm-4 col-md-3 col-lg-2" id="sidebar">
            <ul class="side-bar-ul" >
                <a href="index.php">
                    <li class="side-bar-tag " >
                            <i class="fas fa-home"></i>
                            Trang Chủ
                    </li>
                </a>
                <a href="product.php">
                    <li class="side-bar-tag active" >
                        <i class="fas fa-cocktail"></i> 
                        Sản Phẩm 
                    </li>
                </a>
                <a href="cart.php">
                    <li class="side-bar-tag">
                        <i class="fas fa-shopping-cart"></i>
                        Đơn Hàng
                    </li>
                </a>
                <a href="news.php">
                    <li class="side-bar-tag">
                        <i class="fas fa-newspaper"></i>
                        Tin Tức
                    </li>
                </a>
                <a href="contact.php">
                    <li class="side-bar-tag">
                        <i class="far fa-paper-plane"></i>
                        Liên Hệ
                    </li>
                </a>
            </ul>           
        </div>
        <div class="col col-sm-8 col-md-9 col-lg-10 main">
            <div class="justify-content-center row">
            <?php 
            if(isset($_POST['nhap'])){
                $nameP = $_POST['nameProduct'];
                $priceP = $_POST['priceProduct'];
                $introP = $_POST['introProduct'];
                $paraP = $_POST['paraProduct']; 
                $query = "INSERT INTO `product` (`id`,`nameProduct`, 'avatarProduct',`priceProduct`,`introProduct`,`paraProduct`) VALUES ('','$nameP','','$priceP','$introP','$paraP')";
                mysqli_query($conn, $query) or die('');
                header('location:');
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
                <div class="form-product" method="post">
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
                    <input type="submit" name="capnhat" value="Cập nhật DATA">
                </form> 
                </div>
                <div class="table-product col-12">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-collapse">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Giá sản phẩm</th>
                                <th scope="col">Giới thiệu</th>
                                <th scope="col">Nguồn gốc</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
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
                                            <td class='td-intro'>$row[4]</td>
                                            <td id='heading$row[0]'>
                                                <button class='btn btn-link collapsed' type='button' data-toggle='collapse' data-target='#collapse$row[0]' aria-expanded='false' aria-controls='collapse$row[0]'>
                                                    Chi tiết
                                                </button>    
                                            </td>
                                            
                                            <td>
                                                <a class='btn edit' href='?action=fix&id=".$row[0]."'>Edit</a>
                                             
                                                <a class='btn delete' href='?action=xoa&id=".$row[0]."'>Delete</a>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td colspan='7'>
                                                <div id='collapse$row[0]' class='collapse' aria-labelledby='heading$row[0]' data-parent='#table-collapse'>
                                                    $row[5]
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        "
                                    );
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lib -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- js -->
    <script src="js/menu.js"></script>
    <script src="js/product.js"></script>


   
</body>
</html>
<?php
        $conn = mysqli_connect("localhost", "root","") or die("Kết nối thất bại!");
      
        $db = mysqli_select_db($conn, "a") or die("Không Kết Nối Được CSDL a");
   
        mysqli_query($conn, 'SET NAMES UTF8');

        $sql = "SELECT * FROM product";

        $result_sp = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../imgs/favicon.png" type="image/png">
    <title>The Coffe Home</title>
    <!-- lib -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nova+Flat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
    <!-- menu -->
    <header>
        <div class="wrap-menu">
            <div class="menu  navbar navbar-expand-lg center container row">
                <div class="logo  navbar-brand col-4 justify-content-start">
                        <img  src="../imgs/favicon.png"/>                  
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="wrap-menu-tag collapse navbar-collapse justify-content-end"  id="navbarNav">
                    <ul class="row justify-content-end navbar-nav">
                        <li class="menu-tag ">
                            <a href="index.php">
                                <p>Home</p>
                                <div class="menu-border">
                                </div>
                            </a>
                        </li>
                        <li class="menu-tag active-menu ">
                            <a href="menu.php">
                                <p>Menu</p>
                                <div class="menu-border">
                                </div>    
                            </a>   
                        </li>
                        <li class="menu-tag ">
                            <a>
                                <p>Discount</p>
                                <div class="menu-border">
                                </div>
                            </a>     
                        </li>
                        <li class="menu-tag ">
                            <a href="store.php">
                                <p>Store</p>
                                <div class="menu-border">
                                </div>
                            </a>  
                        </li>
                        <li class="menu-tag">
                            <a href="">
                                <a class="fas fa-shopping-cart shop"></a>
                                <div class="menu-border">
                                </div>
                            </a>                               
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    
    <!-- 1 banner Menu -->
    <div class="product">
        <div class="container center">
            <div class="row justify-content-between">
                <div class="col-6 product-title">
                    <b>MENU</b>
                </div>
            </div>
            <div class="row justify-content-start">
            <?php
                    while($value = mysqli_fetch_array($result_sp))
                    {
                ?>
                    <div class="col-6 col-md-4">
                        <div class="img-product">
                            <img  src="../imgs/<?php echo $value["avatarProduct"]; ?>"/>
                        </div>
                        <div>
                            <b class="p-name">
                                <?php echo $value["nameProduct"]; ?>
                            </b>
                            <b class="p-price">
                                <?php echo $value["priceProduct"]; ?>
                            </b>
                        </div>
                    
                        <div class="row">
                            <div class="wrap-p-buy ">
                                <div class="p-buy-a" >
                                    <p>
                                        Mua
                                    </p>   
                                </div>
                                <div class="p-buy">
                                    <p>
                                        Mua 
                                    </p>
                                </div> 
                            </div>
                            <div class="wrap-p-more">
                                <div class="p-more-a" >
                                    <a href="product.php?id=<?php echo $value["id"]?>">
                                        <p>
                                            Xem Thêm
                                        </p>
                                    </a> 
                                </div>
                                <div class="p-more">
                                    <a href="product.php?id=<?php echo $value["id"]?>">
                                        <p>
                                            Xem Thêm 
                                        </p>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
            
                <?php 
                    }
                ?>
              
            </div>
        </div>          
    </div>
    
  
    <!-- footer -->
    <footer>
            <div class="footer container row justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <b>
                        The Coffe Home
                    </b>
                </div>
                <div class="col-md-3 col-sm-6">
                    <ul>
                        <li class="litil">Về Chúng Tôi</li>
                        <li>Giới Thiệu về The Coffee Home</li>
                        <li>Trở Thành Đối Tác Của The Coffee </li>
                        <li>Chính Sách Bảo Mật</li>
                        <li>Điều Kiện Và Điều Khoản</li>
                        <li>Quy Định Thanh Toán</li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                        <ul>
                            <li class="litil">
                                Download Mobile App
                            </li>
                            <li>
                                <img src="../imgs/appstore@3x.png">
                            </li>
                            <li>
                                <img src="../imgs/playstore@3x.png">
                            </li>
                        </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <ul>
                        <li class="litil">Liên Hệ </li>
                        <li>Trụ Sở: ...</li>
                        <li>Hotline : ...</li>
                        <li>Email: ...@gmail.com</li>
                        <li>(7:00 - 22:00 Kể cả thứ 7, CN)</li>
                    </ul>
                </div>
               
            </div>
            <div class="footer container row justify-content-center">
                <p>@ All Copyright Reserved 2019 The Coffe Home</p>
            </div>
    </footer>
    <!-- go top -->
    <a href="" id="goTop" class="bd-circle t-center">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- lib -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <!-- js -->
    <script src="js/index.js"></script>

</body>
</html>
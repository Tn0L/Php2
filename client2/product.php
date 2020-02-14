<?php
        $conn = mysqli_connect("localhost", "root","") or die("Kết nối thất bại!");
      
        $db = mysqli_select_db($conn, "a") or die("Không Kết Nối Được CSDL a");
   
        mysqli_query($conn, 'SET NAMES UTF8');

        $sql = "SELECT * FROM product ";

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
    <link href="https://fonts.googleapis.com/css?family=Nova+Flat|Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/detail.css">
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
    <!-- 1 detail -->
    <div class="detail">
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-12 col-md-6">
                    <img src="../imgs/p-1.jpg">
                </div>
                <div class="col-12 col-md-6">
                    <b class="detail-name">
                        BẠC SỈU
                    </b>
                    <p class="detail-intro">
                        Theo chân những người gốc Hoa đến định cư tại Sài Gòn, Bạc sỉu là cách gọi tắt của "Bạc tẩy sỉu phé" trong tiếng Quảng Đông, chính là: Ly sữa trắng kèm một chút cà phê.
                    </p>
                    <b class="detail-price">
                        29,000 Đ
                    </b>
                    <div class="detail-buy">
                        <b>
                            Mua
                        </b>
                    </div>
                    <p class="shipping">
                        Gọi giao hàng tận nơi <span>1900 ****</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- 2 detail paragraph -->
    <div class="paragraph">
        <div class="container center">
            <div class="paragraph-title">
                <b>
                    BẠC TẨY SỈU PHÉ
                </b>
            </div>
            <p>
            <?php
                while($value = mysqli_fetch_array($result_sp)){
                    echo $value["paraProduct"];
                }
            ?>
                <span>Bạc sỉu và Cà phê sữa là hai loại đồ uống khác nhau.</span>


Theo chân những người gốc Hoa đến định cư tại Sài Gòn, Bạc sỉu là cách gọi tắt của "Bạc tẩy sỉu phé" trong tiếng Quảng Đông.
Bạc là "trắng". Tẩy là "ly". Sỉu là "một chút". Phé là "cà phê".

Bạc sỉu chính là "Ly sữa trắng kèm một chút cà phê".


Người lao động phổ thông khi xưa dùng sữa đặc pha với nước nóng để thay thế cho sữa tươi đắt đỏ trong thời điểm ấy. Tuy vậy, vị sữa đặc pha khá nồng, nên họ biến tấu chút cà phê vào cho ly sữa thêm thơm và hấp dẫn.
Người Sài Gòn "chánh hiệu con mèo đen" dùng Bạc sỉu nóng. Theo thời gian, người ta thêm đá vào ly sữa-cà-phê này để thưởng thức được cả trong những ngày oi bức.

                <span>Nhưng dù uống nóng hay lạnh, Bạc sỉu cũng không phải là Cà phê sữa.</span>

            </p>
        </div>
    </div>
    <!-- 3 banner you may like -->
    <div class="product">
        <div class="container center">
            <div class="row justify-content-between">
                <div class="col product-title">
                    <b>You May Like</b>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-6 col-md-4">
                    <div class="img-product">
                        <img  src="../imgs/p-1.jpg"/>
                    </div>
                    <div>
                        <b class="p-name">
                            Bạc Sỉu
                        </b>
                        <b class="p-price">
                            29,000 
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
                                <p>
                                    Xem Thêm
                                </p>   
                            </div>
                            <div class="p-more">
                                <p>
                                    Xem Thêm 
                                </p>
                            </div> 
                        </div>
                    </div>
                </div>
              
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
<?php
           $conn = mysqli_connect("localhost", "root","") or die("Kết nối thất bại!");
      
           $db = mysqli_select_db($conn, "thi") or die("Không Kết Nối Được CSDL a");
      
           mysqli_query($conn, 'SET NAMES UTF8');

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
    <link rel="stylesheet" href="css/contact.css">
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
                        <li class="menu-tag active-menu ">
                            <a href="index.php">
                                <p>Home</p>
                                <div class="menu-border">
                                </div>
                            </a>
                        </li>
                        <li class="menu-tag ">
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
    <!-- form -->
    <div class="container">
            <div class="wrap-contact justify-content-center">
                <h5>Liên Hệ Với Chúng Tôi</h5>
                
            </div>
            <div class="row justify-content-center">
                <div class="bar"></div>
                <div class="cir"></div>
                <div class="bar"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6"> 
                    <div class="wrap-map">
                        <div class="mapouter" style="margin-left: auto; margin-right: auto; width: 100%;height: 400px;"><div class="gmap_canvas" style="overflow: hidden;background: none!important;height: calc(100% - 20px);width: 100%;"><iframe style="margin-left: auto; margin-right: auto;width: 100%;height: 100%;" id="gmap_canvas" src="https://maps.google.com/maps?q=&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style><small><a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=28532&url=42158&tid1=google4" rel="nofollow">Make Beautiful WordPress Themes</a></small></div>    
                    </div>
                    
                    
                </div>
                <div class="col-sm-6">
                    <?php 
           if(isset($_POST['nhap'])){
            $name = $_POST['name'];
            $club = $_POST['club'];
            $salary = $_POST['salary'];
            $price = $_POST['price']; 
            $query = "INSERT INTO `nhanvien` (`id`, `name`, `salary`, `club`, `price`) VALUES ('','$name','$salary','$club','$price')";
            mysqli_query($conn, $query) or die("Không thành công");
    
        }
        else{
            $ma = "";
            $name = "";
            $club =  "";
            $salary = "";
            $price = ""; 
            $more = "";
        }
    ?>
                        <form class="wrap-form " method="post" novalidate>
                         
                                
                                
                                    <input type="text" required class="form-control" name="name" id="validationTooltip01" placeholder="Tên *">
                               
                                
                                    <input type="text" required class="form-control" name="club" id="validationTooltip01" placeholder="Email*">
                             
                                
                               
                                    <input type="text" name="salary" required class="form-control  contact-form-control-phone" placeholder="Số Điện Thoại" maxlength="12" minlength="6" id="validationTooltip01">
                                
                            
                                    <textarea type="text" placeholder="Tin Nhắn" name="price" class="form-control">
                    
                                    </textarea>
                            
                    
                                
                                <div class="g-recaptcha" style="margin-left: auto; margin-right: auto; margin-top: 15px; width: 300px;" data-sitekey="6LcyUWkUAAAAAFBkGtr1tAJnbrbTA_Y9wQURcSBv"></div>
                                <input type="submit" name="nhap" value="Gửi">
                            </form>
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
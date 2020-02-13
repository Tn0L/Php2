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
    <link rel="stylesheet" href="css/pass.css">
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
                    <li class="side-bar-tag" >
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-5">
                            <div class="login">
                                <b>Đăng Nhập</b>
                                <form class="row justify-content-center">
                                    <input type="password" id="pass" placeholder="Mật Khẩu Cũ" > 
                                    <input type="password" id="pass" placeholder="Mật Khẩu Mới" > 
                                    <input type="password" id="pass" placeholder="Nhập Lại Mật Khẩu Mới" > 
                                  
                                    <div class="wrap-icon-login">
                                       
                                    </div>
                                    <button type="submit" onclick="get()">Đổi Mật Khẩu</button>
                                </form> 
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lib -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="js/menu.js"></script>

</body>
</html>
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
    <link rel="stylesheet" href="css/admin.css">
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
                    <li class="side-bar-tag" >
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
                    <div class="justify-content-center">
                        <div class="admin">
                            <div class="admin-avatar">
                                <img src="../imgs/admin/avatar1.jpg">
                            </div>
                            <b class="b">Tn Lương</b>
                                <form class="admin-info wrap-form needs-validation" novalidate>
                                    <div class="box">
                                        <input type="file" name="avatar-admin" id="file-3" class="inputfile inputfile-3" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Change avatar&hellip;</span></label>
                                    </div>
                                    <div class="row form1">
                                        <p>Họ và Tên <span>*</span></p>
                                        <input type="text" required class="form-control" id="validationTooltip01">
                                    </div>
                                    
                                    <div class="row form1">
                                        <p>Địa chỉ <span>*</span></p>
                                        <input type="text" required class="form-control" id="validationTooltip01">
                                    </div>
                                    
                                    <div class="row form1">
                                        <p>Điện thoại <span>*</span></p>
                                        <input type="text" required class="form-control contact-form-control-phone" maxlength="12" minlength="6" id="validationTooltip01">
                                    </div>
                        
                                    <div class="row form1">
                                        <p>Email</p>
                                        <input type="text">
                                    </div>
                        
                                    <div class="row form1">
                                        <p>Facebook</p>
                                        <input type="text">
                                    </div>
                        
                                    <div class="row form1">
                                        <p>Thông lin liên lạc khác</p>
                                        <textarea type="text">
                        
                                        </textarea>
                                    </div>
                                    
                                    <button type="submit">Lưu thay đổi</button>
                                </form>
                            
                        </div>
                       
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- lib -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- js -->
    <script src="js/menu.js"></script>
    <script src="js/admin.js"></script>

</body>
</html>
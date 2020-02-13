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
    <link rel="stylesheet" href="css/news.css">
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
                    <li class="side-bar-tag active">
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
                <div class="form-product">
                        <form class="wrap-form needs-validation" novalidate>
                                <b class="form-title">Sản Phẩm</b>
                                <div class="section-title">
                                    <b>
                                        Thêm sửa sản phẩm
                                    </b>
                                </div>
                                <div class="row form1">
                                        <p>id <span>*</span></p>
                                        <input type="text" disabled class="form-control" id="validationTooltip01">
                                </div>
                                <div class="row form1">
                                    <p>Tên sản phẩm <span>*</span></p>
                                    <input type="text" required class="form-control" id="validationTooltip01">
                                </div>
                                
                                <div class="row form1">
                                    <p>Địa chỉ <span>*</span></p>
                                    <input type="text" required class="form-control" id="validationTooltip01">
                                </div>
                                
                                <div class="row form1">
                                    <p>Giá sản phẩm <span>*</span></p>
                                    <input type="text" required class="form-control contact-form-control-phone" id="validationTooltip01">
                                </div>
                    
                                <div class="row form1">
                                    <p>Giới Thiệu</p>
                                    <input type="text">
                                </div>
                    
                                <div class="row form1">
                                    <p>Nguồn gốc</p>
                                    <textarea type="text">
                    
                                    </textarea>
                                </div>
                    
                                
                                <div class="g-recaptcha" style="margin-left: auto; margin-right: auto; margin-top: 15px; width: 300px;" data-sitekey="6LcyUWkUAAAAAFBkGtr1tAJnbrbTA_Y9wQURcSBv"></div>
                                <button type="submit">Lưu</button>
                            </form>
                </div>
                <div class="table-product col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Giá sản phẩm</th>
                                <th scope="col">Giới thiệu</th>
                                <th scope="col">Chi tiết</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
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
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
    <link rel="stylesheet" href="css/store.css">
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
                        <li class="menu-tag  ">
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
                        <li class="menu-tag active-menu ">
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
    <!-- 1 banner slide show -->  
    <div class="container">
        <div class="container-slide">
            <div class="mySlides row no-gutters">
                <div class="numbertext">1 / 6</div>
                <img class="col" src="../imgs/store-1.jpg" >
                <img class="col" src="../imgs/side-store.jpg">
            </div>
    
            <div class="mySlides row no-gutters">
                <div class="numbertext">2 / 6</div>
                <img  class="col" src="../imgs/store-2.jpg">
                <img class="col" src="../imgs/side-store.jpg">
            </div>
    
            <div class="mySlides row no-gutters">
                <div class="numbertext">3 / 6</div>
                <img class="col" src="../imgs/store-3.jpg" >
                <img class="col" src="../imgs/side-store.jpg">
            </div>
        
            <div class="mySlides row no-gutters">
                <div class="numbertext">4 / 6</div>
                <img class="col" src="../imgs/store-4.jpg" >
                <img class="col" src="../imgs/side-store.jpg">
            </div>
    
            <div class="mySlides row no-gutters">
                <div class="numbertext">5 / 6</div>
                <img class="col" src="../imgs/store-5.jpg">
                <img class="col" src="../imgs/side-store.jpg">
            </div>
        
            <div class="mySlides row no-gutters">
                <div class="numbertext">6 / 6</div>
                <img class="col" src="../imgs/store-6.jpg" >
                <img class="col" src="../imgs/side-store.jpg">
            </div>
        
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
    
            <div class="caption-container">
                <p id="caption"></p>
            </div>
    
            <div class="row no-gutters">
                <div class="col">
                    <img class="choose cursor" src="../imgs/store-1.jpg" alt="Cao Thắng">
                    <p class="choose-b "  onclick="currentSlide(1)">
                        86 - 88 Cao Thắng, Quận 3, TP. HCM
                    </p>
                </div>
                <div class="col">
                    <img class="choose cursor" src="../imgs/store-2.jpg"  alt="Cách Mạng Tháng 8">
                    <p class="choose-b"  onclick="currentSlide(2)">
                        130 Cách Mạng Tháng 8, Quận 3, TP. HCM
                    </p>
                </div>
                <div class="col">
                    <img class="choose cursor" src="../imgs/store-3.jpg"   alt="Bàu Cát">
                    <p class="choose-b" onclick="currentSlide(3)">
                        112 Bàu Cát, Quận Tân Bình, TP. HCM
                    </p>
                </div>
                <div class="col">
                    <img class="choose cursor" src="../imgs/store-4.jpg"   alt="Võ Văn Ngân">
                    <p class="choose-b" onclick="currentSlide(4)">
                        114 Võ Văn Ngân, P. Bình Thọ, Quận Thủ Đức, TP. HCM
                    </p>
                </div>
                <div class="col">
                    <img class="choose cursor" src="../imgs/store-5.jpg"   alt="Sư Vạn Hạnh">
                    <p class="choose-b" onclick="currentSlide(5)">
                        798 Sư Vạn Hạnh, P. 12, Quận 10, TP. HCM
                    </p>
                </div>    
                <div class="col">
                    <img class="choose cursor" src="../imgs/store-6.jpg"  alt="Lý Thường Kiệt">
                    <p class="choose-b"  onclick="currentSlide(6)">
                        249 Lý Thường Kiệt, Quận 11, TP. HCM
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- 2 banner Intro -->
    <div class="intro">
        <div class="container center">
            <div class="intro-title">
                <b>
                    <i class="fas fa-hashtag"></i>ATTHECOFFEEHOME
                </b>
            </div>
            <div class="intro-para">
                <p>
                        Kết nối với Instagram (chính thức) của chúng tôi tại <span>@thecoffeehousevn.</span>
                    <br>Khi bạn đăng tải những khoảnh khắc của mình với The Coffee House, hãy nhớ <span> <i class="fas fa-hashtag"></i>atthecoffeehouse</span> để chúng tôi có thể chia sẻ lại trải nghiệm của bạn với mọi người.
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="intro-section">
                        <img src="../imgs/i-1.jpg">
                        <div class="intro-section-p">
                            <i class="far fa-heart"></i>
                            <p>
                                Cold Brew Phúc Bồn Tử 
                                <br>
                                Bạn đã sẵn sàng để ngâm mình vào làn sóng Cold Brew - xu hướng thưởng thức mới của người yêu cà phê trên thế giới?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="intro-section">
                        <img src="../imgs/i-2.jpg">
                        <div class="intro-section-p">
                            <i class="far fa-heart"></i>
                            <p>
                                Cold Brew Phúc Bồn Tử - Thử Là Phê
                                <br>
                                Bạn đã sẵn sàng để ngâm mình vào làn sóng Cold Brew - xu hướng thưởng thức mới của người yêu cà phê trên thế giới?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="intro-section">
                        <img src="../imgs/i-3.jpg">
                        <div class="intro-section-p">
                            <i class="far fa-heart"></i>
                            <p>
                                Cam Đá Xay
                                <br>
                                Bạn đã sẵn sàng để ngâm mình vào làn sóng Cold Brew - xu hướng thưởng thức mới của người yêu cà phê trên thế giới?
                            </p>
                        </div>    
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="intro-section">
                        <img src="../imgs/i-4.jpg">
                        <div class="intro-section-p">
                            <i class="far fa-heart"></i>
                            <p>
                                Oolong Phúc Bồn Tử
                                <br>
                                Bạn đã sẵn sàng để ngâm mình vào làn sóng Cold Brew - xu hướng thưởng thức mới của người yêu cà phê trên thế giới?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="intro-section">
                        <img src="../imgs/i-5.jpg">
                        <div class="intro-section-p">
                            <i class="far fa-heart"></i>
                            <p>
                                Phúc Bồn Tử 
                                <br>
                                Bạn đã sẵn sàng để ngâm mình vào làn sóng Cold Brew - xu hướng thưởng thức mới của người yêu cà phê trên thế giới?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="intro-section">
                        <img src="../imgs/i-6.jpg">
                        <div class="intro-section-p">
                            <i class="far fa-heart"></i>
                            <p>
                                Cold Brew Phúc Bồn Tử - Thử Là Phê
                                <br>
                                Bạn đã sẵn sàng để ngâm mình vào làn sóng Cold Brew - xu hướng thưởng thức mới của người yêu cà phê trên thế giới?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="intro-section">
                        <img src="../imgs/i-7.jpg">
                        <div class="intro-section-p">
                            <i class="far fa-heart"></i>
                            <p>
                                Cold Brew Phúc Bồn Tử - Thử Là Phê
                                <br>
                                Bạn đã sẵn sàng để ngâm mình vào làn sóng Cold Brew - xu hướng thưởng thức mới của người yêu cà phê trên thế giới?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="intro-section">
                        <img src="../imgs/i-8.jpg">
                        <div class="intro-section-p">
                            <i class="far fa-heart"></i>
                            <p>
                                Cold Brew Phúc Bồn Tử - Thử Là Phê
                                <br>
                                Bạn đã sẵn sàng để ngâm mình vào làn sóng Cold Brew - xu hướng thưởng thức mới của người yêu cà phê trên thế giới?
                            </p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <!-- js -->
    <script src="js/store.js"></script>
    <script src="js/common.js"></script>

</body>
</html>
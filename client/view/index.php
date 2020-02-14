
    <!-- 1 banner slide show -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide ">
            <img src="../imgs/slide1.png"> 
          </div>
          <div class="swiper-slide">
            <img src="../imgs/slide2.png"> 
          </div>
          <div class="swiper-slide">
            <img src="../imgs/slide3.png"> 
          </div>
        </div>
      
        <div class="swiper-pagination"></div>
    
        <div class="fas fa-align-right"></div>
        <div class="fas fa-align-left"></div>
    </div>
    <!-- 2 banner Menu -->
    <div class="product">
        <div class="container center">
            <div class="row justify-content-between">
                <div class="col-6 product-title">
                    <b>MENU</b>
                </div>
                <div class="col-6 more">
                    <a href="menu.php">
                        <b>See More</b>
                    </a>
                    
                </div>
            </div>
            <div class="row justify-content-center">
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
    <!-- 3 banner Intro -->
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
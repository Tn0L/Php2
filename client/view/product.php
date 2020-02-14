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
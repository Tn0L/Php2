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
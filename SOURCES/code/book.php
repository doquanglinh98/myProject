<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking Movie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="shortcut icon" href="https://www.galaxycine.vn/media/2018/2/7/logo_1517999536227.png" type="image/x-icon">

</head>
<body style="   background-color: aqua;">
<div class="main">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">BookingMovie</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="#">Mua vé</a></li>
                        <li><a href="#">Lịch chiếu</a></li>
                        <li><a href="#">Khuyến mại</a></li>
                        <li><a href="#">Tuyển dụng</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" action="/action_page.php">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm tên phim">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                <!--Login-->
                <button onclick="document.getElementById('id01').style.display='block'" type="button" class="btn" style="margin-left: 500px;margin-top:8px;">Đăng nhập</button>
                <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng nhập</button> -->


                      <button onclick="document.getElementById('id02').style.display='block'" type="button" class="btn" style=" margin-top: 8px;">Đăng ký</button>
                <!-- <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Đăng nhập</button> -->

                </div>
            </div>
            </nav>

            
                <!-- Slideshow  -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="anh1.jpg" style="width:100%">
            <!-- <div class="text">WELCOME TO BOOKING MOVIE!</div> -->
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="anh2.jpg" style="width:100%">
            <div class="text">WELCOME TO BOOKING MOVIE!</div>
            </div>
        
            <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="anh3.jpg" style="width:100%">
            <div class="text">WELCOME TO BOOKING MOVIE!</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="anh4.jpg" style="width:100%">
                <div class="text">WELCOME TO BOOKING MOVIE!</div>
                </div>
        
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <!--Menu phim đang chiếu, sắp chiếu-->
            <nav class="navphimdangchieu" style="text-align:center;white-space: nowrap; margin-top:40px;">
                <a class="tog" data-toggle="tab" href="#">PHIM ĐANG CHIẾU
                <a class="tog" data-toggle="tab" href="#" style="padding-left:20px;">PHIM SẮP CHIẾU
            </nav>

            <!--Danh sach phim-->
            <br><nav  class=listphim ">
                      <!--List trailer phim-->  
                      <div  class="newspaper" style="margin-left:50px;">
                        <div class="phadao">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/mntFqBBrU_A?autoplay=1">
                            </iframe>
                             <h4 onmousemove="myFunction(this)" onmouseout="clearCoor(this)">Wreck it ralph 2-Phá đảo thế giới ảo</h4>
                            <h5>113 Phút</h5>
                           <!-- <button class="muave">MUA VÉ</button> -->
                            <!-- <a class="thaydoi">
                                Diễn đàn Cấp cao Du lịch Việt Nam 2018 – Vietnam Travel & Tourism Summit 2018 Diễn đàn Cấp cao Du lịch Việt Nam 2018 – Vietnam Travel & Tourism Summit 2018 </a> -->
                                <!-- <br> <button class="muave">MUA VÉ</button> -->
                            </div>

                        <div class="robin">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/QbYyQpGg-QU?autoplay=1">
                               
                            </iframe>
                            <h4>Park Hang Seo-Người truyền lửa</h4>
                            <h5>118 Phút</h5>
                            <!-- <button class="muave" >MUA VÉ</button> -->
                            <!-- <a class="thaydoi">
                                Diễn đàn Cấp cao Du lịch Việt Nam 2018 – Vietnam Travel  Việt Nam.</a> -->
                            <!-- <br> <butto class="muave">MUA VÉ</button> -->
                        </div>

                        <div class="aquaman">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/WDkg3h8PCVU?autoplay=1">
                            
                            </iframe>
                            <h4 >Aquaman </h4>
                            <h5>122 Phút</h5>
                             <!-- <button class="muave">MUA VÉ</button> -->
                            <!-- <a class="thaydoi">Phim kể về cuộc phưu lưu....</a> -->
                            <!-- <br> <butto class="muave">MUA VÉ</button>> -->
                        </div>
                         <!--Read More list phim-->
                    
            
                      </div>
                   
                 </nav>

                  <!-- tool box đặt vé -->

                  
                  
                <nav class="navbar navbar-inverse" style="    margin-left: 350px; margin-right: 350px;margin-top:50px;padding-bottom: 10px;">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#"></a>
                    </div>
                    <ul class="nav navbar-nav">
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chọn phim <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style=" margin-left: 70px;">Chọn lịch chiếu <span class="caret"></span></a>
                        <ul class="dropdown-menu" style="margin-left: 70px;">
                        <li><a href="#">Vui lòng chọn phim</a></li>
                        <!-- <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style=" margin-left: 70px;">Chọn suất chiếu <span class="caret"></span></a>
                        <ul class="dropdown-menu"  style="margin-left: 70px;">
                        <li><a href="#">Vui lòng chọn phim và lịch chiếu</a></li>
                        <!-- <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li> -->
                        </ul>
                    </li>
                    </ul>
                    <button style=" margin-left: 70px;margin-top: 10px;">MUA VÉ NGAY</button>
                </div>
                </nav>
                
                    
               

            <!--read more-->
             <!-- <br><button  href="javascript:showMore()" id="link" style="float:right;margin-right:100px;">Read More</button> -->

             <!--Card thành viên-->
             <nav class="navphimdangchieu" style="text-align:center;white-space: nowrap; margin-top:40px;">
                <!-- <a class="tog" data-toggle="tab" href="#">BOOKING MOVIE MEMBER -->
               
               
             </nav>
             <div class="thanhvien" style="margin-top:100px;color:blue;   ">
                <div style="float:right;width:50%;">
                <img src="card2.png" alt="bookingcinema" style="">
                </div>   

                <div style="float:left;width:50%;height:339px;">
                <a style="margin-left: 200px;">BOOKING MOVIE MEMBER</a>
                <br><a style="white-space: pre; text-decoration: none;">
                Đăng ký thành viên Booking Movie để được giảm giá khi mua vé hoặc đồ ăn,
                thức uống và nhiều ưu đãi khác.Booking Movie gửi thông tin mới nhất về phim,
                chương trình khuyến mãi, dịch vụ mới đến khách hàng</a>
                <br><button style="margin-left: 200px;margin-top :15px;">ĐĂNG KÝ NGAY</button>
                </div>
                <!-- <br><button style="margin-left: 200px;">ĐĂNG KÝ NGAY</button> -->
             </div>

             <!--giới thiệu chung-->

                 <a style="margin-top:30px;margin-left:200px;">GIỚI THIỆU CHUNG</a>
                <!-- <div style="width:800px;margin-left: 350px;margin-right:350px;height:auto;"> -->
             
              <a style="white-space: pre;text-align:center;  text-decoration: none;">

                Booking Movie là website đặt vé trực tuyến của DQL CINEMA CENTER,
                là đơn vị sự nghiệp văn hóa có thu, trực thuộc Bộ Văn hóa,Thể thao
                và Du lịch, được thành lập vào ngày 29/12/1997. Trung tâm có chức
                năng tổ chức chiếu phim phục vụ các nhiệm vụ chính trị, xã hội, 
                hợp tác quốc tế;điều tra xã hội học về nhu cầu khán giả để phục vụ
                cho công tác định hướng phát triển ngành Điện ảnh; trưng bày điện
                ảnh và tổ chức các hoạt động biểu diễn nghệ thuật.
               
                </a>
              <!-- <img src=ggmap1.jpg style="text-align:center;width:600px;margin-left: 350px;margin-right:350px;height:auto;">
              <h4>Vị trí</h4>
              <img src=movie1.jpg style="text-align:center;width:600px;margin-left: 350px;margin-right:350px;height:auto;">
              <h4>Quầy vé</h4>
              <img src=phongchieu.jpg style="text-align:center;width:600px;margin-left: 350px;margin-right:350px;height:auto;">
              <h4>Phòng chiếu</h4>
              <img src=movie2.jpg style="text-align:center;width:600px;margin-left: 350px;margin-right:350px;height:auto;">
              <h4>Đội ngũ nhân viên</h4>
            

               -->
               
                   <!-- <div style="float:left;height:auto;">
                       <img  src=ggmap1.jpg style="text-align:center;width:546px;height:339px;margin-left:200px;border-radius: 50%;">
                       <h4 style="margin-left:450px;">Vị trí</h4>

                    </div> -->

                    <div style="height:auto;margin-left:200px">
                    <img   src=movie1.jpg style="text-align:center;width:546px;height:339px;margin-right:200px;border-radius: 50%;">
                    <h4 style="margin-left:250px;">Quầy vé</h4>

                    </div>
                

                
                   <div style="height:auto;margin-left:600px">
                       <img   src=phongchieu.jpg style="text-align:center;width:546px;height:339px;margin-left:200px;border-radius: 50%;">
                       <h4 style="margin-left:450px;">Phòng chiếu</h4>

                    </div>
                    

                    <div style="height:auto;margin-left:200px">
                    <img  src=movie2.jpg style="text-align:center;width:546px;height:339px;margin-right:200px;border-radius: 50%;">
                    <h4 style="margin-left:250px;">Đội ngũ nhân viên</h4>

                    </div>
                    <div style="height:auto;margin-left:800px">
                    <img  src=logo1.png style="text-align:center;width:546px;height:339px;margin-right:200px;border-radius: 50%;">
                    <h4 style="margin-left:250px;">Thương hiệu</h4>

                    </div>
               

                <!--Footer-->
                <div  style="width:auto;height:auto;margin-top:100px;padding-bottom: 150px;padding-top: 100px;background-color: black;color: blanchedalmond;">
                <div style="width:500px;height:auto;float:left;margin-left:250px;">
                    <p  style="text-decoration: underline;">Điều khoản</p>
                    <ul>Quy định thành viên</ul>
                    <ul>Điều khoản</ul>
                </div>

                 <div style="width:500px;height:auto;float:right;margin-right:250px;">
                    <p style="text-decoration: underline;">Liên hệ với chúng tôi</p>
                    <ul>Hotline : 0961 058 740</ul>
                    <ul>Email : quanglinh936@gmail.com</ul>
                </div>



                </div>



                <!--Form login-->
                
            <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng nhập</button> -->
            
            <div id="id01" class="modal">
            


            <form  method="post" id="bhd-form-login-top" novalidate="novalidate" style="width: auto;
            height:auto;
            float: right;
            padding-right: 30px;
            margin-right: 50px;
            margin-top: 50px;
            background-color: white;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 40px;">
            
                            <span id="reauth-email" class="reauth-email"></span>

                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <div id="remember" class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                            <br> <a href="#" class="forgot-password">
                            Forgot password?
                            </a>
                            <button type="button"  style="float:right;" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <!-- <a href="#"  onclick="document.getElementById('id02').style.display='none'"  class="create acc" style="float:right;"> -->
                            <!-- <a onclick="openW()">Create account!</a> -->
                            
                          <!-- <a  href="#" onclick="openFun()"   style="float:right;">

                                Create account!
                            </a> -->

                    
            </form>
            </div>

            
            <div id="id02" class="modal">
            


            <form  method="post" id="bhd-form-login-top" novalidate="novalidate" style="width: auto;
            float: right;
            color:dankgreen;
            height:auto;
            padding-right: 30px;
            margin-right: 50px;
            margin-top: 50px;
            background-color: white;
            padding-bottom: 10px;
            padding-top: 10px;
            padding-left: 40px;">


                
                
                <label for="email"><b>Email</b></label>
                <br><input type="text" placeholder="Enter Email" name="email" required>

                <br><label for="psw"><b>Password</b></label>
                <br> <input type="password" placeholder="Enter Password" name="psw" required>

                <br><label for="psw-repeat"><b>Repeat Password</b></label>
                <br><input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                
                <br><label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>


                <br> <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn" style="float:right">Sign Up</button>
                </div>
                    
                            


</div>
<script src="script.js"></script>
</body>
</html>

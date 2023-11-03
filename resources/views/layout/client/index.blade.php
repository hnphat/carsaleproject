<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <title>Welcome</title>
    <base href="{{asset('')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>       
        @font-face {
            font-family: HyundaiSansHeadBold;
            src: url('fonts/HyundaiSansHead-Bold.otf');
        }

        @font-face {
            font-family: HyundaiOfficeBold;
            src: url('fonts/HyundaiSansText-Bold.otf');
        }

        @font-face {
            font-family: HyundaiOfficeRegular;
            src: url('fonts/HyundaiSansText-Regular.otf');
        }
        
        .hyundai-headFont {
            font-family: "HyundaiSansHeadBold", cursive, sans-serif;
        }

        .hyundai-normalfont {
            font-family: "HyundaiOfficeRegular", cursive, sans-serif;
        }

        .hyundai-boldfont {
            font-family: "HyundaiOfficeBold", cursive, sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{asset('')}}{{mix('css/appclient.css')}}" />
</head>
<body>

<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-md-6 text-left">
            <img id="logoleft" src="{{asset('')}}/images/header/logoleft.png" alt="Logo left">
        </div>
        <div class="col-md-6 text-right">
            <img id="logoright" src="{{asset('')}}/images/header/logoright.png" width="300" height="auto" alt="Logo right">
        </div>
    </div>
</div>

<div class="container" id="menu">
    <nav class="navbar navbar-expand-md">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-align-justify"></span>
    </button>
    <div class="navbar-brand hyundai-headFont text-left" id="navformobile">
            <img id="logohyundai" src="{{asset('')}}/images/header/logohyundai.png" alt="Logo hyundai">
            <img id="logohyundaiag" src="{{asset('')}}/images/header/logoright.png" width="300" height="auto" alt="Logo Hyundai An Giang">
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav hyundai-headFont">
        <li class="nav-item">
            <a class="nav-link" href="#">TRANG CHỦ</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SẢN PHẨM
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">DỊCH VỤ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">CSKH</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">TIN TỨC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">ĐĂNG KÝ LÁI THỬ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">TUYỂN DỤNG</a>
        </li>      
        </ul>
    </div>
    </nav>
</div>

<div id="slider" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('')}}/images/slider/t.png" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="{{asset('')}}/images/slider/c.png"  alt="Chicago">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slider" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br/>
<div id="sanPham" class="container hyundai-headFont">
    <h3>SẢN PHẨM KINH DOANH</h3><br/>
    <div class="row text-center">
        <div class="col-xs shadow_box">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <h5>Accent 2023 </h5> 
                <h4>600.000.000</h4>
            </div>            
        </div>
        <div class="col-xs shadow_box">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <h5>Accent 2023 </h5> 
                <h4>600.000.000</h4>
            </div>    
        </div>
        <div class="col-xs shadow_box">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <h5>Accent 2023 </h5> 
                <h4>600.000.000</h4>
            </div>    
        </div>
        <div class="col-xs shadow_box">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <h5>Accent 2023 </h5> 
                <h4>600.000.000</h4>
            </div>            
        </div>
        <div class="col-xs shadow_box">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <h5>Accent 2023 </h5> 
                <h4>600.000.000</h4>
            </div>    
        </div>
        <div class="col-xs shadow_box">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <h5>Accent 2023 </h5> 
                <h4>600.000.000</h4>
            </div>    
        </div>
    </div>
</div>
<br/>
<div id="tinTuc" class="container hyundai-normalfont">
    <h3 class="hyundai-headFont">TIN TỨC KHUYẾN MÃI</h3><br/>
    <div class="row text-justify">
        <div class="col-xs tinTucShadow">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <div class="tinTucTilte">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>            
        </div>
        <div class="col-xs tinTucShadow">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <div class="tinTucTilte">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>            
        </div>
        <div class="col-xs tinTucShadow">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <div class="tinTucTilte">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>            
        </div>
        <div class="col-xs tinTucShadow">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <div class="tinTucTilte">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>            
        </div>
    </div>
</div>
<br/>
<div id="tinTuc" class="container hyundai-normalfont">
    <h3 class="hyundai-headFont">TIN HYUNDAI AN GIANG</h3><br/>
    <div class="row text-justify">
        <div class="col-xs tinTucShadow">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <div class="tinTucTilte">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>            
        </div>
        <div class="col-xs tinTucShadow">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <div class="tinTucTilte">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>            
        </div>
        <div class="col-xs tinTucShadow">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <div class="tinTucTilte">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>            
        </div>
        <div class="col-xs tinTucShadow">
            <div>
                <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                <div class="tinTucTilte">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>            
        </div>
    </div>
</div>
<br/>
<div id="tinTucKhac" class="container hyundai-normalfont">
    <h3 class="hyundai-headFont">TIN TỨC VÀ CHIA SẼ KINH NGHIỆM</h3><br/>
    <div class="row text-justify">
        <div class="col-xs" id="tinTucKhacPanel"> 
            <div class="row rowBoxShadow">
                <div class="box-img">
                    <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                </div>
                <div class="boxTitle">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>     
            <div class="row rowBoxShadow">
                <div class="box-img">
                    <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                </div>
                <div class="boxTitle">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div>       
            <div class="row rowBoxShadow">
                <div class="box-img">
                    <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                </div>
                <div class="boxTitle">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div> 
            <div class="row rowBoxShadow">
                <div class="box-img">
                    <img  src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
                </div>
                <div class="boxTitle">
                    <h5 class="hyundai-headFont">Khuyến Mãi Hyundai Accent Tháng 10 năm 2023 </h5> 
                    <p>Đây là khuyến mãi đặc biệt chỉ có trong tháng 10 và có thể kết thúc nhanh</p>
                </div>
            </div> 
        </div>
        <div class="col-xs" id="quangCaoPanel">
            <div>
                <img src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
            </div>   
            <div>
                <img src="{{asset('')}}/images/car/demo.jpg" alt="Demo car">
            </div>   
        </div>
    </div>
</div>

<hr/>
<div id="aboutUs" class="container-fluid hyundai-normalfont">
    <h3 class="hyundai-headFont text-center">TẠI SAO CHỌN CHÚNG TÔI</h3><br/>
    <div class="row">
        <div class="col-sm-4 text-center">
            <img  src="{{asset('')}}/images/about/camket.png" alt="Demo car">
            <p>CAM KẾT GIÁ BÁN RẺ NHẤT</p>
        </div>
        <div class="col-sm-4 text-center">
            <img  src="{{asset('')}}/images/about/km.png" alt="Demo car">
            <p>ĐẠI LÝ KHUYẾN MÃI NHIỀU NHẤT</p>
        </div>
        <div class="col-sm-4 text-center">
            <img  src="{{asset('')}}/images/about/sp.png" alt="Demo car">
            <p>CHĂM SÓC KHÁCH HÀNG NHIỆT TÌNH NHẤT</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="text-center hyundai-headFont">
        <h5>QUÝ KHÁCH CẦN GÌ CHÚNG TÔI TƯ VẤN NGAY, VUI LÒNG ĐỂ LẠI THÔNG TIN</h5>
    </div>
    <div class="row ">
      <div class="col mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">       
                <form action="" autocomplete="off">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="form_need"><strong>Quý khách quan tâm dòng xe nào?</strong></label>
                                <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                    <option value="" selected disabled>--Select Your Issue--</option>
                                    <option >Request Invoice for order</option>
                                    <option >Request order status</option>
                                    <option >Haven't received cashback yet</option>
                                    <option >Other</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="form_name"><strong>Họ tên</strong></label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Họ và tên" required="required" data-error="Firstname is required.">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="form_lastname"><strong>Số điện thoại</strong></label>
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Số điện thoại" required="required" data-error="Lastname is required.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="GỬI THÔNG TIN" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
<br>
<div id="hotlines" class="container-fluid">
    <div class="container hyundai-normalfont">
        <div class="row">
            <div class="col-sm-3 text-center">
                <h5>0901 123 456</h5>
                <p>Hotline kinh doanh</p>
            </div>
            <div class="col-sm-3 text-center">            
                <h5>0901 123 456</h5>
                <p>Hotline kinh doanh</p>
            </div>
            <div class="col-sm-3 text-center">            
                <h5>0901 123 456</h5>
                <p>Hotline kinh doanh</p>
            </div>
            <div class="col-sm-3 text-center">            
                <h5>0901 123 456</h5>
                <p>Hotline kinh doanh</p>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="container-fluid hyundai-normalfont">
    <div class="infomation">
        <p>Hyundai An Giang <br/>
        Địa chỉ: Khóm Trung Thạnh, Phường Mỹ Thới, Thành phố Long Xuyên, Tỉnh An Giang <br/>
        Số điện thoại: 0868.50.50.50 <br/>
        Email: phongcskh@hyundaiangiang.com</p>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15699.178299568262!2d105.45625730000003!3d10.358304045070984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53279b074297bcfc!2zQ8O0bmcgdHkgVE5ISCBUTSAmIERWIMOUIHTDtCBQaMO6YyBBbmg!5e0!3m2!1svi!2s!4v1576569042693!5m2!1svi!2s" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-sm-3 infomation">
            <h5>DỊCH VỤ</h5>
            <p>Chương trình dịch vụ<br/>
            Bảo hành<br/>
            Phụ tùng và phụ kiện chính hãng<br/>
            Đặt lịch hẹn sửa chữa</p>
        </div>
        <div class="col-sm-3 infomation">
            <h5>MUA XE</h5>
            <p>Đăng ký tư vấn và chọn xe<br/>
            Đăng ký lái thử<br/>
            Góp ý khách hàng</p>
        </div>
        <div class="col-sm-3 infomation">
            <h5>NHẬN ƯU ĐÃI MỚI NHẤT</h5>
            <p>Kết nối với chúng tôi: <span class="fa fa-facebook-official"></span></p>
        </div>
    </div>
</div>
<script src="{{asset('')}}{{mix('js/appclient.js')}}"></script>
</body>
</html>
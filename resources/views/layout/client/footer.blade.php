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
            <div class="col-sm-4 text-center">
                <h5><a href="tel:0868505050">0868 50 50 50</a></h5>
                <p>Hotline kinh doanh</p>
            </div>
            <div class="col-sm-4 text-center">            
                <h5><a href="tel:0869505020">0869 50 50 20</a></h5>
                <p>Hotline dịch vụ</p>
            </div>
            <div class="col-sm-4 text-center">            
                <h5><a href="tel:0868505050">0868 50 50 50</a></h5>
                <p>Hotline CSKH</p>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="container-fluid hyundai-normalfont">
    <div class="infomation">
        <p>{{$data['tenCongTy']}} <br/>
        Địa chỉ: {{$data['diaChi']}} <br/>
        Số điện thoại: {{$data['soDienThoai']}} <br/>
        Email: {{$data['email']}}</p>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <iframe src="{{$data['srcMap']}}" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-sm-3 infomation">
            <h5>{{$data['title1']}}</h5>
            <p><a href="{{$data['t1linkrow1']}}">{{$data['t1row1']}}</a><br/>
            <a href="{{$data['t1linkrow2']}}">{{$data['t1row2']}}</a><br/>
            <a href="{{$data['t1linkrow3']}}">{{$data['t1row3']}}</a><br/>
            <a href="{{$data['t1linkrow4']}}">{{$data['t1row4']}}</a></p>
        </div>
        <div class="col-sm-3 infomation">
            <h5>{{$data['title2']}}</h5>
            <p>
                <a href="{{$data['t2linkrow1']}}">{{$data['t2row1']}}</a><br/>
                <a href="{{$data['t2linkrow2']}}">{{$data['t2row2']}}</a><br/>
                <a href="{{$data['t2linkrow3']}}">{{$data['t2row3']}}</a><br/><br/>
                <img src="{{asset('')}}/images/footer/bct.png" alt="BCT" width="180px">
            </p>
            
        </div>
        <div class="col-sm-3 infomation">
            <h5>NHẬN ƯU ĐÃI MỚI NHẤT</h5>
            <div>
                <p class="p-1">Quý khách sẽ không bỏ xót bất kỳ ưu đãi nào mới nhất từ Hyundai An Giang hãy để lại email để nhận những thông tin mới nhất</p>
                <form class="form-inline" action="/action_page.php">
                    <input type="emailnotify" placeholder="Địa chỉ email" id="email" width="100">                
                    &nbsp;<button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div><br/>
            <p>Kết nối với chúng tôi: 
                <a href="{{$data['facebook']}}"><img src="{{asset('')}}/images/footer/fb.png" alt="FB" width="50px"></a>
                &nbsp; 
                <a href="{{$data['zalo']}}"><img src="{{asset('')}}/images/footer/zalo.png" alt="FB" width="50px"></a>
                &nbsp; 
                <a href="{{$data['youtube']}}"><img src="{{asset('')}}/images/footer/youtube.png" alt="FB" width="50px"></a>
            </p>
        </div>
    </div>
    <div>
        <p id="copyright" class="hyundai-headFont">Copyright &copy; 2018 - 2023 by Hyundai An Giang</p>
    </div>
</div>
<div class="fixedBtn">
    <a href="tel:0868505050"><img src="{{asset('')}}/images/fixed/calling.gif" alt="calling" width="100px"></a><br/>
    &nbsp;<button class="btn btn-primary"> <span class="fa fa-calculator"></span> Báo giá</button> <button class="btn btn-primary"><span class="fa fa-car"></span> Đăng ký lái thử</button>
</div>
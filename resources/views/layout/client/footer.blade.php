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
            <p>
                Đăng ký tư vấn và chọn xe<br/>
                Đăng ký lái thử<br/>
                Góp ý khách hàng<br/><br/>
                <img src="{{asset('')}}/images/footer/bct.png" alt="FB" width="180px">
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
                <img src="{{asset('')}}/images/footer/fb.png" alt="FB" width="50px"> 
                &nbsp; 
                <img src="{{asset('')}}/images/footer/zalo.png" alt="FB" width="50px">
                &nbsp; 
                <img src="{{asset('')}}/images/footer/youtube.png" alt="FB" width="50px">
            </p>
        </div>
    </div>
    <div>
        <p id="copyright" class="hyundai-headFont">Copyright &copy; 2018 - 2023 by Hyundai An Giang</p>
    </div>
</div>
@extends('layout.client.index')
@section('title')
   Tin tức Hyundai An Giang
@endsection
@section('local_css')
@endsection
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
    <div id="tinTucKhac" class="container hyundai-normalfont">
        <h3 class="hyundai-headFont text-left">TIN KHUYẾN MÃI</h3><br/>
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
</div>
@endsection
@section('local_script')
@endsection
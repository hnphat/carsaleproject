@extends('layout.client.index')
@section('title')
   Chi tiết xe
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
   <div class="hyundai-normalfont">
        <div class="row">
            <div class="col-md-8">
                <img class="carimage" src="{{asset('')}}/images/car/democar.png" alt="Demo car">
                <h5 class="text-center"><img class="carcolor" src="{{asset('')}}/images/car/360.png" alt="Demo car"></h5>
            </div>
            <div class="col-md-4">
                <h3><strong>HYUNDAI SANTAFE</strong></h3>
                <h4><strong>Giá xe: <span class="text-danger">5,000,000,000</span></strong></h4>
                <h4><strong>Màu sắc: </strong>
                    <ul class="navbarcolor">
                        <li> 
                            <img class="carcolor" src="{{asset('')}}/images/car/democar.png" alt="Demo car">
                        </li>
                        <li> 
                            <img class="carcolor" src="{{asset('')}}/images/car/democar.png" alt="Demo car"> 
                        </li>
                        <li> 
                            <img class="carcolor" src="{{asset('')}}/images/car/democar.png" alt="Demo car"> 
                        </li>
                        <li> 
                            <img class="carcolor" src="{{asset('')}}/images/car/democar.png" alt="Demo car"> 
                        </li>
                        <li> 
                            <img class="carcolor" src="{{asset('')}}/images/car/democar.png" alt="Demo car"> 
                        </li>
                    </ul>         
                </h4>          
                <h5><strong>Kiểu dáng: </strong>SUV 7 chỗ</h5>
                <h5><strong>Hộp số: </strong>6 cấp</h5>
                <h5><strong>Nhiên liệu: </strong>Xăng</h5>
                <h5><strong>Số chỗ: </strong>5 chỗ</h5>
                <p class="text-center"><button class="btn btn-info">Nhận báo giá</button> &nbsp;
                <button class="btn btn-outline-danger">Gọi ngay</button></p>
                <button class="btn btn-warning" style="width:100%;">Đăng ký lái thử</button>
            </div>
        </div>
        <div class="row text-justify">
            <h2><strong>CHI TIẾT XE</strong></h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, molestias dolorum facilis assumenda impedit reiciendis et, maxime quas minima velit neque voluptatum dignissimos corrupti nulla nemo praesentium asperiores rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, molestias dolorum facilis assumenda impedit reiciendis et, maxime quas minima velit neque voluptatum dignissimos corrupti nulla nemo praesentium asperiores rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, molestias dolorum facilis assumenda impedit reiciendis et, maxime quas minima velit neque voluptatum dignissimos corrupti nulla nemo praesentium asperiores rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, molestias dolorum facilis assumenda impedit reiciendis et, maxime quas minima velit neque voluptatum dignissimos corrupti nulla nemo praesentium asperiores rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, molestias dolorum facilis assumenda impedit reiciendis et, maxime quas minima velit neque voluptatum dignissimos corrupti nulla nemo praesentium asperiores rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, molestias dolorum facilis assumenda impedit reiciendis et, maxime quas minima velit neque voluptatum dignissimos corrupti nulla nemo praesentium asperiores rerum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi esse, molestias dolorum facilis assumenda impedit reiciendis et, maxime quas minima velit neque voluptatum dignissimos corrupti nulla nemo praesentium asperiores rerum.

        </div>
   </div>
</div>
@endsection
@section('local_script')
@endsection
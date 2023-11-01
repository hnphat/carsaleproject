@extends('layout.server.index')
@section('title')
    <title>Quản lý tài khoản</title>
@endsection
@section('local_css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
@endsection
@section('content_header')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">QUẢN LÝ TÀI KHOẢN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý tài khoản</li>
            </ol>
          </div>
        </div>
      </div>
  </div>
@endsection
@section('content')
<div class="container_fluid">
  <button class="btn btn-success" id="add">Thêm mới</button><br/><br/>
  <div class="container_fluid">
    <table id="taiKhoanTable" class="display" style="width:100%">
        <thead>
        <tr class="bg-gradient-lightblue">
            <th>TT</th>
            <th>Tên tài khoản</th>
            <th>Email</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Tác vụ</th>                                        
        </tr>
        </thead>
    </table>
  </div>
</div>
@endsection
@section('local_script')
@endsection
@extends('Layout.layout');
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('student')}}" class="btn btn-success">Danh sách sinh viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('update',$sinhvien->id)}}" method="post">
                    @csrf
                    @method("POST")
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mã Sinh viên</label>
                                <input type="text" name="MaSV" value="{{$sinhvien->MaSV}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" name="HoTen" value="{{$sinhvien->HoTen}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ngày sinh</label>
                                <input type="date" name="NgaySinh" value="{{$sinhvien->NgaySinh}}" class="form-control">
                            </div>
                            
                        </div>
                        <div class="col-md-6">
            
                            <div class="form-group">
                                <label for="">Giới tính</label>
                                <select name="GioiTinh" class="form-select">
                                    <option value="Nam" value="{{$sinhvien->GioiTinh==="Nam" ? 'selected':""}}">Nam</option>
                                    <option value="Nu" value="{{$sinhvien->GioiTinh==="Nu" ? 'selected':""}}">Nữ</option>
                                </select>
                               
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="DiaChi" value="{{$sinhvien->DiaChi}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" name="SoDT" value="{{$sinhvien->SoDT}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
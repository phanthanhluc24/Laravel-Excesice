@extends('layout.layout')
@section('content') 
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('Layout.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sinh viên</th>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới Tính</th>
                            <th>Địa chỉ</th>
                            <th>Sđt</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach ($sinhvien as $key=> $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->MaSV}}</td>
                                <td>{{$item->HoTen}}</td>
                                <td>{{$item->NgaySinh}}</td>
                                <td>{{$item->GioiTinh}}</td>
                                <td>{{$item->DiaChi}}</td>
                                <td>{{$item->SoDT}}</td>
                                <td>
                                    <form action="{{route('delete',$item->id)}}" method="post">
                                        @csrf
                                        <a href="{{route('edit',$item->id)}}" class="btn btn-primary">Sửa</a>
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">xóa</button>
                                    </form>
                                </td>
                            </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
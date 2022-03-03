@extends('welcome')
@section('title','Danh sách tỉnh thành')
@section('content')
    <h1 style="text-align: center">Danh sách tỉnh thành </h1>
    <div class="col-12">
        @if (Session::has('success'))
            <p class="text-success">
                <i class="fa fa-check" aria-hidden="true"></i>
                {{ Session::get('success') }}
            </p>
        @endif
    </div>
    <a type="button" class="btn btn-success" href="{{route('cities.create')}}">Create</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên tỉnh thành</th>
        <th scope="col">Số khách hàng</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @if(count($cities) == 0)
        <tr>
            <td colspan="4">Không có dữ liệu</td>
        </tr>
    @else
        @foreach($cities as $key => $city)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $city->name }}</td>
                <td>{{ count($city->customers) }}</td>
                <td><a href="{{route('cities.edit',$city->id)}}">sửa</a></td>
                <td><a href="{{route('cities.destroy',$city->id)}}" class="text-danger"
                       onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
@endsection

@extends('instructor.instructor_dashboard')
@section('instructor')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách khóa học</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.course') }}" class="btn btn-primary px-5">Thêm khóa học </a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Ảnh</th>
                            <th>Tên khóa học</th>
                            <th>Danh mục</th>
                            <th>Giá bán</th>
                            <th>Thời lượng</th>
                            <th>Số học viên</th>
                            <th>Số bài học</th>
                            <th>Tạo bởi</th>
                            <th>Cập nhật lúc</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($courses as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset($item->course_image) }}" alt=""
                                         style="width: 70px; height:40px;"></td>
                                <td>{{ $item->course_name }}</td>
                                <td>{{ $item['category']['category_name'] }}</td>
                                <td>{{ number_format($item->selling_price, 0, '.', ',') }}<sup>₫</sup></td>
                                <td>{{ $item->duration }}</td>
                                <td>{{count( DB::table("orders") -> where("course_id", $item->id) ->get())}}</td>
                                <td>{{count( DB::table("course_sections") -> where("course_id", $item->id) ->get())}}</td>
                                <td>{{ $item['user']['name'] }}</td>
                                <td>
                                    @if($item -> updated_at)
                                        {{ $item->updated_at -> format('d/m/Y H:i') }}
                                    @else
                                        {{ $item-> created_at -> format('d/m/Y H:i')}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('course.all.lecture',$item->id) }}" class="btn btn-warning"
                                       title="Tất cả bài học"><i class="lni lni-list"></i> </a>

                                    <a href="{{ route('edit.course',$item->id) }}" class="btn btn-info"
                                       title="Chỉnh sửa"><i
                                            class="lni lni-eraser"></i> </a>
                                    <a href="{{ route('instructor.course.details',$item->id) }}" class="btn btn-success"><i
                                            class="lni lni-eye"></i></a>

{{--                                    <a href="{{ route('delete.course',$item->id) }}" class="btn btn-danger"--}}
{{--                                       id="delete"--}}
{{--                                       title="Xóa"><i class="lni lni-trash"></i> </a>--}}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>




@endsection

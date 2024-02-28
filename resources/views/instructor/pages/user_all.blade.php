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
                        <li class="breadcrumb-item active" aria-current="page">Tất cả học viên</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <div class="btn-group">
                        <a href="{{ route('instructor.add.user') }}" class="btn btn-primary  ">Thêm học viên </a>
                    </div>
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
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Khóa học</th>
                            <th>Cập nhật lúc</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($users as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img
                                        src="{{ (!empty($item->photo)) ? url('upload/user_images/'.$item->photo) : url('upload/no_image.jpg')}}"
                                        alt="" style="width: 70px; height:40px;"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
{{--                                    @if ($item->UserOnline())--}}
{{--                                        <span class="badge badge-pill bg-success">Bình thường</span>--}}
{{--                                    @else--}}
{{--                                        <span--}}
{{--                                            class="badge badge-pill bg-danger">{{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }} </span>--}}

{{--                                    @endif--}}
                                    {{ $item->address }}
                                </td>
                                <td>
                                    <ul>
                                        @foreach (\App\Models\Order::where('course_id',$course_id)->where('user_id',$item)->first() as $key=> $item)
                                            <li></li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    @if($item -> updated_at)
                                        {{ $item->updated_at -> format('d/m/Y H:i') }}
                                    @else
                                        {{ $item-> created_at -> format('d/m/Y H:i')}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('instructor.edit.user',$item->id) }}" title="Chỉnh sửa" class="btn btn-info">
                                        <i class="lni lni-eraser"></i> </a>
                                    <a href="{{ route('instructor.delete.user',$item->id) }}" class="btn btn-danger"
                                       id="delete">
                                        <i class="lni lni-trash"></i>
                                    </a>
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

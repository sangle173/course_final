@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')

    <div class="container-fluid">

        <div class="section-block mb-5"></div>
        <div class="dashboard-heading mb-5">
            <h3 class="fs-22 font-weight-semi-bold">Khóa học của bạn</h3>
        </div>
        <div class="dashboard-cards mb-5">

            @foreach ($mycourse as $item)
                <div class="card card-item card-item-list-layout">
                    <div class="card-image">
                        <a href="{{ route('course.view',$item->course_id) }}" class="d-block">
                            <img class="card-img-top" src="{{ (!empty(asset($item->course->course_image))) ? asset($item->course->course_image) : url('upload/no_image.jpg')}}"
                                 alt="Ảnh khóa học">
                        </a>

                    </div><!-- end card-image -->
                    <div class="card-body">
                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{ $item->course->label }}</h6>
                        <h5 class="card-title"><a
                                href="{{ route('course.view',$item->course_id) }}">{{ $item->course->course_name }}</a>
                        </h5>
                        <p class="card-text"><a href="#">{{ $item->course->user->name }}</a></p>
                        <div class="rating-wrap d-flex align-items-center py-2">
                            <div class="review-stars">
                                <span class="rating-number">4.4</span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star"></span>
                                <span class="la la-star-o"></span>
                            </div>
                            <span class="rating-total pl-1">(20,230)</span>
                        </div><!-- end rating-wrap -->
                        <ul class="card-duration d-flex align-items-center fs-15 pb-2">
                            <li class="mr-2">
                                <span class="text-black">Trạng thái:</span>
                                <span class="badge badge-success text-white">Đã xuất bản</span>
                            </li>
                            <li class="mr-2">
                                <span class="text-black">Thời lượng:</span>
                                <span>{{ $item->course->duration }} </span>
                            </li>
                            <li class="mr-2">
                                <span class="text-black">Bài học:</span>
                                <span>{{count( DB::table("course_sections") -> where("course_id", $item->course->id) ->get())}} bài</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center">
                            @if ($item->course->discount_price == NULL)
                                <p class="card-price text-black font-weight-bold">{{ number_format($item->course->selling_price, 0, '.', ',') }} vnd </p>
                            @else
                                <p class="card-price text-black font-weight-bold">{{ number_format($item->course->discount_price, 0, '.', ',') }} vnd <span class="before-price font-weight-medium">
{{ number_format($item->course->selling_price, 0, '.', ',') }} vnd</span></p>
                            @endif
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            @endforeach
        </div><!-- end col-lg-12 -->


    </div><!-- end container-fluid -->
@endsection

@extends('frontend.master')
@section('home')

@section('title')
 Tất cả khóa học | Luyện Thi Công Chức
@endsection
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area section-padding img-bg-2">
    <div class="overlay"></div>
    <div class="container">
        <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
            <ul class="generic-list-item generic-list-item-white generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="{{url('/')}}">Trang chủ</a></li>
                <li>Tất cả khóa học</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area section--padding">
    <div class="container">
        <div class="filter-bar mb-4">
            <div class="filter-bar-inner d-flex flex-wrap align-items-center justify-content-between">
                <p class="fs-14">Tìm thấy: <span class="text-black">{{ count($courses) }}</span> khóa học cho bạn</p>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="select-container select--container">
                        <select class="select-container-select">
                            <option value="">Tất cả khóa học</option>
                        @foreach ($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div><!-- end filter-bar-inner -->
        </div><!-- end filter-bar -->
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar mb-5">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Tìm kiếm</h3>
                            <div class="divider"><span></span></div>
                            <form>
                                <div class="form-group mb-0">
                                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="Tìm khóa học">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                        </div>
                    </div><!-- end card -->

                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Danh mục</h3>
                            <div class="divider"><span></span></div>
                            <ul class="generic-list-item">
                               @foreach ($categories as $cat)
                                <li><a href="{{ url('category/'.$cat->id.'/'.$cat->category_slug) }}">{{ $cat->category_name }}</a></li>
                               @endforeach

                            </ul>
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8">
                <div class="row">


     @foreach ($courses as $course)
    <div class="col-lg-6 responsive-column-half">
        <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
            <div class="card-image">
                <a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}" class="d-block">
                    <img class="card-img-top lazy" src="{{ asset($course->course_image) }}" data-src="images/img8.jpg" alt="Card image cap">
                </a>

                @php
                $amount = $course->selling_price - $course->discount_price;
                $discount = ($amount/$course->selling_price) * 100;
            @endphp


                <div class="course-badge-labels">
                    @if ($course->bestseller == 1)
                    <div class="course-badge">Bestseller</div>
                    @else
                    @endif

{{--                    @if ($course->discount_price == NULL)--}}
{{--                    <div class="course-badge blue">Mới</div>--}}
{{--                    @else--}}
{{--                    <div class="course-badge blue">{{ round($discount) }}%</div>--}}
{{--                    @endif--}}
                </div>
            </div><!-- end card-image -->
            <div class="card-body">
                <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">{{ $course->label }}</h6>
                <h5 class="card-title"><a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}">{{ $course->course_name }}</a></h5>
                <p class="card-text"><a href=" ">{{ $course['user']['name'] }}</a></p>
                <div class="d-flex justify-content-between align-items-center">
                    @if ($course->discount_price == NULL)
                        <p class="card-price text-black font-weight-bold">{{ number_format($course->selling_price, 0, '.', ',') }}<sup>₫</sup> </p>
                    @else
                        <p class="card-price text-black font-weight-bold">{{ number_format($course->discount_price, 0, '.', ',') }}<sup>₫</sup> <span class="before-price font-weight-medium">
{{ number_format($course->selling_price, 0, '.', ',') }}<sup>₫</sup> </span></p>
                    @endif
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col-lg-6 -->
      @endforeach


                </div><!-- end row -->
{{--                <div class="text-center pt-3">--}}
{{--                    <nav aria-label="Page navigation example" class="pagination-box">--}}
{{--                        <ul class="pagination justify-content-center">--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                    <span aria-hidden="true"><i class="la la-arrow-left"></i></span>--}}
{{--                                    <span class="sr-only">Previous</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Next">--}}
{{--                                    <span aria-hidden="true"><i class="la la-arrow-right"></i></span>--}}
{{--                                    <span class="sr-only">Next</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                    <p class="fs-14 pt-2">Showing 1-10 of 56 results</p>--}}
{{--                </div>--}}
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->









@endsection

@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="dashboard-heading mb-5">
        <h3 class="fs-22 font-weight-semi-bold">Khóa học của tôi</h3>
    </div>
    <div class="dashboard-cards">

        <ul class="nav nav-tabs generic-tab" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab"
                   aria-controls="overview" aria-selected="true">
                    Giới Thiệu
                </a>
            </li>
            <li class="nav-item mobile-menu-nav-item">
                <a class="nav-link" id="course-content-tab" data-toggle="tab" href="#course-content" role="tab"
                   aria-controls="course-content" aria-selected="false">
                    Bài Học
                </a>
            </li>
        </ul>
    </div>
    <div class="lecture-video-detail-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="course-content" role="tabpanel" aria-labelledby="course-content-tab">
                <div class="mobile-course-menu pt-4">
                    <div class="accordion generic-accordion generic--accordion" id="mobileCourseAccordionCourseExample">
                        @foreach($section as $item)
                            <div class="card">
                                <div class="card-header" id="mobileCourseHeadingOne{{$item ->id}}">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#mobileCourseCollapseOne{{$item ->id}}" aria-expanded="true"
                                            aria-controls="mobileCourseCollapseOne">
                                        <i class="la la-angle-down"></i>
                                        <i class="la la-angle-up"></i>
                                        <span class="fs-15"> {{$item ->section_title}}</span>
                                        <span class="course-duration">
                        </span>
                                    </button>
                                </div><!-- end card-header -->
                                <div id="mobileCourseCollapseOne{{$item ->id}}" class="collapse"
                                     aria-labelledby="mobileCourseHeadingOne"
                                     data-parent="#mobileCourseAccordionCourseExample">
                                    <div class="card-body p-0">
                                        <ul class="curriculum-sidebar-list">
                                            <li class="course-item-link active">
                                                <div class="course-item-content-wrap">
                                                    <div class="course-item-content">
                                                        <h4 class="fs-15">{{$item-> section_content}}</h4>
                                                        <div class="courser-item-meta-wrap">
                                                            <button type="button" class="btn btn-link"
                                                                    data-toggle="modal"
                                                                    data-target="#exampleModal{{$item->id}}">
                                                                <i class="lni lni-play"></i>Xem video
                                                            </button>

                                                            <div class="modal fade" id="exampleModal{{$item->id}}"
                                                                 tabindex="-1" role="dialog"
                                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">{{ $item->section_title }}</h5>
                                                                            <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <video id="my-video" class="video-js"
                                                                                   controls controlsList="nodownload"
                                                                                   preload="video-js vjs-default-skin vjs-big-play-centered"
                                                                                   width="470" height="264"
                                                                                   poster="https://d9wrv003o8xvb.cloudfront.net/thumb_0801180537104122.jpg"
                                                                                   data-setup='{}'>--}}
                                                                                <source
                                                                                    src="{{ asset($item->section_video) }}"
                                                                                    type="video/mp4">
                                                                                <source
                                                                                    src="{{ asset($item->section_video) }}"
                                                                                    type="video/webm">
                                                                                <p class="vjs-no-js">
                                                                                    To view this video please enable
                                                                                    JavaScript, and consider upgrading
                                                                                    to a
                                                                                    web browser that
                                                                                    <a href="http://videojs.com/html5-video-support/"
                                                                                       target="_blank">supports HTML5
                                                                                        video</a>
                                                                                </p>
                                                                            </video>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Đóng
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{{  asset($item->section_document) }}"
                                                           class="btn btn-link"
                                                           target="_blank" title="Tài liệu"><i
                                                                class="lni lni-download"></i> Xem tài
                                                            liệu </a>
                                                    </div><!-- end course-item-content -->
                                                </div><!-- end course-item-content-wrap -->
                                            </li>
                                        </ul>
                                    </div><!-- end card-body -->
                                </div><!-- end collapse -->
                            </div><!-- end card -->
                        @endforeach

                    </div><!-- end accordion-->
                </div><!-- end mobile-course-menu -->
            </div><!-- end tab-pane -->
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="lecture-overview-wrap">
                    <div class="lecture-overview-item">
                        <h3 class="fs-24 font-weight-semi-bold pb-2">Giới thiệu khóa học</h3>
                        <p>Khóa học: {{ $course->course->course_title }}</p>
                    </div><!-- end lecture-overview-item -->
                    <div class="section-block"></div>
                    <div class="lecture-overview-item">
                        <div class="lecture-overview-stats-wrap d-flex">
                            <div class="lecture-overview-stats-item">
                                <h3 class="fs-16 font-weight-semi-bold pb-2">Video giới thiệu</h3>
                            </div><!-- end lecture-overview-stats-item -->
                            <div class="lecture-overview-stats-item">
                                <video width="300" height="200" controls>
                                    <source src="{{ asset($course->course->video) }}" type="video/mp4">
                                </video>
                            </div><!-- end lecture-overview-stats-item -->
{{--                            <div class="lecture-overview-stats-item">--}}
{{--                                <ul class="generic-list-item">--}}
{{--                                    <li><span>Resourse:</span>{{ $course->course->resources }}</li>--}}
{{--                                    <li><span>Video length:</span>{{ $course->course->duration }} total hours</li>--}}
{{--                                    <li><span>Certificate:</span>{{ $course->course->certificate }}</li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end lecture-overview-stats-item -->--}}
                        </div><!-- end lecture-overview-stats-wrap -->
                    </div><!-- end lecture-overview-item -->
                    <div class="section-block"></div>
                    <div class="lecture-overview-item">
                        <div class="lecture-overview-stats-wrap d-flex">
                            <div class="lecture-overview-stats-item">
                                <h3 class="fs-16 font-weight-semi-bold pb-2">Điều kiện tiên quyết</h3>
                            </div><!-- end lecture-overview-stats-item -->
                            <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                                <p class="pb-3">{{$course ->course-> prerequisites}}</p>
                            </div><!-- end lecture-overview-stats-item -->
                        </div><!-- end lecture-overview-stats-wrap -->
                    </div><!-- end lecture-overview-item -->
                    <div class="section-block"></div>
                    <div class="lecture-overview-item">
                        <div class="lecture-overview-stats-wrap d-flex">
                            <div class="lecture-overview-stats-item">
                                <h3 class="fs-16 font-weight-semi-bold pb-2">Giảng viên</h3>
                            </div><!-- end lecture-overview-stats-item -->
                            <div class="lecture-overview-stats-item">
                                <p>Nguyễn Văn A
                                </p>
                            </div><!-- end lecture-overview-stats-item -->
                        </div><!-- end lecture-overview-stats-wrap -->
                    </div><!-- end lecture-overview-item -->
                    <div class="section-block"></div>
                    <div class="lecture-overview-item">
                        <div class="lecture-overview-stats-wrap d-flex">
                            <div class="lecture-overview-stats-item">
                                <h3 class="fs-16 font-weight-semi-bold pb-2">Giới thiệu khóa học</h3>
                            </div><!-- end lecture-overview-stats-item -->
                            <div class="lecture-overview-stats-item lecture-overview-stats-wide-item lecture-description">
                                <h3 class="fs-16 font-weight-semi-bold pb-2">{!! $course ->course-> description !!}</h3>
                                <p>  </p>


                            </div><!-- end lecture-overview-stats-item -->
                        </div><!-- end lecture-overview-stats-wrap -->
                    </div><!-- end lecture-overview-item -->
                    <div class="section-block"></div>

                </div><!-- end lecture-overview-wrap -->
            </div><!-- end tab-pane -->
        </div><!-- end tab-content -->
    </div><!-- end lecture-video-detail-body -->
@endsection

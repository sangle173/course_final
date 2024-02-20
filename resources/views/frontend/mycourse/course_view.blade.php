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
                                                                            <video id="my-video" oncontextmenu="return false;" class="video-js"
                                                                                   controls controlsList="nodownload"
                                                                                   preload="video-js vjs-default-skin vjs-big-play-centered"
                                                                                   width="470" height="264"
                                                                                   poster="https://d9wrv003o8xvb.cloudfront.net/thumb_0801180537104122.jpg"
                                                                                   data-setup='{}'>
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
                            <div class="lecture-overview-stats-item">
                                <ul class="generic-list-item">
                                    <li><span>Resourse:</span>{{ $course->course->resources }}</li>
                                    <li><span>Video length:</span>{{ $course->course->duration }} total hours</li>
                                    <li><span>Certificate:</span>{{ $course->course->certificate }}</li>
                                </ul>
                            </div><!-- end lecture-overview-stats-item -->
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
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="image/jpg"
          href="https://file-uploads.teachablecdn.com/4b33e76f73e44038a59de6e1197d25a1/ce8bcd7acd0f495483c0a77dc13523ea"
          class="jsx-2552209487">
    <meta name="next-head-count" content="7">
    <noscript data-n-css=""></noscript>
    <style type="text/css" data-styled-jsx="">@font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Italic.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Italic.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Italic.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Italic.ttf') format('truetype');
            font-weight: normal;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Light.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Light.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Light.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Light.ttf') format('truetype');
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-ExtraboldItalic.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-ExtraboldItalic.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-ExtraboldItalic.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-ExtraboldItalic.ttf') format('truetype');
            font-weight: 800;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-BoldItalic.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-BoldItalic.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-BoldItalic.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-BoldItalic.ttf') format('truetype');
            font-weight: bold;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-SemiboldItalic.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-SemiboldItalic.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-SemiboldItalic.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-SemiboldItalic.ttf') format('truetype');
            font-weight: 600;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Bold.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Bold.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Bold.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Extrabold.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Extrabold.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Extrabold.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Extrabold.ttf') format('truetype');
            font-weight: 800;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Semibold.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Semibold.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Semibold.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans-Semibold.ttf') format('truetype');
            font-weight: 600;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSansLight-Italic.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSansLight-Italic.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSansLight-Italic.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSansLight-Italic.ttf') format('truetype');
            font-weight: 300;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'OpenSans';
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans.eot');
            src: url('//assets.teachablecdn.com/fonts/open-sans/OpenSans.eot?#iefix') format('embedded-opentype'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans.woff') format('woff'), url('//assets.teachablecdn.com/fonts/open-sans/OpenSans.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }</style>
    <style type="text/css" data-styled-jsx="">.svg.jsx-1279536400 {
            display: none;
        }</style>
    <style type="text/css" data-styled-jsx="">.gravatar.jsx-2242512794 {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            background-color: var(--background_light);
            background-size: contain;
            background-image: url(https://s.gravatar.com/avatar/5cac97c3482b57c43a94e470f4160d63?d=mm);
        }

        .wrap.jsx-2242512794 {
            position: relative;
        }

        ul.jsx-2242512794 {
            position: absolute;
            right: 0;
            width: 222px;
            border: 1px solid var(--color);
            border-radius: 4px;
            box-shadow: 0px 6px 20px rgba(32, 39, 45, 0.15);
            min-width: 160px;
            margin-top: 15px;
            padding: 5px 0;
            font-size: 14px;
            list-style: none;
            background-color: #fff;
        }

        a.jsx-2242512794 {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 20px;
            color: var(--color);
            -webkit-text-decoration: none;
            text-decoration: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        a.jsx-2242512794:hover {
            background-color: #f5f5f8;
        }</style>
    <style type="text/css" data-styled-jsx="">.wrap.jsx-2501835884 {
            width: 100%;
            background-color: var(--nav_color);
        }

        .school-text.jsx-2501835884 {
            color: var(--brand_navbar_text);
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .nav.jsx-2501835884 {
            width: 100%;
            padding: var(--padding-3);
            font-family: var(--font);
            color: var(--brand_navbar_text);
            min-height: 73px;
            position: static;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 10px 40px;
            margin: 0 auto 56px auto;
            max-width: var(--max-width);
        }

        .logo.jsx-2501835884 {
            height: 50px;
        }

        .avatar.jsx-2501835884 {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            object-fit: cover;
        }</style>
    <style type="text/css" data-styled-jsx="">.wrap.jsx-1640592643 {
            padding: 0 40px;
            margin: 0 auto 32px auto;
            max-width: var(--max-width);
        }

        .heading.jsx-1640592643 {
            font-weight: bold;
            font-size: 32.4365px;
            line-height: 49px;
            margin-bottom: 25px;
        }

        .banner.jsx-1640592643 {
            width: 100%;
            min-height: 353px;
            padding: var(--padding-3);
            font-family: var(--font);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: space-around;
            -webkit-justify-content: space-around;
            -ms-flex-pack: space-around;
            justify-content: space-around;
            background: #ffffff;
            padding: 32px 40px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.05);
            border-radius: 4px;
        }

        .left.jsx-1640592643, .right.jsx-1640592643 {
            -webkit-flex: 50%;
            -ms-flex: 50%;
            flex: 50%;
            height: 320px;
        }

        img.jsx-1640592643 {
            height: 100%;
            width: 100%;
            border-radius: 4px;
            object-fit: cover;
        }

        .left.jsx-1640592643 {
            margin-right: 24px;
        }

        .right.jsx-1640592643 {
            background-color: var(--background_light);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            border-radius: 4px;
            text-align: center;
        }

        .subheading.jsx-1640592643 {
            font-size: 28px;
            line-height: 43px;
            font-weight: bold;
            padding-top: 8px;
            padding-bottom: 16px;
            margin: 0 24px;
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            -ms-hyphens: auto;
            hyphens: auto;
        }

        .description.jsx-1640592643 {
            margin: 0 24px;
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            -ms-hyphens: auto;
            hyphens: auto;
        }</style>
    <style type="text/css" data-styled-jsx="">.completion.jsx-1998191207 {
            font-size: 14.2222px;
            line-height: 21px;
            color: var(--color);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .icon-check.jsx-1998191207 {
            height: 14px;
            width: 14px;
            color: var(--brand_secondary);
            margin-right: 4px;
        }</style>
    <style type="text/css" data-styled-jsx="">.icon.jsx-4255369697 {
            color: var(--brand_secondary);
            height: 24px;
            width: 24px;
            margin-left: 24px;
        }

        .section-header.jsx-4255369697 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 16px 32px;
        }

        .heading.jsx-4255369697 {
            font-weight: 900;
            font-size: 16px;
            line-height: 24px;
            color: var(--color);
            margin-bottom: 8px;
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            -ms-hyphens: auto;
            hyphens: auto;
        }

        .drip-tag.jsx-4255369697 {
            padding: 2px 8px;
            font-size: 14.2222px;
            line-height: 21px;
            background: #9294a0;
            border-radius: 2px;
            margin-top: 8px;
            color: #ffffff;
        }</style>
    <style type="text/css" data-styled-jsx="">.bar.jsx-2138578525 {
            background: var(--background_light);
            border: 1px solid var(--background_light);
            border-radius: 4px;
            border-left: 8px solid transparent;
            padding: 7px 23px 7px 18px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 4px;
        }

        .active.jsx-2138578525 {
            border-left: 8px solid var(--brand_secondary);
        }

        .text.jsx-2138578525 {
            font-size: 14.2222px;
            line-height: 21px;
            width: 100%;
            font-weight: 400;
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            -ms-hyphens: auto;
            hyphens: auto;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: var(--color);
            margin-left: 24px;
        }

        .info-wrapper.jsx-2138578525 {
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
        }

        .info.jsx-2138578525 {
            background-color: #efeff5;
            border-radius: 4px;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            padding: 4px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            font-size: 12px;
            line-height: 16px;
        }

        .duration.jsx-2138578525 {
            margin-left: 4px;
        }

        .status-icon.jsx-2138578525 {
            width: 24px;
            height: 24px;
            color: var(--brand_secondary);
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        .icon.jsx-2138578525 {
            width: 12px;
            height: 12px;
            color: var(--color);
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }

        .button.jsx-2138578525 {
            margin-left: 24px;
        }

        .tag.jsx-2138578525 {
            display: inline-block;
            border-radius: 0.625rem;
            background-color: #efeff5;
            padding: 0 0.5rem;
            font-size: 0.79rem;
            margin-left: 18px;
        }</style>
    <style type="text/css" data-styled-jsx="">.slim-section.jsx-3137867545 {
            margin-bottom: 16px;
            background: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.05);
            border-radius: 4px;
        }

        .lectures.jsx-3137867545 {
            margin-top: 8px;
            padding: 0 32px 16px 32px;
        }

        .icon.jsx-3137867545 {
            margin-right: 28px;
        }</style>
    <style type="text/css" data-styled-jsx="">.progress.jsx-2262988669 {
            background: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.05);
            border-radius: 4px;
            padding: 40px 21px;
            margin-bottom: 16px;
            text-align: center;
            font-size: 18px;
            font-weight: 700;
            line-height: 27px;
        }

        .percentComplete.jsx-2262988669 {
            padding-bottom: 24px;
        }

        .progressBar.jsx-2262988669, .finished.jsx-2262988669 {
            border-radius: 5px;
            height: 10px;
        }

        .progressBar.jsx-2262988669 {
            background-color: var(--background_light);
        }

        .finished.jsx-2262988669 {
            width: 7%;
            background-color: var(--brand_secondary);
        }</style>
    <style type="text/css" data-styled-jsx="">.instructor.jsx-1343021134 {
            background: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.05);
            border-radius: 4px;
            padding: 32px;
            margin-bottom: 16px;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .image-info.jsx-1343021134 {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center;
            margin-bottom: 32px;
        }

        .image-wrap.jsx-1343021134 {
            position: relative;
            width: 30%;
            padding-bottom: 30%;
            height: 0;
            border-radius: 100px;
            background-color: var(--brand_secondary);
        }

        .title.jsx-1343021134 {
            width: 70%;
            padding-left: 24px;
        }

        .image.jsx-1343021134 {
            width: 100%;
            height: 100%;
            position: absolute;
            object-fit: cover;
            left: 0;
            border-radius: 100px;
            -webkit-transform: scale(1.03);
            -ms-transform: scale(1.03);
            transform: scale(1.03);
        }

        .name.jsx-1343021134 {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 8px;
            -webkit-hyphens: auto;
            -moz-hyphens: auto;
            -ms-hyphens: auto;
            hyphens: auto;
        }

        .info.jsx-1343021134 {
            font-size: 14.2222px;
            line-height: 21px;
        }</style>
    <style type="text/css" data-styled-jsx="">.ins-bio strong {
            font-weight: bold;
        }

        .ins-bio em {
            font-style: italic;
        }

        .ins-bio p, .ins-bio > ul, .ins-bio > ol {
            margin-bottom: 10px;
        }

        .ins-bio ul {
            list-style-type: disc;
        }

        .ins-bio ol {
            list-style-type: decimal;
        }

        .ins-bio ul, .ins-bio ol {
            padding-inline-start: 20px;
        }</style>
    <style type="text/css" data-styled-jsx="">.btn-branded.jsx-1179465666 {
            width: 214px;
            height: 30px;
            padding: 6px 8px;
            border: 1px solid #bdbdbd;
            border-radius: 4px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 24px auto 24px auto;
            background: #ffffff;
        }

        .logo.jsx-1179465666 {
            width: 74px;
            margin-left: 4px;
            position: relative;
        }

        .link.jsx-1179465666 {
            font-weight: 400;
            font-size: 14px;
            color: #4e4e4e;
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        .btn-branded.jsx-1179465666:hover {
            background-color: #f2f2f2;
        }

        .btn-branded.jsx-1179465666:focus {
            outline: 4px solid #e4e4e4;
        }

        .btn-branded.jsx-1179465666:active {
            background-color: #f2f2f2;
            outline: 4px solid #e4e4e4;
        }</style>
    <style type="text/css" data-styled-jsx="">.columns.jsx-4204861187 {
            display: grid;
            padding: 0 40px;
            max-width: var(--max-width);
            margin: auto;
            gap: 24px;
            grid-template-columns:2fr 1fr;
            width: 100%;
        }</style>
    <style type="text/css" data-styled-jsx="">.body.jsx-2755510470 {
            background-color: var(--background_light);
            font-family: var(--font);
            width: 100%;
        }

        .container.jsx-2755510470 {
            width: 100%;
            padding-bottom: 0px;
        }</style>
    <style type="text/css" data-styled-jsx="">:root {
            --brand_primary: #05192D;
            --brand_secondary: #09A59A;
            --brand_success: #000000;
            --brand_warning: #000000;
            --brand_danger: #000000;
            --brand_info: #000000;
            --brand_text: #2b3636;
            --brand_heading: #2b3636;
            --brand_navbar_text: #fff;
            --brand_navbar_fixed_text: #FFF;
            --brand_homepage_heading: #000;
            --brand_course_heading: #000;
            --background_light: #F9FAFD;
            --nav_color: #05192D;
            --font: OpenSans;
            --max-width: 1280px;
            --color: #212338;
        }

        body {
            font-family: var(--font);
            color: var(--color);
        }

        .primaryButton {
            background-color: var(--brand_secondary);
            color: #ffffff;
            border-radius: 4px;
            padding: 8px 32px;
            border: none;
            font-weight: 900;
            font-size: 14.2222px;
            line-height: 1;
            cursor: pointer;
            min-height: 30px;
        }

        .secondaryButton {
            background-color: var(--brand_secondary);
            color: #ffffff;
            border-radius: 4px;
            padding: 4px 8px;
            border: none;
            font-weight: bold;
            font-size: 14.2222px;
            line-height: 1;
            cursor: pointer;
            min-height: 30px;
        }

        .secondaryButtonInverse {
            color: var(--brand_secondary);
            background-color: var(--background_light);
            border: 1px solid var(--brand_secondary);
        }

        .usingMouse *:focus {
            outline: none;
        }

        .tag {
            display: inline-block;
            border-radius: 0.625rem;
            background-color: var(--brand_info);
            color: var(--color);
            padding: 0 0.5rem;
        }</style>
    <style type="text/css" data-styled-jsx="">html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
        }

        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after, q:before, q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }</style>
    <title> Laravel 10 Build Complete Learning Management System A-Z </title></head>
<body data-new-gr-c-s-check-loaded="14.1155.0" data-gr-ext-installed="" class="usingMouse">
<div id="__next">
    <div class="jsx-2755510470 body">
        <div class="jsx-2755510470 container">
            <div class="jsx-1640592643 wrap"><h1 class="jsx-1640592643 heading">{{ $course->course->course_title }}</h1>
                <div class="jsx-1640592643 banner">
                    <div class="jsx-1640592643 left"><img alt="course banner"
                                                          src="{{asset( $course->course->course_image)}}"
                                                          class="jsx-1640592643"></div>
                    <div class="jsx-1640592643 right"><h4 class="jsx-1640592643 description">Introduction : 1 / 3</h4>
                        <h3 class="jsx-1640592643 subheading">Introduction - What you will build this course</h3><a
                            href="/courses/laravel-10-build-complete-learning-management-system-a-z/lectures/50447500"
                            class="jsx-1640592643">
                            <button type="button" class="jsx-1640592643 primaryButton">Start Lesson</button>
                        </a></div>
                </div>
            </div>
            <div class="jsx-4204861187 columns">
                <div class="jsx-4204861187">
                    <div class="jsx-3137867545 slim-section">
                        <div role="button" tabindex="0" class="jsx-4255369697 section-header">
                            <div class="jsx-4255369697"><h2 class="jsx-4255369697 heading">Section 2 : Multi Auth with Breeze Create
                                    Auth for User / Instructor / Admin</h2>
                                <p class="jsx-1998191207 completion">7 / 8 complete</p></div>
                            <div class="jsx-4255369697">
                                <svg class="jsx-4255369697 icon">
                                    <use xlink:href="#icon-arrow-up" class="jsx-4255369697"></use>
                                </svg>
                            </div>
                        </div>
                        @foreach($section as $item)
                        <div class="jsx-2138578525 bar">
                            <svg class="jsx-2138578525 status-icon">
                                <use xlink:href="#icon-circle-outline" class="jsx-2138578525"></use>
                            </svg>
                            <a href="/courses/laravel-10-build-complete-learning-management-system-a-z/lectures/50433662"
                               class="jsx-2138578525 text"><h3 class="jsx-2138578525">{{ $item->section_title }}</h3>
                                <div class="jsx-2138578525 info-wrapper">
                                    <div class="jsx-2138578525 info">
                                        <svg class="jsx-2138578525 icon">
                                            <use xlink:href="#icon-video" class="jsx-2138578525"></use>
                                        </svg>
                                        <p class="jsx-2138578525 duration">(11:17)</p></div>
                                </div>
                            </a><a href="/courses/laravel-10-build-complete-learning-management-system-a-z/lectures/50433662"
                                   class="jsx-2138578525">
                                <button type="button" class="jsx-2138578525 button secondaryButton">Xem</button>
                            </a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

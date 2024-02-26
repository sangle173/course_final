@extends('instructor.instructor_dashboard')
@section('instructor')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách khóa học</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset($course->course_image) }}" class="rounded-circle p-1 border" width="90"
                                 height="90" alt="...">
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mt-0">{{ $course->course_name }}</h5>
                                <p class="mb-0">{{$course->course_title}}</p>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Thêm Chương
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- /// Add Section and Lecture  --}}
                @foreach ($section as $key => $item )
                    <div class="container">
                        <div class="main-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body d-flex justify-content-between">
                                            <h5>
                                                <i class="lni lni-atlassian text-primary"></i> {{ $item->section_title }}
                                            </h5>

                                            <div class="d-flex justify-content-between align-items-center">
                                                <a class="btn btn-sm text-info mr-1" title="Thêm bài học"
                                                   href="{{ route('add.course.lecture', ['id' => $item->id]) }}"><i
                                                        class="lni lni-add-files text-primary"></i> </a>
                                                <a class="btn btn-sm text-info mr-1" title="Chỉnh sửa chương"
                                                   href="{{ route('edit.section', ['id' => $item->id]) }}"><i
                                                        class="lni lni-pencil text-info"></i> </a>
                                                <a class="btn btn-sm text-danger mr-1" title="Xóa chương" id="delete"
                                                   href="{{ route('delete.section',['id' => $item->id]) }}"><i
                                                        class="lni lni-trash text-danger"></i> </a>
                                            </div>

                                        </div>


                                        <div class="courseHide" id="lectureContainer{{ $key }}">
                                            <div class="container">
                                                @foreach ($item->lectures as $lecture)
                                                    <div
                                                        class="lectureDiv d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <h6 class="font-weight-bold"><i
                                                                    class="lni lni-ticket-alt text-primary"></i> {{ $lecture->lecture_title }}
                                                            </h6>
                                                            <ul>
                                                                <li>Nội dung: {{$lecture -> content}}</li>
                                                                <li>
                                                                    Tài liệu:
                                                                    <a href="{{  asset($lecture->url) }}"
                                                                       class="btn-lg btn-link text-primary text-decoration-none"
                                                                       target="_blank" title="Tài liệu">
                                                                        {!! str_replace('upload/lecture/document/', '', $lecture -> url) !!}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    Video:
                                                                    <button type="button" class="btn btn-link" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal{{$lecture->id}}">{!! str_replace('upload/lecture/video/', '', $lecture -> video) !!}
                                                                    </button>
{{--                                                                    <a href="#" data-bs-toggle="modal"--}}
{{--                                                                       class="text-decoration-none"--}}
{{--                                                                       data-bs-target="#exampleModal{{$item->id}}">{!! str_replace('upload/lecture/video/', '', $lecture -> video) !!}--}}
{{--                                                                    </a>--}}
                                                                    <div class="modal fade"
                                                                         id="exampleModal{{$lecture->id}}" tabindex="-1"
                                                                         aria-labelledby="exampleModalLabel"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel">{!! str_replace('upload/lecture/video/', '', $lecture -> video) !!}</h5>
                                                                                    <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <video id="my-video"
                                                                                           oncontextmenu="return false;"
                                                                                           class="video-js" controls
                                                                                           preload="video-js vjs-default-skin vjs-big-play-centered"
                                                                                           width="470" height="264"
                                                                                           poster="https://d9wrv003o8xvb.cloudfront.net/thumb_0801180537104122.jpg"
                                                                                           data-setup='{}'>
                                                                                        <source
                                                                                            src="{{ asset($lecture->video) }}"
                                                                                            type="video/mp4">
                                                                                        <source
                                                                                            src="{{ asset($lecture->video) }}"
                                                                                            type="video/webm">
                                                                                        <p class="vjs-no-js">
                                                                                            To view this video please
                                                                                            enable JavaScript, and
                                                                                            consider upgrading to a web
                                                                                            browser that
                                                                                            <a href="http://videojs.com/html5-video-support/"
                                                                                               target="_blank">supports
                                                                                                HTML5 video</a>
                                                                                        </p>
                                                                                    </video>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Đóng
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    @if($lecture->status == '0')
                                                                        <span class="badge badge-pill bg-danger">Riêng tư </span>
                                                                    @else
                                                                        <span class="badge badge-pill bg-success">Công khai</span>
                                                                    @endif

                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a href="{{ route('edit.lecture',['id' => $lecture->id]) }}"
                                                               class="btn btn-link text-info" title="Chỉnh sửa bài học">
                                                                <i
                                                                    class="lni lni-pencil text-info"></i></a> &nbsp;
                                                            <a href="{{ route('delete.lecture',['id' => $lecture->id]) }}"
                                                               class="btn btn-link text-danger" title="Xóa bài học"
                                                               id="delete"><i
                                                                    class="lni lni-trash"></i> </a>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach

                {{-- /// End Add Section and Lecture  --}}
            </div>

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm chương </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('add.course.section') }}" method="POST">
                        <div class="modal-body">

                            @csrf
                            <input type="hidden" name="id" value="{{ $course->id }}">
                            <div class="form-group mb-3">
                                <label for="input1" class="form-label">Tên chương:</label>
                                <input type="text" name="section_title" class="form-control" id="input1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $('.modal').on('hidden.bs.modal', function () {
                $('video').each(function () {
                    this.player.pause();
                });
            })
        </script>
@endsection

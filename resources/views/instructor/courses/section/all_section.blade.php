@extends('instructor.instructor_dashboard')
@section('instructor')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">

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
                                <a href="{{ route('add.section', $course -> id) }}" class="btn btn-primary px-5">Thêm bài học </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Tên bài học</th>
                                    <th>Nội dung</th>
                                    <th>Video</th>
                                    <th>Tài liệu</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($section as $key => $item )
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->section_title }}</td>
                                        <td>{{ $item->section_content }}</td>
                                        <td>
                                            <button type="button" class="btn btn-link" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$item->id}}"><i
                                                    class="lni lni-play"></i>Xem video
                                            </button>
                                            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel">{{ $item->section_title }}</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <video id="my-video" class="video-js" controls
                                                                   preload="video-js vjs-default-skin vjs-big-play-centered"
                                                                   width="470" height="264"
                                                                   poster="https://d9wrv003o8xvb.cloudfront.net/thumb_0801180537104122.jpg"
                                                                   data-setup='{}'>
                                                                <source src="{{ asset($item->section_video) }}"
                                                                        type="video/mp4">
                                                                <source src="{{ asset($item->section_video) }}"
                                                                        type="video/webm">
                                                                <p class="vjs-no-js">
                                                                    To view this video please enable JavaScript, and
                                                                    consider upgrading to a web browser that
                                                                    <a href="http://videojs.com/html5-video-support/"
                                                                       target="_blank">supports HTML5 video</a>
                                                                </p>
                                                            </video>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Đóng
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{  asset($item->section_document) }}" class="btn btn-link"
                                               target="_blank" title="Tài liệu"><i class="lni lni-download"></i> Xem tài
                                                liệu </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.section',$item->id) }}" class="btn btn-info"
                                               title="Chính sửa"><i class="lni lni-eraser"></i> </a>
                                            <a href="{{ route('delete.section',$item->id) }}"
                                               class="btn btn-sm btn-danger" id="Xóa"><i
                                                    class="lni lni-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
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

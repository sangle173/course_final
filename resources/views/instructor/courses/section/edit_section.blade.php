@extends('instructor.instructor_dashboard')
@section('instructor')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">

        <div class="row">
            <div class="col-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
{{--                            <img src="{{ asset($section->course-> course_image) }}" class="rounded-circle p-1 border" width="90"--}}
{{--                                 height="90" alt="...">--}}
{{--                            <div class="flex-grow-1 ms-3">--}}
{{--                                <h5 class="mt-0">{{ $course->course_name }}</h5>--}}
{{--                                <p class="mb-0">{{$course->course_title}}</p>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="myForm" action="{{ route('update.course.section') }}" method="post" class="row g-3" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $section->id }}">

            <div class="form-group col-md-6">
                <label for="input1" class="form-label">Lecture Name</label>
                <input type="text" name="section_title" class="form-control" id="input1"  value="{{$section->section_title}}">
            </div>

            <div class="form-group col-md-6">
                <label for="input1" class="form-label">Lecture Content </label>
                <input type="text" name="section_content" class="form-control" id="input1" value="{{$section->section_content}}" >
            </div>
            <div class="form-group col-md-6">
                <label for="input1" class="form-label">Lecture Intro Video </label>
                <input type="file" name="section_video" id="videoUpload" class="form-control"  accept="video/mp4, video/webm" >
            </div>
            <div class="form-group col-md-6">
                <label for="input1" class="form-label">Lecture document </label>
                <input type="file" name="section_document" class="form-control"  accept="application/pdf, application/msword, application/vnd.ms-powerpoint" >
            </div>
            <div class="form-group col-md-6">
                <video width="320" height="240" controls>
                    <source src="{{ asset($section->section_video) }}" type="video/mp4">
                    <source src="{{ asset($section->section_video) }}" type="video/webm">
                </video>
            </div>
            <div class="form-group col-md-6">
                <a href="{{  asset($section->section_document) }}" class="btn btn-link" target="_blank" title="Tài liệu"><i class="lni lni-download"></i> Xem tài liệu </a>
            </div>
            <div class="col-md-12">
                <div class="d-md-flex d-grid align-items-center gap-3">
                    <button type="submit" class="btn btn-primary px-4">Cập nhật</button>

                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById("videoUpload")
            .onchange = function(event) {
            let file = event.target.files[0];
            let blobURL = URL.createObjectURL(file);
            document.querySelector("video").src = blobURL;
        }
    </script>
@endsection

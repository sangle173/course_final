@extends('instructor.instructor_dashboard')
@section('instructor')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">

        <div class="row">
            <div class="col-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mt-0">Cập nhật bài học</h5>
                                <p class="mb-0">{{ $section->section_title }}</p>
                            </div>
                            <div class="modal-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <form id="myForm" action="{{ route('update.course.section') }}" method="post" class="row g-3" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" name="id" value="{{ $section->id }}">

                        <div class="form-group col-md-12">
                            <label for="input1" class="form-label">Tên bài học</label>
                            <input type="text" name="section_title" class="form-control" id="input1"  value="{{$section->section_title}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="section_content" class="form-label">Nội dung </label>
                            <textarea name="section_content" class="form-control" id="section_content" placeholder="Nội dung ..."  rows="3">{{$section->section_content}}</textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Lưu</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update.course.section.video') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="vid" value="{{ $section->id }}">
                        <input type="hidden" name="old_vid" value="{{ $section->section_video }}">


                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="input2" class="form-label">Video bài học </label>
                                <input type="file" id="videoUpload" name="video" class="form-control"  accept="video/mp4, video/webm" >
                            </div>

                            <div class="col-md-6">
                                <video width="300" height="130" controls>
                                    <source src="{{ asset( $section->section_video ) }}" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <br><br>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Lưu</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update.course.section.document') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="vid" value="{{ $section->id }}">
                        <input type="hidden" name="old_doc" value="{{ $section->section_document }}">


                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="section_document" class="form-label">Tài liệu </label>
                                <input type="file" name="section_document" id="section_document" class="form-control"
                                       accept="application/pdf, application/msword, application/vnd.ms-powerpoint" value="{{ $section->section_document }}"> <span>{{ $section->section_document }}</span>
                            </div>
                        </div>

                        <br><br>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Lưu</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
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

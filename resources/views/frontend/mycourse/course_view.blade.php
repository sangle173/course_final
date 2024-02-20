@extends('frontend.dashboard.user_dashboard')
@section('userdashboard')
    <div class="container-fluid">

        <div class="section-block mb-5"></div>
        <div class="dashboard-heading mb-5">
            <h3 class="fs-22 font-weight-semi-bold">Tên khóa học: {{ $course->course->course_name }}</h3>
        </div>
        <div class="dashboard-cards mb-5">

            @foreach($section as $item)
                <div class="card card-item card-item-list-layout">
                    <div class="card-body">
                       <div class="row">
                           <div class="col-md-10">
                               <h6 class="card-title"><a
                                       href="{{ route('course.section.details',$item->id) }}">{{ $item->section_title }}</a>
                               </h6>
                               <p class="card-text">
                                   {{ $item->section_content }}
                               </p>
                           </div>
                           <div class="col-md-2">
                               @if(!empty($item -> section_video))
                                   <a  href="{{ route('course.section.details',$item->id) }}" type="button" class="btn-lg btn-link text-primary"><i
                                           class="lni lni-play"></i></a>
                               @endif
                                   @if(!empty($item -> section_document))
                                       <a href="{{  asset($item->section_document) }}" class="btn-lg btn-link text-primary"
                                          target="_blank" title="Tài liệu"><i
                                               class="lni lni-files"></i></a>
{{--                                       <a  href="{{ route('course.section.details',$item->id) }}" type="button" class="btn btn-success">Tài liệu</a>--}}
                                   @endif
                           </div>
                       </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            @endforeach
        </div><!-- end col-lg-12 -->


    </div><!-- end container-fluid -->
@endsection

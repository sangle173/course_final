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
                        <li class="breadcrumb-item active" aria-current="page">Tất cả locales</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <div class="btn-group">
                        <a href="{{ route('instructor.import.report.get') }}" class="btn btn-danger "><i class="bx bx-cloud-download"></i>Import Excel file </a>
                        <a href="{{ route('instructor.all.reports.query') }}" class="btn btn-danger "><i class="bx bx-cloud-download"></i>Query </a>
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
                            <th>First_fragment_label</th>
                            <th>String</th>
                            <th>Language</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($reports as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->First_fragment_label }}</td>
                                <td>{{ $item->String }}</td>
                                <td>{{ $item->Language }}</td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>


    </div>




@endsection

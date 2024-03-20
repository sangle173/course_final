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
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <form id="myForm" action="{{ route('instructor.all.reports.query.post') }}" method="post" class="row g-3" enctype="multipart/form-data">
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
                    <div class="form-group col-md-6">
                        <label for="input1" class="form-label">String in English</label>
                        <input type="text" name="string" class="form-control" id="input1"  >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="input1" class="form-label">TargetLocale</label>
                        <input type="text" name="locale_name" class="form-control" id="input1"  >
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            Result for: {{$stringInEnglish[0] -> First_fragment_label}}
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

                        @if($result)
                        @foreach ($result as $key=> $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->First_fragment_label }}</td>
                                <td>{{ $item->String }}</td>
                                <td>{{ $item->Language }}</td>
                            </tr>
                        @endforeach
                        @else
                        <p>No result</p>
                        @endif
                        </tbody>

                    </table>
                </div>
            </div>
        </div>


    </div>




@endsection

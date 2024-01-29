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
                    <li class="breadcrumb-item active" aria-current="page">Add user order</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">

            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <form id="myForm" action="{{ route('instructor.order.update') }}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="input1" class="form-label">Course </label>
                    <select name="course_id" class="form-select mb-3" aria-label="Default select example">
                        <option selected="" disabled>Open this select menu</option>
                        @foreach ($courses as $cou)
                            <option value="{{ $cou->id }}">{{ $cou->course_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="input1" class="form-label">User </label>
                    <select name="user_id" class="form-select mb-3" aria-label="Default select example">
                        <option selected="" disabled>Open this select menu</option>
                        @foreach ($alluser as $allu)
                            <option value="{{ $allu->id }}">{{ $allu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Thêm mới</button>
                    </div>
                </div>
            </form>

        </div>
    </div>




</div>




@endsection

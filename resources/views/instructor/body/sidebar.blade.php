@php
  $id = Auth::user()->id;
  $instructorId = App\Models\User::find($id);
  $status = $instructorId->status;
@endphp

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Giảng Viên</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        @if ($status === '1')

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="lni lni-graduation"></i>
                </div>
                <div class="menu-title">Khóa học</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.course') }}"><i class='bx bx-radio-circle'></i>Danh sách khóa học </a>
                </li>
            </ul>
        </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-briefcase"></i>
                    </div>
                    <div class="menu-title">Danh mục</div>
                </a>
                <ul>
                    <li> <a href="{{ route('instructor.all.category') }}"><i class='bx bx-radio-circle'></i>Tất cả danh mục</a>
                    </li>
                    <li> <a href="{{ route('instructor.all.subcategory') }}"><i class='bx bx-radio-circle'></i>Tất cả danh mục con</a>
                    </li>
                </ul>
            </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Xếp học viên</div>
            </a>
            <ul>
                <li> <a href="{{ route('instructor.order.add') }}"><i class='bx bx-radio-circle'></i>Xếp lớp học viên</a>
                </li>


            </ul>
        </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="lni lni-users"></i>
                    </div>
                    <div class="menu-title">Học viên</div>
                </a>
                <ul>
                    <li> <a href="{{ route('instructor.all.user') }}"><i class='bx bx-radio-circle'></i>Tất cả học viên </a>
                    </li>
                </ul>
            </li>
{{--        <li>--}}
{{--            <a class="has-arrow" href="javascript:;">--}}
{{--                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">All Question</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="{{ route('instructor.all.question') }}"><i class='bx bx-radio-circle'></i>All Question</a>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--        </li>--}}


{{--        <li>--}}
{{--            <a class="has-arrow" href="javascript:;">--}}
{{--                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Manage Coupon</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="{{ route('instructor.all.coupon') }}"><i class='bx bx-radio-circle'></i>All Coupon</a>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a class="has-arrow" href="javascript:;">--}}
{{--                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Manage Reivew</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="{{ route('instructor.all.review') }}"><i class='bx bx-radio-circle'></i>All Review</a>--}}
{{--                </li>--}}


{{--            </ul>--}}
{{--        </li>--}}


{{--        <li class="menu-label">Charts & Maps</li>--}}
{{--        <li>--}}
{{--            <a class="has-arrow" href="javascript:;">--}}
{{--                <div class="parent-icon"><i class="bx bx-line-chart"></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Charts</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>--}}
{{--                </li>--}}
{{--                <li> <a href="charts-chartjs.html"><i class='bx bx-radio-circle'></i>Chartjs</a>--}}
{{--                </li>--}}
{{--                <li> <a href="charts-highcharts.html"><i class='bx bx-radio-circle'></i>Highcharts</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a class="has-arrow" href="javascript:;">--}}
{{--                <div class="parent-icon"><i class="bx bx-map-alt"></i>--}}
{{--                </div>--}}
{{--                <div class="menu-title">Maps</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="map-google-maps.html"><i class='bx bx-radio-circle'></i>Google Maps</a>--}}
{{--                </li>--}}
{{--                <li> <a href="map-vector-maps.html"><i class='bx bx-radio-circle'></i>Vector Maps</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

        @else

        @endif

        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Hỗ trợ</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>

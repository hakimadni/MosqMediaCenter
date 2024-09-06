@extends('layout.masterdash')
@section('title')
    Dashboard
@endsection
@section('content')
<style>
    .page {
        background-color: #F8FFE9;
    }

    .card-prayer {
        border-radius: 25px 25px 25px 25px;
        background-color: #7C8A60;
    }

    .card-bottom {
        border-radius: 25px 25px 0px 0px;
        background-color: #7C8A60;
        margin-bottom: 0;
    }

    .text-card-bottom {
        font-size: 48px;
        font-weight: 400;
        color: #F8FFE9;
    }

    .prayer {
        font-size: 32px;
        font-weight: 500;
        color: #F8FFE9;
    }

    .time {
        font-size: 104px;
        font-weight: 300;
        color: #F8FFE9;
    }

    .iqomah {
        background-color: #596843;
        color: #F8FFE9;
        font-weight: 500;
        font-size: 23px;
    }

    .rounded-25 {
        border-radius: 25px 25px 25px 25px;
    }

    .rounded-40 {
        border-radius: 40px 40px 40px 40px;
    }

    .image {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .floating-card {
        position: absolute;
        top: 55%;
        right: 0;
        width: 340px; /* Adjust the width as needed */
        background-color: #596843;
        color: #F8FFE9;
        border-radius: 25px 0 0 25px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
</style>
<!--begin::Root-->
<!-- Floating card -->
<div class="floating-card">
    <div class="card-body ps-10">
        <p class="text-card-bottom m-0">Dhuhr</p>
        <p class="prayer m-0">-3:10:42</p>

    </div>
</div>
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid vh-100">
        <div class="w-100">
            <div class="row mx-0  h-100">
                <div class="col-2">
                    <!--begin::Content-->
                    <div class="m-2 mt-5">
                        <div class="card h-150px w-100 card-prayer">
                            <div class="card-body m-n2 ms-n1">
                                <div class="row">
                                    <div class="col">
                                        <p class="prayer">Fajr</p>
                                    </div>
                                    <div class="col-auto">
                                        <img src="{{asset('images/Fajr.png')}}" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-7">
                                        <p class="my-auto prayer">04:24</p>
                                    </div>
                                    <div class="col-5 my-auto">
                                        <div class="card iqomah h-35px w-80px rounded-pill">
                                            <p class="m-auto">+12m</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-2 mt-5">
                        <div class="card h-150px w-100 card-prayer">
                            <div class="card-body m-n2 ms-n1">
                                <div class="row">
                                    <div class="col">
                                        <p class="prayer">Shurq</p>
                                    </div>
                                    <div class="col-auto">
                                        <img src="{{asset('images/Shurq.png')}}" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-7">
                                        <p class="my-auto prayer">06:07</p>
                                    </div>
                                    <div class="col-5 my-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Content-->

                </div>
                <div class="col pe-0 d-flex flex-column">
                    <!--begin::Header-->
                    <div class="row mx-0">
                        <div id="kt_header" style="border-radius: 0px 0px 0px 20px; background-color: #B6C18D" class="card align-items-stretch">
                            <!--begin::Container-->
                            <div class="container-fluid d-flex align-items-stretch justify-content-between">
                                <!--begin::Aside mobile toggle-->
                                <!--end::Aside mobile toggle-->
                                <!--begin::Logo-->
                                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                                    <h1 class="my-auto ms-2">
                                        Welcome to Mattel Non Staff Leave Request
                                    </h1>
                                </div>
                                <!--end::Logo-->
                            </div>
                            <!--end::Container-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div class="row me-5 my-8">
                        <div class="col">
                        <img class="w-100 h-650px image rounded-40 p-0" src="{{asset('storage/images/DSC00125.jpg')}}" />
                        </div>
                    </div>
                    <!--end::Content-->
                    <!--begin::Card Bottom-->
                    <div class="row me-0 d-flex flex-fill">
                        <div class="col-4">
                            <div class="card card-bottom position-relative h-100">
                                <div class="card-body p-5">
                                    <div class="text-card-bottom text-center">Masjid <br />Daarus Salaam</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="card card-bottom position-relative h-100 mx-5">
                                <div class="card-body p-5">
                                    <div class="text-card-bottom text-center">Pondok Aren <br />07/09/2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 pe-0">
                            <div class="card card-bottom position-relative h-100" style="border-radius: 25px 0px 0px 0px;">
                                <div class="card-body">
                                    <h1 class="time text-center">09:01</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card Bottom-->
                </div>
            </div>

        </div>
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                  fill="black" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                  fill="black" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->
<div class="modal fade" tabindex="-1" id="modalDoc">
    <div class="modal-dialog modal-dialog-centered mw-950px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Documentation</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

        </div>
    </div>
</div>
@endsection

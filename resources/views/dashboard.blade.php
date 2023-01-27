@extends('layouts.layout')
@section('page-name', 'General')
@section('page-parent', 'Dashboard')
@section('page-content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs nav-line-tabs card-header-tabs  mb-5 fs-6" id="tabs" role="tablist">
                    <li class="nav-item w-15 me-0 mb-md-2" role="presentation">
                        <a class="nav-link  w-100 btn btn-flex btn-active-light-dark" href="#kt_tab_pane_1"
                            data-bs-toggle="tab" aria-selected="true" role="tab">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary me-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon--> <span class="d-flex flex-column align-items-start">
                                <span class="fs-4 fw-bold">BETWAY</span>
                                <span class="fs-7">BETWAY AVIATOR</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item w-15 me-0 mb-md-2" role="presentation">
                        <a class="nav-link w-100 btn btn-flex btn-active-light-warning" href="#kt_tab_pane_2"
                            data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen003.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon--> <span class="d-flex flex-column align-items-start">
                                <span class="fs-4 fw-bold">MSPORT</span>
                                <span class="fs-7">MSPORT AVIATOR</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item w-15" role="presentation">
                        <a class="nav-link  w-100 btn btn-flex btn-active-light-danger" href="#kt_tab_pane_3"
                            data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">

                            <!--begin::Svg Icon | path: icons/duotune/general/gen017.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon--> <span class="d-flex flex-column align-items-start">
                                <span class="fs-4 fw-bold">SPORTYBET</span>
                                <span class="fs-7">SPORTYBET AVIIATOR</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item w-15" role="presentation">
                        <a class="nav-link active w-100 btn btn-flex btn-active-light-secondary" href="#kt_tab_pane_4"
                            data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen017.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z"
                                        fill="currentColor">
                                    </path>
                                    <path
                                        d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon--> <span class="d-flex flex-column align-items-start">
                                <span class="fs-4 fw-bold">DISCLAIMER</span>
                                <span class="fs-7">read this before using this website</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item w-15" role="presentation">
                        <a class="nav-link w-100 btn btn-flex btn-active-light-success" href="#kt_tab_pane_5"
                            data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen017.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z"
                                        fill="currentColor">
                                    </path>
                                    <path
                                        d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon--> <span class="d-flex flex-column align-items-start">
                                <span class="fs-4 fw-bold">DONATE TO SUPPORT US</span>
                                <span class="fs-7">Kindly donate something to keep us running freely</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show" id="kt_tab_pane_1" role="tabpanel">
                        <div class="alert alert-dark d-flex align-items-center p-5 mb-10">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                            <span class="svg-icon svg-icon-2hx svg-icon-danger me-4"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="d-flex flex-column ">
                                <h4 class="mb-1 text-danger">BETWAY AVIATOR</h4>
                                <span class="fs-4">
                                    <span class="text-success">Pink start from x10 to X80,000+ on betway</span>.
                                    Take your chances, make enough money before risking for higher pinks.

                                    <span class="text-danger">
                                        There is no sure way to calculte pink
                                        heights</span> Use your instinct.
                                    </p>
                                    <span class="text-secondary"> Make sure to
                                        read
                                        the disclaimer page before practicing
                                        anything from this website.</span>
                                </span>
                            </div>
                        </div>
                        <div class="card-header ribbon ribbon-end ribbon-clip">
                            <div class="ribbon-label">Trust 92%<span class="ribbon-inner bg-success"></span>
                            </div>
                            <div class="card-title">Official Prediction</div>
                        </div>
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Exact Time
                                            </h5>
                                            <span class="description-text">11:06 PM</span><br>
                                            <h5 class="description-header"> Countdown to start playing
                                            </h5>
                                            <span class="description-text">11:06 PM</span>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Estimated pink height</h5>
                                            <span class="description-text">x40<br>just instinct no calculation</span>
                                        </div>
                                        <div class="description-block">
                                            <h5 class="description-header">Probality</h5>
                                            <span class="description-text">99.9%</span>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Time Now</h5>
                                            <span id="betway-clock" class="description-text fs-4"></span><br>
                                            <span class="description-text">Betway time is 4 seconds late to this
                                                time</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="ribbon ribbon-end ribbon-clip callout callout-secondary">
                            <div class="ribbon-label">
                                Tested and Approved Predictors
                                <span class="ribbon-inner bg-secondary"></span>
                            </div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Predictor</td>
                                        <th scope="col">Prediction</td>
                                        <th scope="col">Expected Time</td>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="overflow-auto h-300px">
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="kt_tab_pane_2" role="tabpanel">
                        <div class="alert alert-warning d-flex align-items-center p-5 mb-10">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                            <span class="svg-icon svg-icon-2hx svg-icon-danger me-4"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="d-flex flex-column ">
                                <h4 class="mb-1 text-danger">MSPORT AVIATOR</h4>
                                <span class="fs-4">
                                    <span class="text-success">Pink start from x10 to X400,000+ on msport</span>.
                                    Take your chances, make enough money before risking for higher pinks.

                                    <span class="text-danger">
                                        There is no sure way to calculte pink
                                        heights</span> Use your instinct.
                                    </p>
                                    <span class="text-secondary"> Make sure to
                                        read
                                        the disclaimer page before practicing
                                        anything from this website.</span>
                                </span>
                            </div>
                        </div>
                        <div class="card-header ribbon ribbon-end ribbon-clip">
                            <div class="ribbon-label">Trust 92%<span class="ribbon-inner bg-success"></span>
                            </div>
                            <div class="card-title">Official Prediction</div>
                        </div>
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Estimated pink height</h5>
                                            <span class="description-text">x40<br>just instinct no calculation</span>
                                        </div>
                                        <div class="description-block">
                                            <h5 class="description-header">Probality</h5>
                                            <span class="description-text">99.99%</span>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Exact Time
                                            </h5>
                                            <span class="description-text">11:06 PM</span><br>
                                            <h5 class="description-header"> Countdown to start playing
                                            </h5>
                                            <span class="description-text">11:06 PM</span>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Time Now</h5>
                                            <span id="msport-clock" class="description-text fs-4"></span><br>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="ribbon ribbon-end ribbon-clip callout callout-secondary">
                            <div class="ribbon-label">
                                Tested and Approved Predictors
                                <span class="ribbon-inner bg-secondary"></span>
                            </div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Predictor</td>
                                        <th scope="col">Prediction</td>
                                        <th scope="col">Expected Time</td>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="overflow-auto h-300px">
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="kt_tab_pane_3" role="tabpanel">
                        <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                            <span class="svg-icon svg-icon-2hx svg-icon-warning me-4"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="d-flex flex-column ">
                                <h4 class="mb-1 text-dark">SPORTBET AVIATOR</h4>
                                <span class="fs-4">
                                    <span class="text-dark">Pink start from x10 to X400,000+ on sportybet</span>.
                                    Take your chances, make enough money before risking for higher pinks.
                                    <span class="text-warning">
                                        There is no sure way to calculte pink
                                        heights</span> Use your instinct.
                                    </p>
                                    <span class="text-info"> Make sure to
                                        read the disclaimer page before practicing
                                        anything from this website.</span>
                                </span>
                            </div>
                        </div>
                        <div class="card-header ribbon ribbon-end ribbon-clip">
                            <div class="ribbon-label">Trust 92%<span class="ribbon-inner bg-success"></span>
                            </div>
                            <div class="card-title">Official Prediction</div>
                        </div>
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Estimated Multiplier</h5>
                                            <span class="description-text">x40+ <br> just instinct no calculation</span>
                                        </div>
                                        <div class="description-block">
                                            <h5 class="description-header">Probality</h5>
                                            <span class="description-text">99.9%</span>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Exact Time
                                            </h5>
                                            <span class="description-text">11:06 PM</span><br>
                                            <h5 class="description-header"> Countdown to start playing
                                            </h5>
                                            <span class="description-text">11:06 PM</span>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">Time Now</h5>
                                            <span id="sporty-clock" class="description-text fs-4"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="ribbon ribbon-end ribbon-clip callout callout-secondary">
                            <div class="ribbon-label">
                                Tested and Approved Predictors
                                <span class="ribbon-inner bg-secondary"></span>
                            </div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Predictor</td>
                                        <th scope="col">Prediction</td>
                                        <th scope="col">Expected Time</td>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="overflow-auto h-300px">
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="ribbon ribbon-end ribbon-clip callout callout-warning">
                                <div class="ribbon-label">
                                    Trust 42%
                                    <span class="ribbon-inner bg-warning"></span>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#QwinAce</td>
                                            <th scope="col">Pink(x100)</td>
                                            <th scope="col">10:30-10:32</td>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                        <section class="content">
                            <div class="row">
                                <div class="col-12" id="accordion">
                                    <div class="callout callout-info card card-primary card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    1. Lorem ipsum dolor sit amet
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                                ligula eget dolor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-primary card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    2. Aenean massa
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                                nascetur ridiculus mus.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-primary card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    3. Donec quam felis
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                                consequat massa quis enim.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-warning card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    4. Donec pede justo
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-warning card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseFive">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    5. In enim justo
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                                dictum felis eu pede mollis pretium.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-warning card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseSix">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    6. Integer tincidunt
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                                                vulputate eleifend tellus.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-danger card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseSeven">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    7. Aenean leo ligula
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseSeven" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-danger card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseEight">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    8. Aliquam lorem ante
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseEight" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus
                                                viverra nulla ut metus varius laoreet.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-danger card-outline">
                                        <a class="d-block w-100" data-toggle="collapse" href="#collapseNine">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    9. Quisque rutrum
                                                </h4>
                                            </div>
                                        </a>
                                        <div id="collapseNine" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
                                                ullamcorper ultricies nisi.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3 text-center">
                                    <p class="lead">
                                        <a href="contact-us.html">Contact us</a>,
                                        if you found not the right anwser or you have a other question?<br>
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade show" id="kt_tab_pane_5" role="tabpanel">
                        <div class="callout callout-info">
                            <h5>I am an info callout!</h5>

                            <p>Follow the steps to continue to payment.</p>
                        </div>
                        <div class="callout callout-warning">
                            <h5>I am a warning callout!</h5>

                            <p>This is a yellow callout.</p>
                        </div>
                        <div class="callout callout-success">
                            <h5>I am a success callout!</h5>

                            <p>This is a green callout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@sluc
@push('js-scripts')
    <script type="text/javascript">
        var HeaderclockElement = document.getElementById('header-clock');

        function clock() {
            HeaderclockElement.textContent = new Date().toLocaleTimeString();
        }
        setInterval(clock, 1000);
    </script>
    <script type="text/javascript">
        var betwayClockElement = document.getElementById('betway-clock');

        function clock() {
            betwayClockElement.textContent = new Date().toLocaleTimeString();
        }
        setInterval(clock, 1000);
    </script>
    <script type="text/javascript">
        var msportClockElement = document.getElementById('msport-clock');

        function clock() {
            msportClockElement.textContent = new Date().toLocaleTimeString();
        }
        setInterval(clock, 1000);
    </script>
    <script type="text/javascript">
        var sportyClockElement = document.getElementById('sporty-clock');

        function clock() {
            sportyClockElement.textContent = new Date().toLocaleTimeString();
        }
        setInterval(clock, 1000);
    </script>
@endpush

@extends('backend.layout.main')

@section('title', 'Reports')

@section('vendor-css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap.min.css')}}">
    <!-- END: Vendor CSS-->
@endsection

@section('page-css')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/pages/app-invoice-list.css')}}">
    <!-- END: Page CSS-->
@endsection

@section('custome-css')
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->
@endsection

@section('main-content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row match-height">
                        <!-- Subscribers Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <p class="card-text">Subscribers Gained Subscribers GainedSubscribers Gained</p>
                                    <button class="btn btn-primary">Report</button>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribers Chart Card ends -->

                        <!-- Subscribers Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <p class="card-text">Subscribers Gained Subscribers GainedSubscribers Gained</p>
                                    <button class="btn btn-primary">Report</button>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribers Chart Card ends -->

                        <!-- Subscribers Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <p class="card-text">Subscribers Gained Subscribers GainedSubscribers Gained</p>
                                    <button class="btn btn-primary">Report</button>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribers Chart Card ends -->

                        <!-- Orders Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header flex-column align-items-start pb-0">
                                    <p class="card-text">Subscribers Gained Subscribers GainedSubscribers Gained</p>
                                    <button class="btn btn-primary">Report</button>
                                </div>
                            </div>
                        </div>
                        <!-- Orders Chart Card ends -->
                    </div>

                    <div class="row match-height">
                        <!-- Timeline Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-app-design">
                                <div class="card-body">
                                    <div class="badge badge-light-primary">03 Sep, 20</div>
                                    <h4 class="card-title mt-1 mb-75 pt-25">App design</h4>
                                    <input type="date" class="form-control">
                                    
                                    
                                    <div class="card-title mt-1 mb-75 pt-25">
                                        <div class="design-planning">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block">Report</button>
                                </div>
                            </div>
                        </div>
                        <!--/ Timeline Card -->

                        <!-- Sales Stats Chart Card starts -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-app-design">
                                <div class="card-body">
                                    <div class="badge badge-light-primary">03 Sep, 20</div>
                                    <h4 class="card-title mt-1 mb-75 pt-25">App design</h4>
                                    <input type="date" class="form-control">
                                    
                                    
                                    <div class="card-title mt-1 mb-75 pt-25">
                                        <div class="design-planning">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block">Report</button>
                                </div>
                            </div>
                        </div>
                        <!-- Sales Stats Chart Card ends -->

                        <!-- App Design Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-app-design">
                                <div class="card-body">
                                    <div class="badge badge-light-primary">03 Sep, 20</div>
                                    <h4 class="card-title mt-1 mb-75 pt-25">App design</h4>
                                    <input type="date" class="form-control">
                                    
                                    
                                    <div class="card-title mt-1 mb-75 pt-25">
                                        <div class="design-planning">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block">Join Team</button>
                                </div>
                            </div>
                        </div>
                        <!--/ App Design Card -->
                    </div>

                    <!-- List DataTable -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card invoice-list-wrapper">
                                <div class="card-datatable table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Salary</th>
                                                <th>Jaan</th>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Salary</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Danish</td>
                                                <td>Danish</td>
                                                <td>Danish</td>
                                                <td>Danish</td>
                                                <td>Danish</td>
                                                <td>Danish</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ List DataTable -->
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('page-js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap.min.js')}}"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/pages/app-invoice-list.js')}}"></script>
    <!-- END: Page JS-->
@endsection
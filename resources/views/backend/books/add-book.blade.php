
@extends('backend.layout.main')

@section('title', 'add-book')

    <!-- BEGIN: Vendor CSS-->
@section('vender-css')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/select/select2.min.css')}}">
@endsection
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/plugins/forms/form-wizard.css')}}">
@endsection
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
@section('custome-css')
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/custom-rtl.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
@endsection
    <!-- END: Custom CSS-->

@section('main-content')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Form Wizard</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item active">Form Wizard
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        {{-- <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            hkdjkshfksdjfklds
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modern Horizontal Wizard -->
                <section class="modern-horizontal-wizard">
                    <div class="bs-stepper wizard-modern modern-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Book Details</span>
                                        <span class="bs-stepper-subtitle">Setup Book Details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#personal-info-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="user" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Personal Info</span>
                                        <span class="bs-stepper-subtitle">Add Personal Info</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#address-step-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="map-pin" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Address</span>
                                        <span class="bs-stepper-subtitle">Add Address</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#social-links-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="link" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Social Links</span>
                                        <span class="bs-stepper-subtitle">Add Social Links</span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        {{-- add books details --}}
                        <div class="bs-stepper-content">
                            <div id="account-details-modern" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Book Details</h5>
                                    <small class="text-muted">Enter Your Book Details.</small>
                                </div>
                                <form action="{{route('addbook')}}" method="POST">
                                    @csrf
                                
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="modern-username">Name</label>
                                            <input type="text" id="modern-username" class="form-control" placeholder="book name" name="name" @required(true)/>
                                            @error('name')
                                                <ul class="alert alert-danger">{{ $message }}</ul>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label" for="modern-email">Author</label>
                                            <input type="text" id="modern-email" class="form-control" placeholder="author name" name="author" @required(true) />
                                            @error('author')
                                                <ul class="alert alert-danger">{{ $message }}</ul>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-password-toggle col-md-6">
                                            <label class="form-label" for="modern-password">Date</label>
                                            <input type="date" id="modern-password" class="form-control" name="date" @required(true) />
                                            @error('date')
                                                <ul class="alert alert-danger">{{ $message }}</ul>
                                            @enderror
                                        </div>
                                        <div class="form-group form-password-toggle col-md-6">
                                            <label class="form-label" for="modern-confirm-password">Salary</label>
                                            <input type="text" id="modern-confirm-password" class="form-control" placeholder="$400000..." name="salary" @required(true) />
                                            @error('salary')
                                                <ul class="alert alert-danger">{{ $message }}</ul>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                            {{-- // Author Details... --}}
                            <div id="personal-info-modern" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Personal Info</h5>
                                    <small>Enter Your Personal Info.</small>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-first-name">First Name</label>
                                        <input type="text" id="modern-first-name" class="form-control" placeholder="John" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-last-name">Last Name</label>
                                        <input type="text" id="modern-last-name" class="form-control" placeholder="Doe" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-country">Country</label>
                                        <select class="select2 w-100" id="modern-country">
                                            <option label=" "></option>
                                            <option>UK</option>
                                            <option>USA</option>
                                            <option>Spain</option>
                                            <option>France</option>
                                            <option>Italy</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-language">Language</label>
                                        <select class="select2 w-100" id="modern-language" multiple>
                                            <option>English</option>
                                            <option>French</option>
                                            <option>Spanish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="address-step-modern" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Address</h5>
                                    <small>Enter Your Address.</small>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-address">Address</label>
                                        <input type="text" id="modern-address" class="form-control" placeholder="98  Borough bridge Road, Birmingham" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-landmark">Landmark</label>
                                        <input type="text" id="modern-landmark" class="form-control" placeholder="Borough bridge" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="pincode3">Pincode</label>
                                        <input type="text" id="pincode3" class="form-control" placeholder="658921" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="city3">City</label>
                                        <input type="text" id="city3" class="form-control" placeholder="Birmingham" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="social-links-modern" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Social Links</h5>
                                    <small>Enter Your Social Links.</small>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-twitter">Twitter</label>
                                        <input type="text" id="modern-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-facebook">Facebook</label>
                                        <input type="text" id="modern-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-google">Google+</label>
                                        <input type="text" id="modern-google" class="form-control" placeholder="https://plus.google.com/abc" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="modern-linkedin">Linkedin</label>
                                        <input type="text" id="modern-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Modern Horizontal Wizard -->
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('venders-js')
        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
        <!-- END: Page Vendor JS-->
@endsection

@section('page-js')
    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/forms/form-wizard.js')}}"></script>
    <!-- END: Page JS-->
@endsection
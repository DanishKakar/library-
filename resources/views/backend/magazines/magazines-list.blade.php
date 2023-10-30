@extends('backend.layout.main')
@section('title', 'books')

<!-- BEGIN: Vendor CSS-->
@section('vender-css')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors-rtl.min.css')}}">
@endsection
    <!-- END: Vendor CSS-->
<!-- BEGIN: Page CSS-->
@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
@endsection
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
@section('custom-css')
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
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertForm">
                                Add New Book
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">  
                        <div class="card-body">
                            <form action="{{route('report1')}}" method="GET">
                                {{-- Report by two date --}}
                                    <div class="row">
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary">Report</button>
                                        </div>
                                        <div class="col-4">
                                            <input type="date" name="sdate" class="form-control">
                                        </div>
                                        <div class="col-4">
                                            <input type="date" name="fdate" class="form-control">
                                        </div>
                                    </div>
                                   
                                {{-- Report --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="demo-inline-spacing">
                <div class="form-modal-ex">
                    <!--Insert Modal -->
                    <div class="modal fade text-left" id="insertForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Add new Book Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('addbook')}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Name: </label>
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Book Name" class="form-control" @required(true) minlength="4"/>
                                        </div>

                                        <label>Author: </label>
                                        <div class="form-group">
                                            <input type="text" name="author" placeholder="Author Name" class="form-control" @required(true) minlength="4"/>
                                        </div>

                                        <label>Date: </label>
                                        <div class="form-group">
                                            <input type="date" name="date" placeholder="" class="form-control" @required(true) />
                                        </div>

                                        <label>Salary: </label>
                                        <div class="form-group">
                                            <input type="text" name="salary" placeholder="$40000...." class="form-control" @required(true) />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Of Insert Model --}}

                    {{-- Edit Model --}}
                    <div class="modal fade text-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Edit & Update Book Details</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('updatebook')}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="book_id" id="book_id">

                                    <div class="modal-body">
                                        <label>Name: </label>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Book Name" class="form-control" @required(true) minlength="4" />
                                        </div>

                                        <label>Author: </label>
                                        <div class="form-group">
                                            <input type="text" name="author" id="author" placeholder="Author Name" class="form-control" @required(true) minlength="4"/>
                                        </div>

                                        <label>Date: </label>
                                        <div class="form-group">
                                            <input type="date" name="date" id="date" placeholder="" class="form-control" @required(true) />
                                        </div>

                                        <label>Salary: </label>
                                        <div class="form-group">
                                            <input type="text" name="salary" id="salary" placeholder="$40000...." class="form-control" @required(true) />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- End Of Edit Model --}}
                </div>
            </div>
            <div class="content-body">
                <!--/ Basic table -->
                <x-sweetalert  />
                <!-- Table Hover Animation start -->
                <div class="row" id="table-hover-animation">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Magazines Table</h4>
                                <div class="col-5 col-md-5">
                                    <form action="{{route('searchbook')}}" method="GET">
                                        <div class="input-group-prepend">
                                            <input type="text" class="form-control" id="search" name="search" placeholder="Search ..."  />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="display: inline">
                                    Add.table-hover-animation to enable a hover stat with animation on table rows within a
                                    tbody.
                                </p>
                                <div class="btn-group float-right">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Export
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="" onclick="ExportToExcel('xlsx')">
                                            <i data-feather="file"></i>  xlsx
                                        </a>
                                        <a class="dropdown-item" href="" onclick="Export()">
                                            <i data-feather="file"></i>  pdf
                                        </a>
                                        <a class="dropdown-item" href="" onclick="printData()">
                                            <i data-feather="printer"></i>   print
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover-animation" id="printTable">
                                    <caption style="caption-side: top;" hidden="true" id="cap"><h3>Magazine Table</h3></caption>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Author</th>
                                            <th>Date</th>
                                            <th>Salary</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($books->isNotEmpty())  
                                            @foreach ($books as $book) 
                                                <tr id="tr_{{$book->id}}">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$book->name}}</td>
                                                    <td>{{$book->author}}</td>
                                                    <td>{{$book->date}}</td>
                                                    <td>{{$book->salary}}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                                <i data-feather="more-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button type="button" class="dropdown-item editbtn" value="{{$book->id}}">
                                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                                    <span>Edit</span>
                                                                </button>
                                                           
                                                                <form action="{{route('deletebook', $book->id)}}" method="POST" onsubmit="return confirm('Do you really want to delete!')">

                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="dropdown-item">
                                                                        <i data-feather="trash" class="mr-50"></i>
                                                                        <span>Delete</span>
                                                                    </button>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <td colspan="6" style="text-align: center">No record found....!</td>
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th><b>Total</b></th>
                                            <th></th>
                                            <th></th>
                                            <th><b>{{$total}}</b></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="col-12 text-right">
                                    {!! $books->withQueryString()->links('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('venders-js')
    <!-- BEGIN: Page Vendor JS-->
    {{-- <script src="{{asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script> --}}
    {{-- <script src="{{asset('app-assets/vendors/js/extensions/polyfill.min.js')}}"></script> --}}
    <!-- END: Page Vendor JS-->
@endsection

<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>


{{-- Export table component  --}}
<x-exportfile id="printTable " />


    <!-- BEGIN: Page JS-->
@section('page-js')

{{-- scripts for editing records --}}
<script>
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            var $book_id = $(this).val();
            // alert($book_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                datatype: "json",
                url: "/edit-book/"+$book_id,
                success: function (response) {
                    // console.log(response.name);
                    $('#name').val(response.name);        
                    $('#author').val(response.author);        
                    $('#date').val(response.date);        
                    $('#salary').val(response.salary);        
                    $('#book_id').val(response.id);        
                }

            });
        });
    });
    
</script>

    {{-- <script src="{{asset('app-assets/js/scripts/tables/table-datatables-basic.js')}}"></script> --}}
    <script src="{{asset('app-assets/js/scripts/components/components-modals.js')}}"></script>
    {{-- <script src="{{asset('app-assets/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script> --}}
@endsection
    <!-- END: Page JS-->
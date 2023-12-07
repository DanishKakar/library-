@extends('admin.layout.main')

@section('title', 'All Customers')

@section('page-css')
    <link href="{{asset('app-assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('app-assets/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />
@endsection

@section('main-content')

<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <x-welcome title="Customers" />
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>hjdj</td>
                                                <td>hjdj</td>
                                                <td>hjdj</td>
                                                <td>hjdj</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>$183,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <x-footer />
            </section>
        </div>
    </div>
</div>

@endsection

@section('page-js')

    <script src="{{asset('app-assets/js/scripts.js')}}"></script>

    <script src="{{asset('app-assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('app-assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('app-assets/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{asset('app-assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('app-assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('app-assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('app-assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('app-assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('app-assets/js/lib/data-table/datatables-init.js')}}"></script>
@endsection
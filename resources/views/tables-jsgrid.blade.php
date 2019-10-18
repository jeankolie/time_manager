@extends('layouts.master')

@section('css')
        <!-- JsGrid css -->
        <link href="{{ URL::asset('assets/libs/jsgrid/jsgrid.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">JsGrid</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">JsGrid Tables</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div id="jsGrid"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!-- JsGrid js -->
        <script src="{{ URL::asset('assets/libs/jsgrid/jsgrid.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ URL::asset('assets/js/pages/jsgrid.init.js')}}"></script>

@endsection
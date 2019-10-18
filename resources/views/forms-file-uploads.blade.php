@extends('layouts.master')

@section('css')

        <!-- Plugins css -->
        <link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">File Uploads</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">File Uploads</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Dropzone File Upload</h4>
                                        <p class="sub-header">
                                            DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                                        </p>
            
                                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
            
                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>
                                        <div class="clearfix text-right mt-3">
                                            <button type="button" class="btn btn-danger"> <i class="mdi mdi-send mr-1"></i> Submit</button>
                                        </div>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Dropify File Upload</h4>
                                        <p class="sub-header">
                                            Override your input files with style. Your so fresh input file — Default version.
                                        </p>
            
                                        <input type="file" class="dropify" data-height="300" />

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mt-3">
                                                    <input type="file" class="dropify" data-default-file="assets/images/small/img-2.jpg"  />
                                                    <p class="text-muted text-center mt-2 mb-0">Default File</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mt-3">
                                                    <input type="file" class="dropify" disabled="disabled"  />
                                                    <p class="text-muted text-center mt-2 mb-0">Disabled the input</p>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mt-3">
                                                    <input type="file" class="dropify" data-max-file-size="1M" />
                                                    <p class="text-muted text-center mt-2 mb-0">Max File size</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/dropify/dropify.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/form-fileuploads.init.js')}}"></script>
@endsection
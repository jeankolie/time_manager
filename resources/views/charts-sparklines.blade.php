@extends('layouts.master')

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                            <li class="breadcrumb-item active">Sparklines</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Sparklines</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Line Charts</h4>

                                    <div class="mt-4">
                                        <div id="sparkline1"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Bar Chart</h4>

                                    <div class="mt-4">
                                        <div id="sparkline2" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Pie Chart</h4>

                                    <div class="mt-4">
                                        <div id="sparkline3" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Custom Line Chart</h4>

                                    <div class="mt-4">
                                        <div id="sparkline4" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Mouse Speed Chart</h4>

                                    <div class="mt-4">
                                        <div id="sparkline5" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Composite bar Chart</h4>

                                    <div class="text-center mt-4">
                                        <div id="sparkline6" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Discrete Chart</h4>

                                    <div class="text-center mt-4">
                                        <div id="sparkline7" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Bullet Chart</h4>

                                    <div class="text-center mt-4" style="min-height: 164px;">
                                        <div id="sparkline8" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Box Plot Chart</h4>

                                    <div class="text-center mt-4" style="min-height: 164px;">
                                        <div id="sparkline9" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Tristate Charts</h4>

                                    <div class="text-center mt-4" style="min-height: 164px;">
                                        <div id="sparkline10" class="text-center"></div>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!-- Sparkline charts -->
        <script src="{{ URL::asset('assets/libs/jquery-sparkline/jquery-sparkline.min.js')}}"></script>

        <!-- init js -->
        <script src="{{ URL::asset('assets/js/pages/sparkline.init.js')}}"></script>

@endsection
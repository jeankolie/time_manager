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
                                            <li class="breadcrumb-item active">JustGage</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">JustGage</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <div class="card-box">
                                    <div class="text-center">
                                        <h5>Lifetime Sales</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 549849 <small>USD</small></h3>
                                    </div>

                                    <div id="g1" class="gauge-chart"></div>
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                            <div class="col-lg-4 text-center">
                                <div class="card-box">
                                    <div class="text-center">
                                        <h5>Income Amounts</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 64654 <small>USD</small></h3>
                                    </div>

                                    <div id="g2" class="gauge-chart"></div>
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                            <div class="col-lg-4 text-center">
                                <div class="card-box">
                                    <div class="text-center">
                                        <h5>Total visits</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 87798 <small>USD</small></h3>
                                    </div>

                                    <div id="g3" class="gauge-chart"></div>
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <div class="card-box">
                                    <div class="text-center">
                                        <h5>Income Amounts</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 54 <small>USD</small></h3>
                                    </div>

                                    <div id="g4" class="gauge-chart"></div>
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                            <div class="col-lg-4 text-center">
                                <div class="card-box">
                                    <div class="text-center">
                                        <h5>Lifetime Sales</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 48948 <small>USD</small></h3>
                                    </div>

                                    <div id="g5" class="gauge-chart"></div>
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                            <div class="col-lg-4 text-center">
                                <div class="card-box">
                                    <div class="text-center">
                                        <h5>You have to pay</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 4894 <small>USD</small></h3>
                                    </div>

                                    <div id="g6" class="gauge-chart"></div>
                                    
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                        </div><!-- end row-->

                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <div class="card-box">
                                    <div class="text-center">
                                        <h5>Lifetime Sales</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 56599 <small>USD</small></h3>
                                    </div>

                                    <div id="g7" class="gauge-chart"></div>
                                    
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                            <div class="col-lg-4 text-center">
                                <div class="card-box">
                                    <div class="text-center">
                                        <h5>Income Amounts</h5>
                                        <h3 class="mb-0"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 325410 <small>USD</small></h3>
                                    </div>

                                    <div id="g8" class="gauge-chart"></div>
                                    <a href="javascript:void(0);" id="g8_refresh" class="btn btn-sm btn-success w-lg btn-rounded waves-effect waves-light">Random Refresh</a>
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                        </div><!-- end row -->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!--Just gage charts-->
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/justgage/justgage.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ URL::asset('assets/js/pages/justgage.init.js')}}"></script>

@endsection
@extends('layouts.master')

@section('css')
        <!-- Ricksaw Css-->
        <link href="{{ URL::asset('assets/libs/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                            <li class="breadcrumb-item active">Ricksaw</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Ricksaw Charts</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Realtime Chart</h4>
                                    <div class="text-center mb-3">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Ethereum</span>
                                        </p>
                                    </div>
                                    <div id="linechart"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Lines & Toggling Chart</h4>
                                    <div class="text-center mb-3">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> London</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> New York</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Tokyo</span>
                                        </p>
                                    </div>
                                    <div id="linetoggle"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Line Chart</h4>
                                    <div class="text-center mb-3">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Ethereum</span>
                                        </p>
                                    </div>
                                    <div id="lineplotchart"></div>

                                </div> <!-- card-box -->
                            </div> <!-- end row -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Multi Chart</h4>
                                    <div class="column"  style="height: 297px;">
                                        <div id="multichart"></div>
                                    </div>
                                    <div class="column" id="legend"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Simple area Chart</h4>
                                    <div class="text-center mb-3">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Sales Analytics</span>
                                        </p>
                                    </div>
                                    <div id="simplearea"></div>

                                </div> <!-- end card-box-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Multiple Area</h4>
                                    <div class="text-center mb-3">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Litecoin</span>
                                        </p>
                                    </div>
                                    <div id="multiplearea" style="height: 250px;"></div>

                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!-- D3 chart (required) in ricksaw charts (v3.5.17)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>

        <!-- Ricksaw js-->
        <script src="{{ URL::asset('assets/libs/rickshaw/rickshaw.min.js')}}"></script>

        <!-- init js -->
        <script src="{{ URL::asset('assets/js/pages/ricksaw.init.js')}}"></script>

@endsection
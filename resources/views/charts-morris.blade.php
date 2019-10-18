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
                                            <li class="breadcrumb-item active">Morris</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Morris Charts</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box" dir="ltr">
                                    <h4 class="header-title mb-3">Stacked Bar Chart</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Ethereum</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Litecoin</span>
                                        </p>
                                    </div>
                                    <div id="morris-bar-stacked" style="height: 350px;" class="morris-chart"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card-box" dir="ltr">
                                    <h4 class="header-title mb-3">Area Chart</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Ethereum</span>
                                        </p>
                                    </div>
                                    <div id="morris-area-example" style="height: 350px;" class="morris-chart"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box" dir="ltr">
                                    <h4 class="header-title mb-3">Line Chart</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-pink"></i> Ethereum</span>
                                        </p>
                                    </div>
                                    <div id="morris-line-example" style="height: 350px;" class="morris-chart"></div>
                                </div> <!-- card-box -->
                            </div> <!-- end row -->

                            <div class="col-lg-6">
                                <div class="card-box" dir="ltr">
                                    <h4 class="header-title mb-3">Bar Chart</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Ethereum</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Litecoin</span>
                                        </p>
                                    </div>
                                    <div id="morris-bar-example" style="height: 350px;" class="morris-chart"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box" dir="ltr">
                                    <h4 class="header-title mb-3">Area Chart with Point</h4>
                                    <div class="text-center">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Ethereum</span>
                                        </p>
                                    </div>
                                    <div id="morris-area-with-dotted" style="height: 350px;" class="morris-chart"></div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card-box" dir="ltr">
                                    <h4 class="header-title mb-3">Donut Chart</h4>
                                    <div id="morris-donut-example" style="height: 350px;" class="morris-chart"></div>
                                    <div class="text-center">
                                        <p class="text-muted font-15 font-family-secondary mb-0">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Bitcoin</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Ethereum</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Litecoin</span>
                                        </p>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!--Morris Chart-->
        <script src="{{ URL::asset('assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ URL::asset('assets/js/pages/morris.init.js')}}"></script>

@endsection
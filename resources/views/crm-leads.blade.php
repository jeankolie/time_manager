@extends('layouts.master')

@section('css')
        <!-- Custom box css -->
        <link href="{{ URL::asset('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                            <li class="breadcrumb-item active">Leads</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Leads</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-xl-8 order-xl-1 order-2">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <form class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword2" class="sr-only">Search</label>
                                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-right">
                                                    <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-settings"></i></button>
                                                    <a href="#custom-modal" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                                <div class="card-box mb-2">
                                    <div class="row align-items-center">
                                        <div class="col-sm-4">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="assets/images/companies/amazon.png" alt="Generic placeholder image" height="64">
                                                <div class="media-body">
                                                    <h4 class="mt-0 mb-2 font-16">Amazon Inc.</h4>
                                                    <p class="mb-1"><b>Location:</b> Seattle, Washington</p>
                                                    <p class="mb-0"><b>Category:</b> Ecommerce</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-center my-3 my-sm-0">
                                                <p class="mb-0 text-muted">October 22, 2018</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center button-list">
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Assign</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Call</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Email</a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-2">
                                            <div class="text-sm-right text-center mt-2 mt-sm-0">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box-->

                                <div class="card-box mb-2">
                                    <div class="row align-items-center">
                                        <div class="col-sm-4">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="assets/images/companies/apple.png" alt="Generic placeholder image" height="64">
                                                <div class="media-body">
                                                    <h4 class="mt-0 mb-2 font-16">Apple Inc.</h4>
                                                    <p class="mb-1"><b>Location:</b> Cupertino, California</p>
                                                    <p class="mb-0"><b>Category:</b> Ecommerce</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-center my-3 my-sm-0">
                                                <p class="mb-0 text-muted">September 08, 2018</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center button-list">
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Assign</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Call</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Email</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-sm-right text-center mt-2 mt-sm-0">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box-->

                                <div class="card-box mb-2">
                                    <div class="row align-items-center">
                                        <div class="col-sm-4">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="assets/images/companies/google.png" alt="Generic placeholder image" height="64">
                                                <div class="media-body">
                                                    <h4 class="mt-0 mb-2 font-16">Google LLC</h4>
                                                    <p class="mb-1"><b>Location:</b> Menlo Park, California</p>
                                                    <p class="mb-0"><b>Category:</b> Search engine</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-center my-3 my-sm-0">
                                                <p class="mb-0 text-muted">October 10, 2018</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center button-list">
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Assign</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Call</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Email</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-sm-right text-center mt-2 mt-sm-0">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box-->

                                <div class="card-box mb-2">
                                    <div class="row align-items-center">
                                        <div class="col-sm-4">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="assets/images/companies/airbnb.png" alt="Generic placeholder image" height="64">
                                                <div class="media-body">
                                                    <h4 class="mt-0 mb-2 font-16">Airbnb Inc.</h4>
                                                    <p class="mb-1"><b>Location:</b> San Francisco, California</p>
                                                    <p class="mb-0"><b>Category:</b> Real Estate</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-center my-3 my-sm-0">
                                                <p class="mb-0 text-muted">August 18, 2018</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center button-list">
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Assign</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Call</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Email</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-sm-right text-center mt-2 mt-sm-0">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box-->

                                <div class="card-box mb-2">
                                    <div class="row align-items-center">
                                        <div class="col-sm-4">
                                            <div class="media">
                                                <img class="d-flex align-self-center mr-3 rounded-circle" src="assets/images/companies/cisco.png" alt="Generic placeholder image" height="64">
                                                <div class="media-body">
                                                    <h4 class="mt-0 mb-2 font-16">Cisco Systems</h4>
                                                    <p class="mb-1"><b>Location:</b> San Jose, California</p>
                                                    <p class="mb-0"><b>Category:</b> Operating Systems</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-center my-3 my-sm-0">
                                                <p class="mb-0 text-muted">March 28, 2018</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center button-list">
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Assign</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Call</a>
                                                <a href="javascript: void(0);" class="btn btn-xs btn-primary waves-effect waves-light">Email</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="text-sm-right text-center mt-2 mt-sm-0">
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box-->

                                <div class="text-center my-4">
                                    <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                                </div>

                            </div> <!-- end col -->

                            <div class="col-xl-4 order-xl-2 order-1">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Leads Statics</h4>

                                    <div class="text-center" dir="ltr">
                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <h3 data-plugin="counterup">1,284</h3>
                                                <p class="text-muted font-13 mb-0 text-truncate">Leads Won</p>
                                            </div>
                                            <div class="col-6">
                                                <h3 data-plugin="counterup">7,841</h3>
                                                <p class="text-muted font-13 mb-0 text-truncate">Leads Lost</p>
                                            </div>
                                        </div>

                                        <div id="leads-statics" style="height: 280px;" class="morris-chart"></div>

                                        <p class="text-muted font-15 font-family-secondary mb-0 mt-3">
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Leads Won</span>
                                            <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-muted"></i> Leads Lost</span>
                                        </p>
                                    </div>

                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

        <!-- Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.modal.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Add New Leads</h4>
            <div class="custom-modal-text text-left">
                <form>
                    <div class="form-group">
                        <label for="name">Company Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter company name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="position">Phone</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter phone number">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" placeholder="Enter category">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" onclick="Custombox.close();">Cancel</button>
                    </div>
                </form>
            </div>
        </div> 

@endsection

@section('script')
        <!-- Modal-Effect -->
        <script src="{{ URL::asset('assets/libs/custombox/custombox.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{ URL::asset('assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- CRM leads init js-->
        <script src="{{ URL::asset('assets/js/pages/crm-leads.init.js')}}"></script>

@endsection
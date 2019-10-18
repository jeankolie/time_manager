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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded bg-soft-primary">
                                                <i class="dripicons-wallet font-24 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded bg-soft-success">
                                                <i class="dripicons-basket font-24 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">1,845</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Orders</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded bg-soft-info">
                                                <i class="dripicons-store font-24 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">825</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Stores</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded bg-soft-warning">
                                                <i class="dripicons-user-group font-24 avatar-title text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">2,430</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Sellers</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Revenue Analytics</h4>
                                    <div class="row">
                                        <div class="col-lg-8" dir="ltr">
                                            <div class="text-center">
                                                <p class="text-muted font-15 font-family-secondary mb-0">
                                                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-light"></i> Desktops</span>
                                                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Tablets</span>
                                                    <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-blue"></i> Mobiles</span>
                                                </p>
                                            </div>
                                            <div id="morris-area-with-dotted" style="height: 320px;" class="morris-chart my-3 mb-lg-0"></div>
                                        </div> <!-- end col -->

                                        <div class="col-lg-4">
                                            <h5 class="mt-0">iMacs <span class="text-muted float-right">70%</span></h5>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <h5 class="mt-3">iBooks <span class="text-muted float-right">39%</span></h5>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <h5 class="mt-3">iPhone 5s <span class="text-muted float-right">65%</span></h5>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
        
                                            <h5 class="mt-3">iPhone 6 <span class="text-muted float-right">92%</span></h5>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <h5 class="mt-3">iPhone X <span class="text-muted float-right">38%</span></h5>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 38%;" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <div class="row text-center">
                                                <div class="col-6 mt-3">
                                                    <h3 class="font-weight-light"> <i class="mdi mdi-cloud-download text-info"></i> 79%</h3>
                                                    <p class="text-muted text-overflow">Per min user</p>
                                                </div> <!-- end col -->
                                                <div class="col-6 mt-3">
                                                    <h3 class="font-weight-light"> <i class="mdi mdi-cloud-upload text-danger"></i> 23%</h3>
                                                    <p class="text-muted text-overflow">Bounce Rate</p>
                                                </div> <!-- end col -->
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div>  <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Transaction History</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Name</th>
                                                    <th class="border-top-0">Card</th>
                                                    <th class="border-top-0">Date</th>
                                                    <th class="border-top-0">Amount</th>
                                                    <th class="border-top-0">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-2.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                        <span class="ml-2">Imelda J. Stanberry</span>
                                                    </td>
                                                    <td>
                                                        <img src="assets/images/cards/visa.png" alt="user-card" height="24" />
                                                        <span class="ml-2">**** 3256</span>
                                                    </td>
                                                    <td>27.03.2018</td>
                                                    <td>$345.98</td>
                                                    <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-3.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                        <span class="ml-2">Francisca S. Lobb</span>
                                                    </td>
                                                    <td>
                                                        <img src="assets/images/cards/master.png" alt="user-card" height="24" />
                                                        <span class="ml-2">**** 8451</span>
                                                    </td>
                                                    <td>28.03.2018</td>
                                                    <td>$1,250</td>
                                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-1.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                        <span class="ml-2">James A. Wert</span>
                                                    </td>
                                                    <td>
                                                        <img src="assets/images/cards/amazon.png" alt="user-card" height="24" />
                                                        <span class="ml-2">**** 2258</span>
                                                    </td>
                                                    <td>28.03.2018</td>
                                                    <td>$145</td>
                                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-4.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                        <span class="ml-2">Dolores J. Pooley</span>
                                                    </td>
                                                    <td>
                                                        <img src="assets/images/cards/american-express.png" alt="user-card" height="24" />
                                                        <span class="ml-2">**** 6950</span>
                                                    </td>
                                                    <td>29.03.2018</td>
                                                    <td>$2,005.89</td>
                                                    <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/users/user-5.jpg" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                        <span class="ml-2">Karen I. McCluskey</span>
                                                    </td>
                                                    <td>
                                                        <img src="assets/images/cards/discover.png" alt="user-card" height="24" />
                                                        <span class="ml-2">**** 0021</span>
                                                    </td>
                                                    <td>31.03.2018</td>
                                                    <td>$24.95</td>
                                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->

                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                            <div class="col-xl-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Recent Products</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Product</th>
                                                    <th class="border-top-0">Category</th>
                                                    <th class="border-top-0">Added Date</th>
                                                    <th class="border-top-0">Amount</th>
                                                    <th class="border-top-0">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/product-1.jpg" alt="product-pic" height="36" />
                                                        <span class="ml-2">Adirondack Chair</span>
                                                    </td>
                                                    <td>
                                                        Dining Chairs
                                                    </td>
                                                    <td>27.03.2018</td>
                                                    <td>$345.98</td>
                                                    <td><span class="badge bg-soft-success text-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/product-2.jpg" alt="product-pic" height="36" />
                                                        <span class="ml-2">Biblio Plastic Armchair</span>
                                                    </td>
                                                    <td>
                                                        Baby Chairs
                                                    </td>
                                                    <td>28.03.2018</td>
                                                    <td>$1,250</td>
                                                    <td><span class="badge bg-soft-success text-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/product-3.jpg" alt="product-pic" height="36" />
                                                        <span class="ml-2">Amazing Modern Chair</span>
                                                    </td>
                                                    <td>
                                                        Plastic Armchair
                                                    </td>
                                                    <td>28.03.2018</td>
                                                    <td>$145</td>
                                                    <td><span class="badge bg-soft-danger text-danger">Deactive</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/product-4.jpg" alt="product-pic" height="36" />
                                                        <span class="ml-2">Designer Awesome Chair</span>
                                                    </td>
                                                    <td>
                                                        Wing Chairs
                                                    </td>
                                                    <td>29.03.2018</td>
                                                    <td>$2,005.89</td>
                                                    <td><span class="badge bg-soft-success text-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/products/product-5.jpg" alt="product-pic" height="36" />
                                                        <span class="ml-2">The butterfly chair</span>
                                                    </td>
                                                    <td>
                                                        Plastic Armchair
                                                    </td>
                                                    <td>31.03.2018</td>
                                                    <td>$24.95</td>
                                                    <td><span class="badge bg-soft-success text-success">Active</span></td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!--Morris Chart-->
        <script src="{{ URL::asset('assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Dashboard init js -->
        <script src="{{ URL::asset('assets/js/pages/ecommerce-dashboard.init.js')}}"></script>

@endsection
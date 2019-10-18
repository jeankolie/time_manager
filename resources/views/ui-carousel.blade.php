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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                                            <li class="breadcrumb-item active">Carousel</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Carousel</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class=" m-t-0 header-title">Bootstrap Carousel</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">

                                            <p class="sub-header">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. </p>

                                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-1.jpg" alt="First slide" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">First slide label</h3>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-2.jpg" alt="Second slide" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">Second slide label</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-3.jpg" alt="Third slide" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">Third slide label</h3>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mt-3 mt-lg-0">

                                            <p class="sub-header">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. </p>

                                            <!-- START carousel-->
                                            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExample" data-slide-to="1"></li>
                                                    <li data-target="#carouselExample" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-4.jpg" alt="First slide" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-5.jpg" alt="Second slide" />
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-6.jpg" alt="Third slide" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END carousel-->
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-6">
        
                                            <p class="sub-header">Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>
        
                                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-3.jpg" alt="First slide" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">First slide label</h3>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-1.jpg" alt="Second slide" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">Second slide label</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img-2.jpg" alt="Third slide" />
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">Third slide label</h3>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

@endsection
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
                                            <li class="breadcrumb-item active">General</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">General UI</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Badges</h4>
                                    <p class="text-muted font-14 mb-3">
                                        Badges scale to match the size of the immediate parent element by using relative font sizing and <code>em</code> units.
                                    </p>

                                    <span class="badge badge-primary">Primary</span>
                                    <span class="badge badge-secondary">Secondary</span>
                                    <span class="badge badge-success">Success</span>
                                    <span class="badge badge-danger">Danger</span>
                                    <span class="badge badge-warning">Warning</span>
                                    <span class="badge badge-info">Info</span>
                                    <span class="badge badge-light">Light</span>
                                    <span class="badge badge-pink">Pink</span>
                                    <span class="badge badge-blue">Blue</span>
                                    <span class="badge badge-dark">Dark</span>
                                </div> <!-- end card-box -->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Pill Badges</h4>
                                    <p class="text-muted font-14 mb-3">
                                        Use the <code>.badge-pill</code> modifier class to make badges more rounded.
                                    </p>

                                    <span class="badge badge-primary badge-pill">Primary</span>
                                    <span class="badge badge-secondary badge-pill">Secondary</span>
                                    <span class="badge badge-success badge-pill">Success</span>
                                    <span class="badge badge-danger badge-pill">Danger</span>
                                    <span class="badge badge-warning badge-pill">Warning</span>
                                    <span class="badge badge-info badge-pill">Info</span>
                                    <span class="badge badge-light badge-pill">Light</span>
                                    <span class="badge badge-dark badge-pill">Dark</span>
                                    <span class="badge badge-pink badge-pill">Pink</span>
                                    <span class="badge badge-blue badge-pill">Blue</span>
                                </div> <!-- end card-box -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="header-title">Pagination</h4>
                                                <p class="text-muted font-14 mb-3">
                                                    Provide pagination links for your site or app with the multi-page pagination component.
                                                </p>
    
                                                <p class="mb-1 font-weight-bold">Default Pagination</p>
                                                <p class="text-muted font-14">
                                                    Simple pagination inspired by Rdio, great for apps and search results.
                                                </p>
    
                                                <nav>
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>

                                                <p class="mb-1 font-weight-bold mt-4">Rounded Pagination</p>
                                                <p class="text-muted font-14">
                                                    Add <code> .pagination-rounded</code> for rounded pagination.
                                                </p>
    
                                                <nav>
                                                    <ul class="pagination pagination-rounded">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
    
    
                                                <p class="mb-1 font-weight-bold mt-4">Sizing</p>
                                                <p class="text-muted font-14">
                                                    Add <code>
                                                    .pagination-lg</code>
                                                    or <code>
                                                    .pagination-sm</code>
                                                    for additional sizes.
                                                </p>
    
                                                <nav>
                                                    <ul class="pagination pagination-lg">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
    
                                                <nav>
                                                    <ul class="pagination pagination-sm">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                                <span aria-hidden="true">&laquo;</span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                                <span aria-hidden="true">&raquo;</span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
    
                                                <p class="mb-1 font-weight-bold mt-4">Alignment</p>
                                                <p class="text-muted font-14">
                                                    Change the alignment of pagination components with flexbox utilities.
                                                </p>
    
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item disabled">
                                                            <a class="page-link" href="javascript: void(0);" tabindex="-1">Previous</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
    
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item disabled">
                                                            <a class="page-link" href="javascript: void(0);" tabindex="-1">Previous</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
    
                                            </div>
    
                                            <div class="col-md-6">
                                                <h4 class="header-title mt-3 mt-sm-0">Breadcrumb</h4>
                                                <p class="text-muted font-14">
                                                    Indicate the current page’s location within a navigational hierarchy.
                                                </p>
    
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item active">Home</li>
                                                </ol>
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                                    <li class="breadcrumb-item active">Library</li>
                                                </ol>
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Library</a></li>
                                                    <li class="breadcrumb-item active">Data</li>
                                                </ol>
    
                                            </div>
    
                                        </div>
                                        <!-- end row -->
            
                                    </div> <!-- end card-body-->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="jumbotron">
                                    <h1 class="display-4">Hello, world!</h1>
                                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    <hr class="my-4">
                                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                    <a class="btn btn-primary btn-lg waves-effect waves-light" href="#" role="button">Learn more</a>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Scrollspy</h4>
                                    <p class="text-muted font-14 mb-3">
                                        Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.
                                    </p>

                                    <nav id="navbar-example2" class="navbar navbar-light bg-light">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#fat">@fat</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#mdo">@mdo</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <i class="mdi mdi-chevron-down"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#one">one</a>
                                                    <a class="dropdown-item" href="#two">two</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#three">three</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">
                                        <h4 id="fat">@fat</h4>
                                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                                        <h4 id="mdo">@mdo</h4>
                                        <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
                                        <h4 id="one">one</h4>
                                        <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
                                        <h4 id="two">two</h4>
                                        <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
                                        <h4 id="three">three</h4>
                                        <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                                        <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
                                        </p>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

@endsection
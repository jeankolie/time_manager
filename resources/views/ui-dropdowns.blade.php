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
                                            <li class="breadcrumb-item active">Dropdowns</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dropdowns</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Examples</h4>
                                    <p class="sub-header">
                                        Toggle contextual overlays for displaying lists of links and more with the Bootstrap dropdown plugin.
                                    </p>

                                    <div class="row">
                                        <div class="col-xl-6">

                                            <p class="h5">Single button dropdowns</p>
                                            <p class="text-muted font-13 mb-3">
                                                Any single <code
                                                    class="highlighter-rouge">.btn</code> can be turned into a dropdown
                                                toggle with some markup changes. Here’s how you can put them to work
                                                with either <code class="highlighter-rouge">&lt;button&gt;</code>
                                                elements:
                                            </p>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="dropdown">
                                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropdown button <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="dropdown">
                                                        <a class="btn btn-light dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropdown link <i class="mdi mdi-chevron-down"></i>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->

                                            <p class="mb-1 mt-5 h5">Variant</p>
                                            <p class="text-muted font-13 mb-3">
                                                The best part is you can do this with any button variant, too:
                                            </p>

                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success <i class="mdi mdi-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info <i class="mdi mdi-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning <i class="mdi mdi-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger <i class="mdi mdi-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->

                                            <p class="mb-1 mt-5 h5">Dropright variation</p>
                                            <p class="text-muted font-13 mb-3">
                                                Trigger dropdown menus at the right of the elements by adding <code>.dropright</code> to the parent element.
                                            </p>

                                            <!-- Default dropright button -->
                                            <div class="btn-group mb-2 dropright">
                                                <button type="button" class="btn btn-blue waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Dropright <i class="mdi mdi-chevron-right"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>

                                            <!-- Split dropright button -->
                                            <div class="btn-group mb-2 dropright">
                                                <button type="button" class="btn btn-success waves-effect waves-light">
                                                    Split dropright
                                                </button>
                                                <button type="button" class="btn btn-success waves-effect waves-light dropdown-toggle-split dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>

                                            <p class="mb-1 mt-5 h5">Dropup variation</p>
                                            <p class="text-muted font-13 mb-3">
                                                Trigger dropdown menus above elements
                                                by adding <code class="highlighter-rouge">.dropup</code> to the parent
                                                element.
                                            </p>

                                            <!-- Default dropup button -->
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup <i class="mdi mdi-chevron-up"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>

                                            <!-- Split dropup button -->
                                            <div class="btn-group dropup">
                                                <button type="button" class="btn btn-light">
                                                    Split dropup
                                                </button>
                                                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-up"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>

                                        </div> <!-- end col -->

                                        <div class="col-xl-6 mt-5 mt-xl-0">
                                            <p class="mb-1 h5">Split button dropdowns</p>
                                            <p class="text-muted font-13 mb-3">
                                                Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code class="highlighter-rouge">.dropdown-toggle-split</code> for proper spacing around the dropdown caret.
                                            </p>

                                            <div class="btn-group dropdown mb-2">
                                                <button type="button" class="btn btn-primary">Primary</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-light">Secondary</button>
                                                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-success">Success</button>
                                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-info">Info</button>
                                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-warning">Warning</button>
                                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-danger">Danger</button>
                                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->

                                            <p class="mb-1 h5 mt-5">Sizing</p>
                                            <p class="text-muted font-13 mb-3">
                                                Button dropdowns work with buttons of all sizes, including default and split dropdown buttons.
                                            </p>

                                            <!-- Large button groups (default and split) -->
                                            <div class="btn-group mb-2">
                                                <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Large button <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2">
                                                <button class="btn btn-light btn-lg" type="button">
                                                    Large button
                                                </button>
                                                <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>

                                            <!-- Small button groups (default and split) -->
                                            <div class="btn-group mb-2">
                                                <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Small button <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group mb-2">
                                                <button class="btn btn-light btn-sm" type="button">
                                                    Small button
                                                </button>
                                                <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>

                                            <p class="mb-1 mt-5 h5">Dropleft variation</p>
                                            <p class="text-muted font-13 mb-3">
                                                Trigger dropdown menus at the right of the elements by adding <code>.dropleft</code> to the parent element.
                                            </p>

                                            <!-- Default dropright button -->
                                            <div class="btn-group mb-2 dropleft">
                                                <button type="button" class="btn btn-info waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-left"></i> Dropleft
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>

                                            <!-- Split dropright button -->
                                            <div class="btn-group mb-2 dropleft">
                                                <!-- Split dropleft button -->
                                                <div class="btn-group">
                                                    <div class="btn-group dropleft" role="group">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-chevron-left"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary">
                                                        Split dropleft
                                                    </button>
                                                </div>
                                            </div>


                                            <p class="mb-1 h5 mt-5">Menu alignment</p>
                                            <p class="text-muted font-13 mb-3">
                                                Add <code class="highlighter-rouge">.dropdown-menu-right</code>
                                                to a <code class="highlighter-rouge">.dropdown-menu</code> to right
                                                align the dropdown menu.
                                            </p>


                                            <div class="btn-group mb-5">
                                                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Right-aligned <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>

                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

@endsection
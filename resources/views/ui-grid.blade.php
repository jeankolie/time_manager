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
                                            <li class="breadcrumb-item active">Grid System</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Grid System</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Grid options</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        See how aspects of the Bootstrap grid system work across multiple devices with a handy table.
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="text-center">
                                                        Extra small<br>
                                                        <small>&lt;576px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Small<br>
                                                        <small>≥576px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Medium<br>
                                                        <small>≥768px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Large<br>
                                                        <small>≥992px</small>
                                                    </th>
                                                    <th class="text-center">
                                                        Extra large<br>
                                                        <small>≥1200px</small>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Max container width</th>
                                                    <td>None (auto)</td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                                    <td><code>.col-</code></td>
                                                    <td><code>.col-sm-</code></td>
                                                    <td><code>.col-md-</code></td>
                                                    <td><code>.col-lg-</code></td>
                                                    <td><code>.col-xl-</code></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row"># of columns</th>
                                                    <td colspan="5">12</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                                    <td colspan="5">30px (15px on each side of a column)</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Nestable</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

@endsection
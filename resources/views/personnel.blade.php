@extends('layouts.master')

@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        
        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <a href="{{ route('personnels.create') }}" class="btn btn-success mb-20">AJOUTER UN PERSONNEL</a>
                                    <h4 class="header-title">Bordered table</h4>
                                    <p class="sub-header">
                                        Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                    </p>
        
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nom du personnel</th>
                                                <th>Fonction</th>
                                                <th>Login</th>
                                                <th>Password</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($personnels as $personnel)
                                                    <tr>
                                                        <td>{{ $personnel->nom_personnel }}</td>
                                                        <td class="text-right">
                                                            <a href="{{ route('personnels.edit', $personnel->slug) }}" class="btn btn-info">Modifier</a>
                                                            <a href="{{ route('personnels.destroy', $personnel->slug) }}" class="btn btn-danger">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
        
                                    </div> <!-- end table-responsive-->

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!--- end row -->        
                        
                    </div> <!-- container -->

@endsection
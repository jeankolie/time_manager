@extends('layouts.master')

@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        
        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <a href="{{ route('personnels.create', ['departement' => $departement->slug]) }}" class="btn btn-success mb-20">AJOUTER UN PERSONNEL</a>
                                    <h4 class="header-title">Bordered table</h4>
                                    <p class="sub-header">
                                        Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                    </p>
        
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Login</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($personnels as $personnel)
                                                    <tr>
                                                        <td>{{ $personnel->nom }}</td>
                                                        <td>{{ $personnel->login }}</td>
                                                        <td class="text-right">
                                                            <a href="{{ route('personnels.edit', $personnel->login) }}" class="btn btn-info">Modifier</a>
                                                            <a href="{{ route('personnels.destroy', $personnel->login) }}" class="btn btn-danger btn-delete">Supprimer</a>
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
                    <input type="hidden" name="message-suppression" value="Voulez vous supprimer ce Personnel ?">

@endsection
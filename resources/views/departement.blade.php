@extends('layouts.master')

@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        
        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <a href="{{ route('departements.create') }}" class="btn btn-success mb-20">AJOUTER UN DEPARTEMENT</a>
                                    <h4 class="header-title">Bordered table</h4>
                                    <p class="sub-header">
                                        Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                    </p>
        
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Nom du departement</th>
                                                <th>Responsable</th>
                                                <th class="text-right">Nombre de Licences</th>
                                                <th class="text-right">Nombre de matieres</th>
                                                <th>Personnels</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($departements as $departement)
                                                    <tr>
                                                        <td>{{ $departement->nom }}</td>
                                                        <td>{{ $departement->responsable }}</td>
                                                        <td class="text-right">{{ $departement->licences->count() }}</td>
                                                        <td class="text-right">{{ $departement->matieres->count() }}</td>
                                                        <td>
                                                            <a href="/personnel/departement/{{ $departement->slug }}" class="btn btn-warning">
                                                                PERSONNELS ({{ $departement->personnels->count() }})
                                                            </a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{ route('departements.edit', $departement->slug) }}" class="btn btn-info">Modifier</a>
                                                            <a href="{{ route('departements.destroy', $departement->slug) }}" class="btn btn-danger">Supprimer</a>
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
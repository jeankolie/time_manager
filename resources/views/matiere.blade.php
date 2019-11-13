@extends('layouts.master')

@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid"> 
                        
                        <h4 class="page-title">Liste des matieres</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <a href="{{ route('matieres.create') }}" class="btn btn-success mb-20">AJOUTER UNE MATIERE</a>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($matieres as $matiere)
                                                    <tr>
                                                        <td>{{ $matiere->nom }}</td>
                                                        <td class="text-right">
                                                            <a href="{{ route('matieres.edit', $matiere->slug) }}" class="btn btn-info">Modifier</a>
                                                            <a href="{{ route('matieres.destroy', $matiere->slug) }}" class="btn btn-danger btn-delete">Supprimer</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!--- end row -->        
                        
                    </div> <!-- container -->

                    <input type="hidden" name="message-suppression" value="Voulez vous supprimer cette matiere ?">

@endsection
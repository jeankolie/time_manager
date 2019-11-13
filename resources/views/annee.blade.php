@extends('layouts.master')

@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <h4 class="page-title">Liste des annees scolaires</h4>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <a href="{{ route('annees.create') }}" class="btn btn-success mb-20">AJOUTER UNE ANNEE</a>
                                    <br><br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($annees as $annee)
                                                    <tr>
                                                        <td>{{ $annee->nom }}</td>
                                                        <td class="text-right">
                                                            <a href="{{ route('annees.edit', $annee->id_annee) }}" class="btn btn-info">Modifier</a>
                                                            <a href="{{ route('annees.destroy', $annee->id_annee) }}" class="btn btn-danger btn-delete">Supprimer</a>
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
                    <input type="hidden" name="message-suppression" value="Voulez vous supprimer cette Annee scolaire ?">

@endsection

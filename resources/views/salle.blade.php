@extends('layouts.master')

@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <a href="{{ route('salles.create') }}" class="btn btn-success mb-20">AJOUTER UNE SALLE</a>
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
                                                @foreach($salles as $salle)
                                                    <tr>
                                                        <td>{{ $salle->nom }}</td>
                                                        <td class="text-right">
                                                            <a href="{{ route('salles.edit', $salle->id_salle) }}" class="btn btn-info">Modifier</a>
                                                            <a href="{{ route('salles.destroy', $salle->id_salle) }}" class="btn btn-danger btn-delete">Supprimer</a>
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
                    <input type="hidden" name="message-suppression" value="Voulez vous supprimer cette Salle ?">

@endsection

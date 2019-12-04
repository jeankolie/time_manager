@extends('layouts.master')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                  <br><br>
                  <a href="{{ route('emplois.create') }}" class="btn btn-success mb-20">AJOUTER UN EMPLOIS DU TEMPS</a><br>
                      @include('layouts.tab', ['licences' => Auth::user()->departement->licences])
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end table-responsive-->
        <div>
          <div class="col-lg-6" id="message">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mb-3 header-title">Envoyer un message</h4>
                                        @if (\Session::has('msg'))
                                            <div class="alert alert-success">
                                                {{ Session::get('msg') }}
                                            </div>
                                        @endif
                                        @if (\Session::has('erreur'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('erreur') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="/envoyer-message#message">
                                            @csrf
                                            <div class="form-group">
                                                <label>Licence:</label>
                                                <select id="inputState" class="form-control" name="licence">
                                                    @foreach (Auth::user()->departement->licences as $licence)
                                                        <option value="{{ $licence->id_licence }}">{{ $licence->nom }}
                                                      </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Message à adresser</label>
                                                <textarea class="form-control" name="message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success waves-effect waves-light">Envoyer</button>
                                        </form>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
        </div>
    </div> <!-- end card-box -->
@endsection

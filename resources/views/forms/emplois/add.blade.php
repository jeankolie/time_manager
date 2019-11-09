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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Elements</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Basic Elements</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Form row</h4>
                                        <p class="text-muted font-13">
                                            You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                        </p>

                                        @if ($errors->any())
                                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                                        @endif

                                        @if (\Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('emplois.store') }}">
                                            @csrf
                                            <div class="form-row">
                                              <div class="form-group col-md-3">
                                                  <label for="inputState" class="col-form-label">Jour</label>
                                                  <select id="inputState" class="form-control" name="jour">
                                                      <option>Lundi</option>
                                                      <option>Mardi</option>
                                                      <option>Mercredi</option>
                                                      <option>Jeudi</option>
                                                      <option>Vendredi</option>
                                                      <option>Samedi</option>
                                                  </select>
                                              </div>
                                              <div class="form-group col-md-3">
                                                  <label for="inputState" class="col-form-label">Interval d'heure</label>
                                                    <select id="inputState" class="form-control" name="intervale">
                                                        <option>8h-11h</option>
                                                        <option>11h-14h</option>
                                                        <option>14h-17h</option>
                                                        <option>17h-20h</option>
                                                    </select>
                                              </div>
                                              <div class="form-group col-md-3">
                                                  <label for="inputState" class="col-form-label">Matiere</label>
                                                    <select id="inputState" class="form-control" name="matiere">
                                                        @foreach (Auth::user()->departement->matieres as $matiere)
                                                          <option value="{{ $matiere->id_matiere }}">{{ $matiere->nom }}</option>
                                                        @endforeach
                                                    </select>
                                              </div>
                                              <div class="form-group col-md-3">
                                                    <label for="inputState" class="col-form-label">Licence</label>
                                                    <select id="inputState" class="form-control" name="licence">
                                                        @foreach (Auth::user()->departement->licences as $licence)
                                                          <option value="{{ $licence->id_licence }}">{{ $licence->nom }}</option>
                                                        @endforeach
                                                    </select>
                                              </div>
                                            </div>
                                            <div class="form-row">
                                              <div class="form-group col-md-4">
                                                  <label for="inputState" class="col-form-label">semestre</label>
                                                    <select class="form-control" name="semestre">
                                                    </select>
                                              </div>
                                              <div class="form-group col-md-4">
                                                  <label for="inputCity" class="col-form-label">Salle</label>
                                                    <select id="inputState" class="form-control" name="salle">
                                                        @foreach ($salles as $salle)
                                                          <option value="{{ $salle->id_salle }}">{{ $salle->nom }}</option>
                                                        @endforeach
                                                    </select>
                                              </div>
                                              <div class="form-group col-md-4">
                                                  <label for="inputCity" class="col-form-label">Professeur</label>
                                                  <input type="text" class="form-control" name="professeur">
                                              </div>
                                            </div>
                                            <div class="custom-control">
                                                  <button type="submit" class="btn btn-primary waves-effect waves-light">CREER EMPLOI</button>
                                                  <button type="reset" class="btn btn-primary waves-effect waves-light">Annuler</button>
                                            </div>
                                        </form>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

@endsection

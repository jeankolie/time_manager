@extends('layouts.master')

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                      <h4 class="header-title">Bordered table</h4>
                      <p class="sub-header">
                          Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                          <br>
                            <a href="{{ route('emplois.create') }}" class="btn btn-success mb-20">AJOUTER UN EMPLOIS DU TEMPS</a>
                      </p>
                      @include('layouts.tab', ['licences' => Auth::user()->departement->licences])
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end table-responsive-->
    </div> <!-- end card-box -->
@endsection

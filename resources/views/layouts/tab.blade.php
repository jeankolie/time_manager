<div class="card-box">
    <h4 class="header-title mb-4">Emploi du temps: {{ \App\Models\Annee::orderBy('id_annee', 'desc')->take(1)->get()->first()->nom }}</h4>

    <ul class="nav nav-pills navtab-bg nav-justified">
        @foreach($licences as $key => $licence)
          <li class="nav-item">
              <a href="#{{ $licence->slug }}" data-toggle="tab" aria-expanded="{{ ($key == 0) ? 'true' : 'false' }}" class="nav-link {{ ($key == 0) ? 'active' : '' }}">
                  {{ $licence->nom }}
              </a>
          </li>
        @endforeach
    </ul>
    <div class="tab-content">
        @foreach($licences as $key => $licence)
          <div class="tab-pane {{ ($key == 0) ? 'show active' : '' }}" id="{{ $licence->slug }}">
              @foreach($licence->semestres as $semestre)
                <h4>{{ $semestre->nom }}</br>
                @include('layouts.table')
              @endforeach
          </div>
        @endforeach
    </div>
</div> <!-- end card-box-->

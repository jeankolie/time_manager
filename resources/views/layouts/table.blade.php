
<div class="table-responsive">
    <table class="table table-bordered mb-0">
        <thead>
        <tr>
            <th>Heures/ Jours</th>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($intervales as $intervale)
                <tr>
                    <th scope="row">{{ $intervale }}</th>

                    @foreach($jours as $jour)
                        <td class="text-center">
                            @if ($emplois->where('jour', $jour)->where('intervale', $intervale)->count() == 0)
                                @continue
                            @endif
                            {{ $emplois->where('jour', $jour)->where('intervale', $intervale)->first()->matiere->nom }}<br>
                            {{ $emplois->where('jour', $jour)->where('intervale', $intervale)->first()->professeur }}<br>
                            {{ $emplois->where('jour', $jour)->where('intervale', $intervale)->first()->salle->nom }}<br>
                            @php
                                $s = $emplois->where('jour', $jour)->where('intervale', $intervale)->first()->semestre->id_semestre;
                            @endphp
                            <a class="btn-delete btn btn-danger btn-xs" href="{{ route('emplois.destroy', [true, 'jours' => $jour, 'semestre' => $s, 'intervale' => $intervale]) }}">
                                Supprimer
                            </a>
                        </td>
                    @endforeach
                </tr>
            @endforeach

        </tbody>
    </table>
</div> <!-- end .table-responsive-->

@extends('layouts.master')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice treno</th>
                <th>Totale carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_di_partenza }}</td>
                    <td>{{ $train->stazione_di_arrivo }}</td>
                    <td>{{ $train->orario_di_partenza }}</td>
                    <td>{{ $train->orario_di_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->totale_carrozze }}</td>
                    <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

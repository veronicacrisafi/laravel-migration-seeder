@extends('layouts.master')
@section('content')
    <div class="container my-5">

        <table class="table table-info table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Totale carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
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
                        <td class="{{ $train->in_orario ? 'bg-success' : 'bg-danger' }}">
                            {{ $train->in_orario ? 'Sì' : 'No' }}
                        </td>
                        <td class="{{ $train->cancellato ? 'bg-danger' : 'bg-success' }}">
                            {{ $train->cancellato ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

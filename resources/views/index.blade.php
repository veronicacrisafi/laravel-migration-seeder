@extends('layouts.master')
@section('content')
    <div class="container my-5">

        <table class="table table-primary table-hover text-center">
            <thead>
                <tr>
                    <th scope="col" class="fs-4 py-5">Azienda</th>
                    <th scope="col" class="fs-4 py-5">Stazione di partenza</th>
                    <th scope="col" class="fs-4 py-5">Stazione di arrivo</th>
                    <th scope="col" class="fs-4 py-5">Orario di partenza</th>
                    <th scope="col" class="fs-4 py-5">Orario di arrivo</th>
                    <th scope="col" class="fs-4 py-5">Codice treno</th>
                    <th scope="col" class="fs-4 py-5">Totale carrozze</th>
                    <th scope="col" class="fs-4 py-5">In orario</th>
                    <th scope="col" class="fs-4 py-5">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td class="py-5">{{ $train->azienda }}</td>
                        <td class="py-5">{{ $train->stazione_di_partenza }}</td>
                        <td class="py-5">{{ $train->stazione_di_arrivo }}</td>
                        <td class="py-5">{{ $train->orario_di_partenza }}</td>
                        <td class="py-5">{{ $train->orario_di_arrivo }}</td>
                        <td class="py-5">{{ $train->codice_treno }}</td>
                        <td class="py-5">{{ $train->totale_carrozze }}</td>
                        <td class="{{ $train->in_orario ? 'bg-success' : 'bg-danger' }} py-5">
                            {{ $train->in_orario ? 'Sì' : 'No' }}
                        </td>
                        <td class="{{ $train->cancellato ? 'bg-danger' : 'bg-success' }} py-5">
                            {{ $train->cancellato ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

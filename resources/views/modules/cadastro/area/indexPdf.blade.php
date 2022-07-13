@extends('layouts.templatePDF', ['header' => 'Parceiros', 'title' => ''])
@section('content')

<table class="table-linhas">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Data início</th>
            <th>Data final</th>
            <th>Área</th>
            <th>Vida útil</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($aras as $area)
        <tr>
            <td>
                {{ $area->nome }}
            </td>
            <td>
                {{ $area->getTipo() }}
            </td>
            <td>
                {{ $area->dt_ini }}
            </td>
            <td>
                {{ $area->dt_fim }}
            </td>
            <td>
                {{ $area->ar }}
            </td>
            <td>
                {{ $area->util }}
            </td>
            <td>
                {!! Helper::getAtivoInativo($area->ativo, true) !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
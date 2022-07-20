@extends('layouts.templatePDF', ['header' => 'Tanques', 'title' => ''])
@section('content')
    <table class="table-linhas">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Data Início</th>
            <th>Data Fim</th>
            <th>Área</th>
            <th>Tipo</th>
            <th>Vida útil</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
            <tr>
                <td>
                    {{ $area->nome }}
                </td>
                <td>
                    {{ $area->dt_ini }}
                </td>
                <td>
                    {{ $area->dt_fim }}
                </td>
                <td>
                    {{ $area->ha }}
                </td>
                <td>
                    {{ $area->getTipo() }}
                </td>
                <td>
                    {{ $area->util }}
                </td>
              </tr>   
        @endforeach
        </tbody>
    </table>
@endsection

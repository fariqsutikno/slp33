@extends('adminlte::page')
@section('title', 'Data Siswa')
@section('plugins.Datatables', true)
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script>
        $(document).ready(function () {
            $('#data').DataTable();
        });
    </script>
@stop
@section('content_header')
    <h1>Kelengkapan Berkas</h1>
@stop
@section('content')

@php
$heads = [
    ['label' => 'Nama', 'width' => 30],
    ['label' => 'Rombel', 'width' => 15],
    ['label' => 'Akte', 'width' => 5],
    ['label' => 'Akte Arab', 'width' => 5],
    ['label' => 'Surkes', 'width' => 5],
    ['label' => 'Surkes Arab', 'width' => 5],
    ['label' => 'Rapot', 'width' => 5],
    ['label' => 'Tazkiyah', 'width' => 5],
    ['label' => 'SKKB', 'width' => 5],
    ['label' => 'SKCK', 'width' => 5],
    ['label' => 'Foto', 'width' => 5],
    ['label' => 'Aksi', 'width' => 5],

];
// ];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads" theme="light" striped hoverable scrollable>
    @foreach($documents as $document)
        <tr>
            <td>{{$document->fullName}}</td>
            <td>{{$document->class12}}</td>
            <td>@if ($document->akte) V @else X @endif</td>
            <td>@if ($document->akteArab) V @else X @endif</td>
            <td>@if ($document->surkes) V @else X @endif</td>
            <td>@if ($document->surkesArab) V @else X @endif</td>
            <td>@if ($document->rapor2BIM) V @else X @endif</td>
            <td>@if ($document->tazkiyah) V @else X @endif</td>
            <td>@if ($document->SKKB) V @else X @endif</td>
            <td>@if ($document->SKCKArab) V @else X @endif</td>
            <td>@if ($document->photoWhiteBG) V @else X @endif</td>
            <td>
                <a href="/admin/berkas/detail/{{$document->id}}" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                       <i class="fa fa-lg fa-fw fa-eye"></i>
                </a>
            </td>
        </tr>
    @endforeach
</x-adminlte-datatable>

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
@stop
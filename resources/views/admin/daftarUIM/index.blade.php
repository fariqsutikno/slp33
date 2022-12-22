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
    <h1>Data Pendaftar UIM</h1>
@stop
@section('content')

@php
$heads = [
    ['label' => 'Nama', 'width' => 30],
    ['label' => 'Rombel', 'width' => 10],
    ['label' => 'Status', 'width' => 15],
    ['label' => 'Musyrif', 'width' => 20],
    ['label' => 'Terakhir Diupdate', 'width' => 20],
    ['label' => 'Aksi', 'width' => 5],

];

@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads" theme="light" striped hoverable scrollable>
    @foreach($dataTasjil as $data)
        <tr>
            <td>{{$data->fullName}}</td>
            <td>{{$data->class12}}</td>
            <td>@if($data->selesaiDidaftarkan) Selesai @elseif($data->jadwalDidaftarkan) Menunggu didaftarkan @else Menunggu Kelengkapan Data @endif</td>
            <td><a href="https://wa.me/62{{$data->noTelp}}">{{$data->musyrifName}}</a></td>
            <td>{{$data->updated_at}}</td>
            <td>
                <a href="/admin/siswa/detail/{{$data->id}}" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
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
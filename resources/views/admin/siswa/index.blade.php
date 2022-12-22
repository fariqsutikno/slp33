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
    <h1>Data Siswa</h1>
@stop
@section('content')
    {{-- <table id="data" class="table display">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Rombel</td>
            <td>NIS</td>
            <td>TTL</td>
            <td>Aksi</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Rombel</td>
            <td>NIS</td>
            <td>TTL</td>
            <td>Aksi</td>
        </tr>
    </table>
    <div class="row">
        <div class="mx-auto">
            {{$students->links()}}
        </div>
    </div> --}}
    {{-- Setup data for datatables --}}
@php
$heads = [
    ['label' => 'Nama', 'width' => 30],
    ['label' => 'NIS', 'width' => 20],
    ['label' => 'Rombel', 'width' => 10],
    ['label' => 'TTL', 'width' => 20],
    ['label' => 'Status', 'width' => 15],
    ['label' => 'Aksi', 'width' => 5],

];

// $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
//                 <i class="fa fa-lg fa-fw fa-pen"></i>
//             </button>';
// $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
//                   <i class="fa fa-lg fa-fw fa-trash"></i>
//               </button>';
// $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
//                    <i class="fa fa-lg fa-fw fa-eye"></i>
//                </button>';

// $config = [
//     'data' => [
//         [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
//         [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
//         [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
//     ],
//     'order' => [[1, 'asc']],
//     'columns' => [null, null, null, ['orderable' => false]],
// ];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads" theme="light" striped hoverable scrollable>
    @foreach($students as $student)
        <tr>
            <td>{{$student->fullName}}</td>
            <td>{{$student->nism}}</td>
            <td>{{$student->class12}}</td>
            <td>{{$student->birthPlace}}, {{\Carbon\Carbon::parse($student->birthDate)->isoFormat('DD MMM YYYY')}}</td>
            <td></td>
            <td>
                <a href="/admin/siswa/detail/{{$student->id}}" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
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
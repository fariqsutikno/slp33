@extends('adminlte::page')
@section('title', 'Data Siswa')
@section('css')
    <link rel="stylrkeet" href="/css/admin_custom.css">
@section('content_header')
    <h1>Tambah Peserta</h1>
@stop
@section('content')
<form action="/admin/daftarUIM/store" method="POST" id="myForm">
    @csrf
    <div class="row mx-3">
            <h5>Berkas</h5>
            <table class="table table-sm">
                <tr>
                    <td>Nama Siswa</td>
                    <td>
                        <div class="input-group">
                            {{-- Minimal --}}
                            <x-adminlte-select2 name="student">
                                <option value="" selected disabled>--</option>
                                @foreach ($students as $student)
                                <option value="{{$student->id}}">{{$student->fullName}} - {{$student->class12}}</option>
                                @endforeach
                            </x-adminlte-select2>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nama Musyrif</td>
                    <td>
                        <div class="input-group">
                            {{-- Minimal --}}
                            <x-adminlte-select2 name="musyrif">
                                <option value="" selected disabled>--</option>
                                @foreach ($musyrifin as $musyrif)
                                <option value="{{$musyrif->id}}">Ust. {{$musyrif->musyrifName}}</option>
                                @endforeach
                            </x-adminlte-select2>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="mt-4 float-right">
                <a href="/" class="btn btn-secondary">Cancel</a>
                <button class="btn btn-primary show_confirm" type="submit">Submit</button>
            </div>
    </div>
</form>
@stop

@section('js')
@stop
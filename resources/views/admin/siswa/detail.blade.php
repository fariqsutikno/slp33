@extends('adminlte::page')
@section('title', 'Data Siswa')
@section('css')
    <link rel="stylrkeet" href="/css/admin_custom.css">
@section('content_header')
    <h1>Detail Siswa</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-3 my-3 mx-auto">
            <img src="https://drive.google.com/uc?export=view&id={{ $student->photoLink }}" class="rounded"
                width="180" alt="{{ $student->fullName }}">
            <small class="form-text text-muted text-center">Foto Ijazah - {{ $student->fullName }} -
                {{ $student->class12 }}</small>
            <a href="https://drive.google.com/uc?export=download&id={{ $student->photoLink }}"
                class="btn btn-sm btn-info">Download Foto</a>
    </div>
    <div class="col-md-8 ">
            <h5>Data Siswa</h5>
            <table class="table table-sm">
                <tr>
                    <td>Nama Lengkap</td>
                    <td>{{ $student->fullName }}</td>
                </tr>
                <tr>
                    <td>Nama Arab</td>
                    <td>{{ $student->arabicName }}</td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>{{ $student->birthPlace }},
                        {{ date('d M Y', strtotime($student->birthDate)) }}</td>
                </tr>
                <tr>
                    <td>Riwayat Kelas </td>
                    <td><span
                            class="badge mx-1 badge-info">{{ $student->class10 ? $student->class10 : '-' }}</span><span
                            class="badge mx-1 badge-danger">{{ $student->class11 ? $student->class11 : '-' }}</span><span
                            class="badge mx-1 badge-success">{{ $student->class12 ? $student->class12 : '-' }}</span>
                    </td>
                </tr>
                <tr>
                    <td>Riwayat Kamar </td>
                    <td>{{ $student->room10 ? $student->room10 : '-' }},
                        {{ $student->room11 ? $student->room11 : '-' }},
                        {{ $student->room12 ? $student->room12 : '-' }}</td>
                </tr>
                <tr>
                    <td>Alamat Lengkap </td>
                    <td>{{ $student->address? $student->address .', ' .$student->village .', ' .$student->district .', ' .$student->city .', ' .$student->province .', ' .$student->zipCode: '-' }}
                    </td>
                </tr>
            </table>
            <h5>Nomor Identitas</h5>
            <table class="table table-sm">
                <tr>
                    <td>NISN</td>
                    <td>{{ $student->nisn }}</td>
                </tr>
                <tr>
                    <td>NIS Mahad</td>
                    <td>{{ $student->nism }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>{{ $student->nik ? $student->nik : '-' }}</td>
                </tr>
                <tr>
                    <td>No Paspor</td>
                    <td>{{ $student->noPaspor ? $student->noPaspor : '-' }}</td>
                </tr>
            </table>
            <h5>Riwayat Pendidikan</h5>
            <table class="table table-sm">
                <tr>
                    <td>SD dan Tahun Lulus</td>
                    <td>{{ $student->SDName }} - {{ $student->SDYear }}</td>
                </tr>
                <tr>
                    <td>SMP dan Tahun Lulus</td>
                    <td>{{ $student->SMPName }} - {{ $student->SMPYear }}</td>
                </tr>
            </table>
            <h5>Data Orang Tua</h5>
            <table class="table table-sm">
                <tr>
                    <td>Nama Ayah</td>
                    <td>{{ $student->fatherName }} <span
                            class="badge badge-{{ $student->fatherStatus == 'Hidup' ? 'success' : 'danger' }}">{{ $student->fatherStatus }}</span>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan Ayah</td>
                    <td>{{ $student->fatherJob ? $student->fatherJob : '-' }}</td>
                </tr>
                <tr>
                    <td>No Telp Ayah</td>
                    <td>{{ $student->fatherPhone ? $student->fatherPhone : '-' }}</td>
                </tr>
                <tr>
                    <td>Nama Ibu </td>
                    <td>{{ $student->motherName }} <span
                            class="badge badge-{{ $student->motherStatus == 'Hidup' ? 'success' : 'danger' }}">{{ $student->motherStatus }}</span>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan Ibu </td>
                    <td>{{ $student->motherJob ? $student->motherJob : '-' }}</td>
                </tr>
                <tr>
                    <td>No Telp Ibu </td>
                    <td>{{ $student->motherPhone ? $student->motherPhone : '-' }}</td>
                </tr>
            </table>
            <h5>Status & Data Kelanjutan</h5>
            <table class="table table-sm">
                <tr>
                    <td>Status Pernikahan</td>
                    <td>{{ $student->maritalStatus ? $student->maritalStatus : '-' }}</td>
                </tr>
                <tr>
                    <td>Lokasi Khidmah</td>
                    <td>{{ $student->khidmahPlace ? $student->khidmahPlace : '-' }}</td>
                </tr>
                <tr>
                    <td>Studi Lanjut</td>
                    <td>{{ $student->furtherStudy ? $student->furtherStudy : '-' }}</td>
                </tr>
                <tr>
                    <td>Roqm Talab UIM</td>
                    <td>{{ $student->roqmTalabUIM ? $student->roqmTalabUIM : '-' }}</td>
                </tr>
                <tr>
                    <td>Link Drive Berkas </td>
                    <td><a href="{{ $student->fileDriveLink }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik
                            Disini</a></td>
                </tr>
            </table>
            <h5>Kontak</h5>
            <table class="table table-sm">
                <tr>
                    <td>No WA </td>
                    <td><a href="https://wa.me/{{ $student->myPhone }}" target="_blank">{{ $student->myPhone }}</a></td>
                </tr>
                <tr>
                    <td>Alamat Email Angkatan</td>
                    <!-- <td>{{ $student->rkEmail }} <a href="https://webmail.ratakanan.org"
                            class="badge badge-info" target="_blank">Click Here to Login</a><br><small
                            class="form-text text-muted">Password : {{ $student->passwordEmail }}</small></td>-->
                <td><small class="form-text text-muted">Coming Soon - Belum tersedia saat ini</small></td>
                </tr>
                <tr>
                    <td>Alamat Email Pribadi</td>
                    <td>{{ $student->myEmail ? $student->myEmail : '-' }}</td>
                </tr>
            </table>
            <small class="text-muted">Terakhir diperbarui :
                {{ $student->updated_at ? $student->updated_at : '-' }}</small>
            <div class="mt-3 float-right">
                <form action="/edit" method="post">
                    @csrf
                    <input type="hidden" name="username" value="{{ $student->nism }}">
                    <button class="btn btn-danger">Ajukan Perubahan</button>
                    <a href="/admin/siswa" class="btn btn-primary">Kembali</a>
                </form>
            </div>
    </div>
</div>
@stop

@section('js')
@stop
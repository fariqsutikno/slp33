@extends('layouts.template')


@section('content')
    <div class="container p-5">
        <div class="row mb-3">
            <h3>Detail Siswa</h3>
        </div>
        <div class="row">
            <div class="col-md-3 my-3 mx-auto">
                <img src="https://drive.google.com/uc?export=view&id={{ $dataSiswa->photoLink }}" class="rounded"
                    width="180" alt="{{ $dataSiswa->fullName }}">
                <small class="form-text text-muted text-center">Foto Ijazah - {{ $dataSiswa->fullName }} -
                    {{ $dataSiswa->class12 }}</small>
                <a href="https://drive.google.com/uc?export=download&id={{ $dataSiswa->photoLink }}"
                    class="btn btn-sm btn-info">Download Foto</a>
            </div>
            <div class="col-md-8 ">
                <h5>Data Siswa</h5>
                <table class="table table-sm">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>{{ $dataSiswa->fullName }}</td>
                    </tr>
                    <tr>
                        <td>Nama Arab</td>
                        <td>{{ $dataSiswa->arabicName }}</td>
                    </tr>
                    <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td>{{ $dataSiswa->birthPlace }},
                            {{ date('d M Y', strtotime($dataSiswa->birthDate)) }}</td>
                    </tr>
                    <tr>
                        <td>Riwayat Kelas </td>
                        <td><span
                                class="badge mx-1 badge-info">{{ $dataSiswa->class10 ? $dataSiswa->class10 : '-' }}</span><span
                                class="badge mx-1 badge-danger">{{ $dataSiswa->class11 ? $dataSiswa->class11 : '-' }}</span><span
                                class="badge mx-1 badge-success">{{ $dataSiswa->class12 ? $dataSiswa->class12 : '-' }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Riwayat Kamar </td>
                        <td>{{ $dataSiswa->room10 ? $dataSiswa->room10 : '-' }},
                            {{ $dataSiswa->room11 ? $dataSiswa->room11 : '-' }},
                            {{ $dataSiswa->room12 ? $dataSiswa->room12 : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap </td>
                        <td>{{ $dataSiswa->address? $dataSiswa->address .', ' .$dataSiswa->village .', ' .$dataSiswa->district .', ' .$dataSiswa->city .', ' .$dataSiswa->province .', ' .$dataSiswa->zipCode: '-' }}
                        </td>
                    </tr>
                </table>
                <h5>Nomor Identitas</h5>
                <table class="table table-sm">
                    <tr>
                        <td>NISN</td>
                        <td>{{ $dataSiswa->nisn }}</td>
                    </tr>
                    <tr>
                        <td>NIS Mahad</td>
                        <td>{{ $dataSiswa->nism }}</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>{{ $dataSiswa->nik ? $dataSiswa->nik : '-' }}</td>
                    </tr>
                    <tr>
                        <td>No Paspor</td>
                        <td>{{ $dataSiswa->noPaspor ? $dataSiswa->noPaspor : '-' }}</td>
                    </tr>
                </table>
                <h5>Riwayat Pendidikan</h5>
                <table class="table table-sm">
                    <tr>
                        <td>SD dan Tahun Lulus</td>
                        <td>{{ $dataSiswa->SDName }} - {{ $dataSiswa->SDYear }}</td>
                    </tr>
                    <tr>
                        <td>SMP dan Tahun Lulus</td>
                        <td>{{ $dataSiswa->SMPName }} - {{ $dataSiswa->SMPYear }}</td>
                    </tr>
                </table>
                <h5>Data Orang Tua</h5>
                <table class="table table-sm">
                    <tr>
                        <td>Nama Ayah</td>
                        <td>{{ $dataSiswa->fatherName }} <span
                                class="badge badge-{{ $dataSiswa->fatherStatus == 'Hidup' ? 'success' : 'danger' }}">{{ $dataSiswa->fatherStatus }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td>{{ $dataSiswa->fatherJob ? $dataSiswa->fatherJob : '-' }}</td>
                    </tr>
                    <tr>
                        <td>No Telp Ayah</td>
                        <td>{{ $dataSiswa->fatherPhone ? $dataSiswa->fatherPhone : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Nama Ibu </td>
                        <td>{{ $dataSiswa->motherName }} <span
                                class="badge badge-{{ $dataSiswa->motherStatus == 'Hidup' ? 'success' : 'danger' }}">{{ $dataSiswa->motherStatus }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu </td>
                        <td>{{ $dataSiswa->motherJob ? $dataSiswa->motherJob : '-' }}</td>
                    </tr>
                    <tr>
                        <td>No Telp Ibu </td>
                        <td>{{ $dataSiswa->motherPhone ? $dataSiswa->motherPhone : '-' }}</td>
                    </tr>
                </table>
                <h5>Status & Data Kelanjutan</h5>
                <table class="table table-sm">
                    <tr>
                        <td>Status Pernikahan</td>
                        <td>{{ $dataSiswa->maritalStatus ? $dataSiswa->maritalStatus : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Lokasi Khidmah</td>
                        <td>{{ $dataSiswa->khidmahPlace ? $dataSiswa->khidmahPlace : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Studi Lanjut</td>
                        <td>{{ $dataSiswa->furtherStudy ? $dataSiswa->furtherStudy : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Roqm Talab UIM</td>
                        <td>{{ $dataSiswa->roqmTalabUIM ? $dataSiswa->roqmTalabUIM : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Link Drive Berkas </td>
                        <td><a href="{{ $dataSiswa->fileDriveLink }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik
                                Disini</a></td>
                    </tr>
                </table>
                <h5>Kontak</h5>
                <table class="table table-sm">
                    <tr>
                        <td>No WA </td>
                        <td><a href="https://wa.me/{{ $dataSiswa->myPhone }}" target="_blank">{{ $dataSiswa->myPhone }}</a></td>
                    </tr>
                    <tr>
                        <td>Alamat Email Angkatan</td>
                        <!-- <td>{{ $dataSiswa->rkEmail }} <a href="https://webmail.ratakanan.org"
                                class="badge badge-info" target="_blank">Click Here to Login</a><br><small
                                class="form-text text-muted">Password : {{ $dataSiswa->passwordEmail }}</small></td>-->
                    <td><small class="form-text text-muted">Coming Soon - Belum tersedia saat ini</small></td>
                    </tr>
                    <tr>
                        <td>Alamat Email Pribadi</td>
                        <td>{{ $dataSiswa->myEmail ? $dataSiswa->myEmail : '-' }}</td>
                    </tr>
                </table>
                <h5>Informasi Kelengkapan Berkas UIM</h5>
                <table class="table table-sm">
                    <tr>
                        <td>Akte Asli</td>
                        <td>@if($dataBerkas->akte)<a href="{{ $dataBerkas->akte }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    <tr>
                        <td>Akte Terjemah</td>
                        <td>@if($dataBerkas->akteArab)<a href="{{ $dataBerkas->akteArab }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    <tr>
                        <td>Surat Kesehatan</td>
                        <td>@if($dataBerkas->surkes)<a href="{{ $dataBerkas->surkes }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    <tr>
                        <td>Surat Kesehatan Terjemah</td>
                        <td>@if($dataBerkas->surkesArab)<a href="{{ $dataBerkas->surkesArab }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    <tr>
                        <td>Pas Foto BG Putih</td>
                        <td>@if($dataBerkas->photoWhiteBG)<a href="{{ $dataBerkas->photoWhiteBG }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    <tr>
                        <td>Rapor Kelas 2 IM</td>
                        <td>@if($dataBerkas->rapor2BIM)<a href="{{ $dataBerkas->rapor2BIM }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    <tr>
                        <td>Tazkiyah</td>
                        <td>@if($dataBerkas->tazkiyah)<a href="{{ $dataBerkas->tazkiyah }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    <tr>
                        <td>SKKB</td>
                        <td>@if($dataBerkas->SKKB)<a href="{{ $dataBerkas->SKKB }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    <tr>
                        <td>Paspor</td>
                        <td>@if($dataBerkas->paspor)<a href="{{ $dataBerkas->paspor }}" type="button" class="btn btn-sm btn-info" target="_blank">Klik Disini</a> @else Belum Tersedia @endif</td>
                    </tr>
                    {{-- <tr>
                        <td colspan="2">
                            <small class="text-danger">*Untuk melengkapi berkas yang masih kosong, bisa hubungi musyrif kelas masing-masing via whatsapp.</small>
                        </td>
                    </tr> --}}
                </table>
                <small class="text-muted">Terakhir diperbarui :
                    {{ $dataSiswa->updated_at ? $dataSiswa->updated_at : '-' }}</small>
                <div class="mt-3 float-right">
                    <form action="/edit" method="post">
                        @csrf
                        <input type="hidden" name="username" value="{{ $dataSiswa->nism }}">
                        <button class="btn btn-danger">Ajukan Perubahan</button>
                        <a href="/" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

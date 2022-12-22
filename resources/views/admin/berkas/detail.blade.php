@extends('adminlte::page')
@section('title', 'Data Siswa')
@section('css')
    <link rel="stylrkeet" href="/css/admin_custom.css">
@section('content_header')
    <h1>Detail Berkas</h1>
@stop
@section('content')
<form action="/admin/berkas/update/{{$document->id}}" method="POST" id="myForm" enctype="multipart/form-data">
    @csrf
    {{ method_field('put') }}
    <div class="row mx-3">

            <h5>Identitas</h5>
            <table class="table table-sm">
                <tr>
                    <td>Nama</td>
                    <td>
                        <p title="Data tidak dapat diubah" class="d-inline">{{ $document->fullName }}</p>
                        <input type="hidden" name="fullName" value="{{ $document->fullName }}">
                    </td>
                </tr>
                <tr>
                    <td>Kelas 12</td>
                    <td>
                        <p title="Data tidak dapat diubah" class="d-inline">{{ $document->class12 }}</p>
                        <input type="hidden" name="class12" value="{{ $document->class12 }}">
                    </td>
                </tr>
                <tr>
                    <td>NISM</td>
                    <td>
                        <p title="Data tidak dapat diubah" class="d-inline">{{ $document->nism }}</p>
                        <input type="hidden" name="nism" value="{{ $document->nism }}">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                        <p title="Data tidak dapat diubah" class="d-inline">{{ \Carbon\Carbon::parse($document->birthDate)->isoFormat('DD MMM YYYY') }}</p>
                        <input type="hidden" name="birthDate" value="{{ $document->birthDate }}">
                    </td>
                </tr>

            </table>
            <h5>Berkas</h5>

            <table class="table table-sm">
                <tr>
                    <td>Link Drive Berkas</td>
                    <td>
                        <div class="form-group">
                            @if($document->fileDriveLink)
                            <a target="_blank" href="{{$document->fileDriveLink}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Folder</a>
                            <small class="text-muted">atau ganti dengan link baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" id="fileDriveLink" name="fileDriveLink" value="{{$document->fileDriveLink}}">
                            @error('fileDriveLink')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Foto Background Putih</td>
                    <td>
                        <div class="form-group">
                            @if($document->photoWhiteBG)
                            <a target="_blank" href="{{$document->photoWhiteBG}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->photoWhiteBG}}" id="photoWhiteBG" name="photoWhiteBG">
                            @error('photoWhiteBG')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>KTP</td>
                    <td>
                        <div class="form-group">
                            @if($document->KTP)
                            <a target="_blank" href="{{$document->KTP}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->KTP}}" id="KTP" name="KTP">
                            @error('KTP')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Terjemahan KTP Bahasa Arab</td>
                    <td>
                        <div class="form-group">
                            @if($document->KTPArab)
                            <a target="_blank" href="{{$document->KTPArab}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->KTPArab}}" id="KTPArab" name="KTPArab">
                            @error('KTPArab')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Akte Kelahiran</td>
                    <td>
                        <div class="form-group">
                            @if($document->akte)
                            <a target="_blank" href="{{$document->akte}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->akte}}" id="akte" name="akte">
                            @error('akte')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Terjemah Akte Kelahiran Bahasa Arab</td>
                    <td>
                        <div class="form-group">
                            @if($document->akteArab)
                            <a target="_blank" href="{{$document->akteArab}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->akteArab}}" id="akteArab" name="akteArab">
                            @error('akteArab')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Kartu Keluarga (KK)</td>
                    <td>
                        <div class="form-group">
                            @if($document->KK)
                            <a target="_blank" href="{{$document->KK}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->KK}}" id="KK" name="KK">
                            @error('KK')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Surat Kesehatan</td>
                    <td>
                        <div class="form-group">
                            @if($document->surkes)
                            <a target="_blank" href="{{$document->surkes}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->surkes}}" id="surkes" name="surkes">
                            @error('surkes')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Terjemahan Surat Kesehatan Bahasa Arab</td>
                    <td>
                        <div class="form-group">
                            @if($document->surkesArab)
                            <a target="_blank" href="{{$document->surkesArab}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->surkesArab}}" id="surkesArab" name="surkesArab">
                            @error('surkesArab')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Surat Keterangan Kelakuan Baik (SKKB)</td>
                    <td>
                        <div class="form-group">
                            @if($document->SKKB)
                            <a target="_blank" href="{{$document->SKKB}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->SKKB}}" id="SKKB" name="SKKB">
                            @error('SKKB')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Surat Rekomendasi (Tazkiyah)</td>
                    <td>
                        <div class="form-group">
                            @if($document->tazkiyah)
                            <a target="_blank" href="{{$document->tazkiyah}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->tazkiyah}}" id="tazkiyah" name="tazkiyah">
                            @error('tazkiyah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Surat Keterangan Catatan Kepolisian (SKCK)</td>
                    <td>
                        <div class="form-group">
                            @if($document->SKCK)
                            <a target="_blank" href="{{$document->SKCK}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->SKCK}}" id="SKCK" name="SKCK">
                            @error('SKCK')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Terjemah SKCK Bahasa Arab</td>
                    <td>
                        <div class="form-group">
                            @if($document->SKCKArab)
                            <a target="_blank" href="{{$document->SKCKArab}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->SKCKArab}}" id="SKCKArab" name="SKCKArab">
                            @error('SKCKArab')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Paspor</td>
                    <td>
                        <div class="form-group">
                            @if($document->paspor)
                            <a target="_blank" href="{{$document->paspor}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->paspor}}" id="paspor" name="paspor">
                            @error('paspor')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Ijazah IM</td>
                    <td>
                        <div class="form-group">
                            @if($document->ijazahIM)
                            <a target="_blank" href="{{$document->ijazahIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->ijazahIM}}" id="ijazahIM" name="ijazahIM">
                            @error('ijazahIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Ijazah MA</td>
                    <td>
                        <div class="form-group">
                            @if($document->ijazahMA)
                            <a target="_blank" href="{{$document->ijazahMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->ijazahMA}}" id="ijazahMA" name="ijazahMA">
                            @error('ijazahMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Transkrip Ijazah IM</td>
                    <td>
                        <div class="form-group">
                            @if($document->transkripIjazahIM)
                            <a target="_blank" href="{{$document->transkripIjazahIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->transkripIjazahIM}}" id="transkripIjazahIM" name="transkripIjazahIM">
                            @error('transkripIjazahIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Transkrip Ijazah MA</td>
                    <td>
                        <div class="form-group">
                            @if($document->transkripIjazahMA)
                            <a target="_blank" href="{{$document->transkripIjazahMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->transkripIjazahMA}}" id="transkripIjazahMA" name="transkripIjazahMA">
                            @error('transkripIjazahMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor MA</td>
                    <td>
                        <div class="form-group">
                            @if($document->raporMA)
                            <a target="_blank" href="{{$document->raporMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->raporMA}}" id="raporMA" name="raporMA">
                            @error('raporMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor IM</td>
                    <td>
                        <div class="form-group">
                            @if($document->raporIM)
                            <a target="_blank" href="{{$document->raporIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->raporIM}}" id="raporIM" name="raporIM">
                            @error('raporIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor IM Kelas X Ganjil</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor1AIM)
                            <a target="_blank" href="{{$document->rapor1AIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor1AIM}}" id="rapor1AIM" name="rapor1AIM">
                            @error('rapor1AIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor IM Kelas X Genap</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor1BIM)
                            <a target="_blank" href="{{$document->rapor1BIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor1BIM}}" id="rapor1BIM" name="rapor1BIM">
                            @error('rapor1BIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor IM Kelas XI Ganjil</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor2AIM)
                            <a target="_blank" href="{{$document->rapor2AIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor2AIM}}" id="rapor2AIM" name="rapor2AIM">
                            @error('rapor2AIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor IM Kelas XI Genap</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor2BIM)
                            <a target="_blank" href="{{$document->rapor2BIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor2BIM}}" id="rapor2BIM" name="rapor2BIM">
                            @error('rapor2BIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor IM Kelas XII Ganjil</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor3AIM)
                            <a target="_blank" href="{{$document->rapor3AIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor3AIM}}" id="rapor3AIM" name="rapor3AIM">
                            @error('rapor3AIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor IM Kelas XII Genap</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor3BIM)
                            <a target="_blank" href="{{$document->rapor3BIM}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor3BIM}}" id="rapor3BIM" name="rapor3BIM">
                            @error('rapor3BIM')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor MA Kelas X Ganjil</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor1AMA)
                            <a target="_blank" href="{{$document->rapor1AMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor1AMA}}" id="rapor1AMA" name="rapor1AMA">
                            @error('rapor1AMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor MA Kelas X Genap</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor1BMA)
                            <a target="_blank" href="{{$document->rapor1BMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor1BMA}}" id="rapor1BMA" name="rapor1BMA">
                            @error('rapor1BMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor MA Kelas XI Ganjil</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor2AMA)
                            <a target="_blank" href="{{$document->rapor2AMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor2AMA}}" id="rapor2AMA" name="rapor2AMA">
                            @error('rapor2AMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor MA Kelas XI Genap</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor2BMA)
                            <a target="_blank" href="{{$document->rapor2BMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor2BMA}}" id="rapor2BMA" name="rapor2BMA">
                            @error('rapor2BMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor MA Kelas XII Ganjil</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor3AMA)
                            <a target="_blank" href="{{$document->rapor3AMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor3AMA}}" id="rapor3AMA" name="rapor3AMA">
                            @error('rapor3AMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Rapor MA Kelas XII Genap</td>
                    <td>
                        <div class="form-group">
                            @if($document->rapor3BMA)
                            <a target="_blank" href="{{$document->rapor3BMA}}" class="btn btn-outline-secondary btn-sm" type="button"><i class="fa fa-lg fa-fw fa-eye"></i> Lihat Berkas</a>
                            <small class="text-muted">atau ganti dengan dokumen baru</small><br>
                            @endif
                            <input type="text" class="form-control mt-2" placeholder="Isi link berkas tsb!" value="{{$document->rapor3BMA}}" id="rapor3BMA" name="rapor3BMA">
                            @error('rapor3BMA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                    </td>
                </tr>
            </table>
            <div class="mt-4 float-right">
                <a href="/admin/berkas" class="btn btn-secondary">Cancel</a>
                <button class="btn btn-primary show_confirm" type="submit">Submit</button>
            </div>
    </div>
</form>
@stop

@section('js')
@stop
@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-20">  
          {{-- <img src="{{ asset('storage/' . $postproyek->image) }}" alt=""> --}}
          <p>Nama &nbsp;:&nbsp;{{ $surat->user->nama }}</p>
          <p>NIK &nbsp;:&nbsp;{{ $surat->user->nik }} </p>
          {{-- <p>No KK&nbsp;:&nbsp; {{ $surat->user->nokk }}</p> --}}
          <p>Jenis Surat &nbsp;:&nbsp;{{ $surat->jenis_surat }}</p>
          <p>Tempat Lahir &nbsp;:&nbsp;{{ $surat->user->tempatlahir }}</p>
          <p>Tanggal Lahir &nbsp;:&nbsp;{{ $surat->user->tanggallahir }}</p>
          <p>Jenis Kelamin &nbsp;:&nbsp;{{ $surat->user->jeniskelamin }}</p>
          <p>Agama &nbsp;:&nbsp;{{ $surat->user->agama }}</p>
          <p>Dusun &nbsp;:&nbsp;{{ $surat->user->dusun }}</p>
          <p>Status &nbsp;:&nbsp;{{ $surat->user->status }}</p>
          <p>Pekerjaan &nbsp;:&nbsp;{{ $surat->user->pekerjaan }}</p>
          <p>Nomor Telpon &nbsp;:&nbsp;{{ $surat->user->notelpon }}</p>
          <p>Alamat &nbsp;:&nbsp;{{ $surat->user->alamat }}</p>
          <p>Email &nbsp;:&nbsp;{{ $surat->user->email }}</p>
          <a href="/surat">Kembali Ke Halaman Surat</a>
      </div>
  </div>
</div>

@endsection
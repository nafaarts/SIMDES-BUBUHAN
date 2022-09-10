@extends('layouts.admin')

@section('content')

<h1>Edit Data Proyek</h1><br>
<div class="col-lg-8">
    <form method="post" action="{{  route('perangkat.update', $daftarperangkat->id)  }}">
        @method('put')
        @csrf   
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required autofocus value="{{ old('nama', $daftarperangkat->nama) }}">
        </div>
        <div class="mb-3">
          <label for="jabatan" class="form-label">Jabatan</label>
          <input class="form-control" type="text" id="jabatan" name="jabatan" required autofocus value="{{ old('jabatan', $daftarperangkat->jabatan) }}">
        <div class="mb-3">
          <label for="notelpon" class="form-label">Nomor Telpon</label>
          <input class="form-control" type="text" id="notelpon" name="notelpon" required autofocus value="{{ old('notelpon', $daftarperangkat->notelpon) }}">
        </div>
        <button type="submit" class="btn btn-primary">update</button>
      </form>
</div>

@endsection
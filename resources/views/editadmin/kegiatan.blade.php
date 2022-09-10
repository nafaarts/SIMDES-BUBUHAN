@extends('layouts.admin')

@section('content')

<h1>Edit Data Kegiatan</h1><br>
<div class="col-lg-8">
    <form method="post" action="{{  route('kegiatan.update', $daftarkegiatan->id)  }}">
        @method('put')
        @csrf   
        <div class="mb-3">
          <label for="judul" class="form-label">judul</label>
          <input type="text" class="form-control" id="judul" name="judul" required autofocus value="{{ old('judul', $daftarkegiatan->judul) }}">
        </div>
        <div class="mb-3">
          <label for="isi" class="form-label">isi</label>
          <input class="form-control" type="text" id="isi" name="isi" required autofocus value="{{ old('isi', $daftarkegiatan->isi) }}">
        </div>
        <button type="submit" class="btn btn-primary">update</button>
      </form>
</div>

@endsection
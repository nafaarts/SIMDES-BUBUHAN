@extends('layouts.admin')

@section('content')

<h1 class="col-3">Tambah Data</h1>
<div class="col-lg-10">
    
    <form method="post" action="/perangkat" enctype="multipart/form-data">
        @csrf   

         <div class="mb-3">
            <label for="image" class="form-label">Foto Kegiatan</label>
            <input class="form-control" type="file" id="image" name="image">
          </div>

          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
          </div>
        
          <div class="mb-3">
              <label for="jabatan" class="form-label">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" name="jabatan">
          </div>
          <div class="mb-3">
              <label for="notelpon" class="form-label">Nomor Telpon</label>
              <input type="text" class="form-control" id="notelpon" name="notelpon">
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>

@endsection
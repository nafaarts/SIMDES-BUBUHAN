@extends('layouts.admin')

@section('content')

<h1 class="col-3">Tambah Data</h1>
<div class="col-lg-10">
    
    <form method="post" action="/proyek" enctype="multipart/form-data">
        @csrf 
         <div class="mb-3">
           <label for="image" class="form-label">Foto Proye</label>
           <input class="form-control" type="file" id="image" name="image">
         </div>

          <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul">
          </div>
          <div class="mb-3">
              <label for="isi" class="form-label">Isi Proyek</label>
              <input id="isi" type="hidden" name="isi">
              <trix-editor input="isi"></trix-editor>
          </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
</div>

@endsection
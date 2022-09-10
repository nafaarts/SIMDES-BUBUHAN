@extends('layouts.admin')

@section('content')

<h1 class="col-3">Tambah Data</h1>
<div class="col-lg-10">
    
    <form method="post" action="/agenda">
        @csrf 
        <div class="mb-3">
            <label for="judulagenda" class="form-label">Judul agenda</label>
            <input type="text" class="form-control" id="judulagenda" name="judulagenda">
        </div>

        <div class="mb-3">
            <label for="tanggalagenda" class="form-label">Tanggal Agenda</label>
            <input type="date" class="form-control" id="tanggalagenda" name="tanggalagenda">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

@endsection


    
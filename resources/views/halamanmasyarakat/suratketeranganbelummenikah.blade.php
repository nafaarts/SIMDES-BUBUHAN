@extends('layouts.masyarakat')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session()->has('succes'))

<script>
  swal("{{ session('succes') }}", "", "success");
</script>

@endif

<div class="col-lg-10">
    
    <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="jenis_surat" value="skbm">
        <button type="submit" class="btn btn-primary">Minta Surat Keterangan Belum Menikah</button>
      </form>
</div>

@endsection
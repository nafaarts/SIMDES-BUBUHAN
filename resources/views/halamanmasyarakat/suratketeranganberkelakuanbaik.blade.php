@extends('layouts.masyarakat')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session()->has('succes'))

<script>
  swal("{{ session('succes') }}", "", "success");
</script>

@endif

<div class="col-lg-10">
  {{-- <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambah" style="margin-left: 50px">Minta Surat</a> --}}
  {{-- <div class="modal fade" id="tambah" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Surat Keterangan Nama</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
              <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                @csrf 
                <input type="hidden" name="jenis_surat" value="skbb">
                <div class="mb-3">
                    <label for="keperluan" class="form-label">Keperluan</label>
                    <input type="text" class="form-control" id="keperluan" name="keperluan">
                </div>
        
                <button type="submit" class="btn btn-primary mb-3">Kirim</button>
        
              </form>
            </div>
        </div>
    </div>
  </div> --}}
     
</div>

@endsection
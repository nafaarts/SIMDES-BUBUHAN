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
                <div class="modal-title">Surat Keterangan Pindah</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <div class="container">
            <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
              @csrf 
              <input type="hidden" name="jenis_surat" value="sp">
              <div class="mb-3">
                  <label for="kepalakeluarga" class="form-label">Nama Kepala Keluarga</label>
                  <input type="text" class="form-control" id="kepalakeluarga" name="kepalakeluarga">
              </div>
              
              <div class="mb-3">
                <label for="alamattujuan" class="form-label">Alamat Tujuan </label>
                <input type="text" class="form-control" id="alamattujuan" name="alamattujuan">
              </div>
              
              <div class="mb-3">
                <label for="jumlahorangyangpindah" class="form-label">Jumlah Orang Yang Pindah</label>
                <input type="text" class="form-control" id="jumlahorangyangpindah" name="jumlahorangyangpindah">
              </div>
      
              <button type="submit" class="btn btn-primary mb-3">Kirim</button>
      
          </form>
          </div>
        </div>
    </div>
  </div> --}}
</div>

@endsection
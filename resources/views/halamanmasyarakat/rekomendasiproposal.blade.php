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
    {{-- <div class="modal fade" id="rps" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Rekomendasi Proposal</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="container">
                <form method="post" action="{{ route('surat.store') }}">
                    @csrf 
                    <input type="hidden" name="jenis_surat" value="rps">
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tanggalpermohonan" class="form-label">Tanggal Permohonan</label>
                        <input type="date" class="form-control" id="tanggalpermohonan" name="tanggalpermohonan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="prihalpermohonan" class="form-label">Prihal Permohonan</label>
                        <input type="text" class="form-control" id="prihalpermohonan" name="prihalpermohonan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tujuanpermohonan" class="form-label">Tujuan Permohonan</label>
                        <input type="text" class="form-control" id="tujuanpermohonan" name="tujuanpermohonan">
                    </div>
            
                    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
            
                </form>
            </div>
            </div>
        </div>
    </div> --}}
    
</div>

@endsection
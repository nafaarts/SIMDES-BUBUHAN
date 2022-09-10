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
                    <div class="modal-title">Surat Keterangan Kematian</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="jenis_surat" value="skm">
                        <div class="mb-3">
                            <label for="namaorangyangmeninggal" class="form-label">Nama Orang Yang Meninggal</label>
                            <input type="text" class="form-control" id="namaorangyangmeninggal" name="namaorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="alamatlahirorangyangmeninggal" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="alamatlahirorangyangmeninggal" name="alamatlahirorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="tanggallahirorangyangmeninggal" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggallahirorangyangmeninggal" name="tanggallahirorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="kewarganegaraanorangyangmeninggal" class="form-label">Kewarganegaraan Orang yang meninggal</label>
                            <input type="text" class="form-control" id="kewarganegaraanorangyangmeninggal" name="kewarganegaraanorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="alamatorangyangmeninggal" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamatorangyangmeninggal" name="alamatorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="harimeninggal" class="form-label">Hari Kematian</label>
                            <input type="text" class="form-control" id="harimeninggal" name="harimeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="tanggalmeninggal" class="form-label">Tanggal Kematian</label>
                            <input type="date" class="form-control" id="tanggalmeninggal" name="tanggalmeninggal">
                        </div>
                
                        <div class="mb-3">
                            <label for="notelpon" class="form-label">Nomor Telpon Whatsapp</label>
                            <input type="text" class="form-control" id="notelpon" name="notelpon">
                        </div>
                
                        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>     --}}
</div>

@endsection
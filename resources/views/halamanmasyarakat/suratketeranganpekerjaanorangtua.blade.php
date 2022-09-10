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
                <div class="modal-title">Surat Keterangan Pekerjaan Orang Tua</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
              <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                @csrf 
                <input type="hidden" name="jenis_surat" value="skport">
                <div class="mb-3">
                    <label for="namaayah" class="form-label">Nama Ayah</label>
                    <input type="text" class="form-control" id="namaayah" name="namaayah">
                </div>
                
                <div class="mb-3">
                    <label for="nikayah" class="form-label">NIK Ayah</label>
                    <input type="text" class="form-control" id="nikayah" name="nikayah">
                </div>
                
                <div class="mb-3">
                    <label for="tempatlahirayah" class="form-label">Tempat Lahir Ayah</label>
                    <input type="text" class="form-control" id="tempatlahirayah" name="tempatlahirayah">
                </div>
                
                <div class="mb-3">
                    <label for="tanggallahirayah" class="form-label">Tanggal Lahir Ayah</label>
                    <input type="date" class="form-control" id="tanggallahirayah" name="tanggallahirayah">
                </div>
                
                <label for="agamaayah" class="form-label">Agama Ayah</label>
                <select class="form-select mb-3" aria-label="Default select example" id="agamaayah" name="agamaayah" >
                    <option selected>Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select> 
        
                <div class="mb-3">
                    <label for="pekerjaanayah" class="form-label">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" id="pekerjaanayah" name="pekerjaanayah">
                </div>
        
                <div class="mb-3">
                    <label for="kewarganegaraanayah" class="form-label">Kewarganegaraan Ayah</label>
                    <input type="text" class="form-control" id="kewarganegaraanayah" name="kewarganegaraanayah">
                </div>
        
                <div class="mb-3">
                    <label for="alamatayah" class="form-label">Alamat Ayah</label>
                    <input type="text" class="form-control" id="alamatayah" name="alamatayah">
                </div>
                       
                <div class="mb-3">
                  <label for="namaibu" class="form-label">Nama Ibu</label>
                  <input type="text" class="form-control" id="namaibu" name="namaibu">
                </div>
                       
                <div class="mb-3">
                  <label for="nikibu" class="form-label">NIK Ibu</label>
                  <input type="text" class="form-control" id="nikibu" name="nikibu">
                </div>
                       
                <div class="mb-3">
                  <label for="tempatlahiribu" class="form-label">Tempat Lahir Ibu</label>
                  <input type="text" class="form-control" id="tempatlahiribu" name="tempatlahiribu">
                </div>
                       
                <div class="mb-3">
                  <label for="tanggallahiribu" class="form-label">Tanggal Lahir Ibu</label>
                  <input type="date" class="form-control" id="tanggallahiribu" name="tanggallahiribu">
                </div>
                       
                <label for="agamaibu" class="form-label">Agama Ibu</label>
                <select class="form-select mb-3" aria-label="Default select example" id="agamaibu" name="agamaibu" >
                    <option selected>Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select> 
                
                <div class="mb-3">
                  <label for="pekerjaanibu" class="form-label">Pekerjaan Ibu</label>
                  <input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu">
                </div>
                
                <div class="mb-3">
                  <label for="kewarganegaraanibu" class="form-label">Kewarganegaraan ibu</label>
                  <input type="text" class="form-control" id="kewarganegaraanibu" name="kewarganegaraanibu">
                </div>
               
                <div class="mb-3">
                  <label for="alamatibu" class="form-label">Alamat ibu</label>
                  <input type="text" class="form-control" id="alamatibu" name="alamatibu">
                </div>
        
                <button type="submit" class="btn btn-primary mb-3">Kirim</button>
        
              </form>
            </div>
        </div>
    </div>
  </div> --}}
    
</div>

@endsection
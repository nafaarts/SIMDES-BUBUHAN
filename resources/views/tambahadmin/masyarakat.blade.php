@extends('layouts.admin')

@section('content')

<div class="col-lg-10">
    
    <form method="post" action="/masyarakat" enctype="multipart/form-data">
        @csrf               
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik">
        </div>

        <div class="mb-3">
            <label for="nokk" class="form-label">No KK</label>
            <input type="text" class="form-control" id="nokk" name="nokk">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
            <label for="tempatlahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir">
        </div>

        <div class="mb-3">
            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir">
        </div>
        
        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-select mb-3" aria-label="Default select example" id="jeniskelamin" name="jeniskelamin">
            <option selected>Pilih</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>

            <label for="agama" class="form-label">Agama</label>
            <select class="form-select mb-3" aria-label="Default select example" id="agama" name="agama" >
                <option selected>Pilih</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select>

            <label for="dusun" class="form-label">Dusun</label>
            <select class="form-select mb-3" aria-label="Default select example" id="dusun" name="dusun" >
                <option selected>Pilih</option>
                <option value="kinali">Kinali</option>
                <option value="tulus">Tulus</option>
                <option value="suangking">Suangking</option>
                <option value="ikhlas">Ikhlas</option>
            </select>

            <label for="status" class="form-label">Status Pernikahan</label>
            <select class="form-select mb-3" aria-label="Default select example" id="status" name="status" >
                <option selected>Pilih</option>
                <option value="Sudah Menikah">Sudah Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
            </select>
            
            <label for="pekerjaan" class="form-label">Status Pekerjaan</label>
            <select class="form-select mb-3" aria-label="Default select example" id="pekerjaan" name="pekerjaan" >
                <option selected>Pilih</option>
                <option value="Pelajar">Pelajar</option>
                <option value="PNS">PNS</option>
                <option value="Wiraswasta">Wiraswasta</option>
                <option value="Pedagang">Pedagang</option>
                <option value="Petani">Petani</option>
                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
            </select>
            
            {{-- <div class="mb-3">
                <label for="pekerjaan" class="form-label">pekerjaan Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div> --}}
            
            <div class="mb-3">
                <label for="notelpon" class="form-label">Nomor Telpon Whatsapp</label>
                <input type="text" class="form-control" id="notelpon" name="notelpon">
            </div>
            
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>

            <div class="mb-3">
            <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
        <label for="role" class="form-label">Role</label>
        <select class="form-select mb-3" aria-label="Default select example" id="role" name="role">
        <option selected>Pilih</option>
        <option value="Admin">Admin</option>
        <option value="Masyarakat">Masyarakat</option>
        </select>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
    
@endsection
    {{-- <div class="col-3">
        <div class="input-group">
            <label for="tempattanggallahir" class="label mb-3">Birthday</label>
            <div class="input-group-icon">
                <input class="input--style-4 js-datepicker" type="text" name="tempattanggallahir" id="tempattanggallahir">
          <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
      </div>
    </div>
   </div> --}}
    {{-- <div class="mb-3">
        <label for="tempattanggallahir" class="form-label">tempattanggallahir</label>
        <input type="text" class="form-control" id="tempattanggallahir" name="tempattanggallahir">
    </div> --}}
    {{-- <div class="mb-3">
        <label for="jeniskelamin" class="form-label">jeniskelamin</label>
        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">
    </div> --}}
    {{-- <div class="col-3">
        <div class="input-group">
            <label class="label">Jenis Kelamin</label>
            <div class="p-t-10 d-inline">
                <label for="jeniskelamin" class="radio-container m-r-45">Laki-Laki
                    <input type="radio" checked="checked" name="jeniskelamin" id="jeniskelamin">
                    <span class="checkmark"></span>
                </label>
                <label for="jeniskelamin" class="radio-container">Perempuan
                    <input type="radio" name="jeniskelamin" id="jeniskelamin">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div> --}}
    {{-- <div class="form-check form-check-inline mb-3">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">laki laki</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label mb-3" for="inlineRadio2">peremp</label>
    </div> --}}
    {{-- <div class="mb-3">
        <label for="dusun" class="form-label">dusun</label>
        <input type="text" class="form-control" id="dusun" name="dusun">
      </div> --}}
      {{-- <div class="input-group">
          <label class="label">Dusun</label>
          <div class="rs-select2 js-select-simple select--no-search">
              <select name="dusun" id="dusun">
                  <option value="kinali">Kinali</option>
                  <option value="Tulus">Tulus</option>
                  <option value="Ikhlas">Ikhlas</option>
                  <option value="Suangking">Suangking</option>
              </select>
              <div class="select-dropdown"></div>
          </div>
      </div> --}}
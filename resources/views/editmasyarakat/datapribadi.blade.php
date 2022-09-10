{{-- @extends('layouts.admin')

@section('content')

<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
      <div class="col-md-3 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
      </div>
      <div class="col-lg-8 border-right">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Profile Settings</h4>
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Profile</label>
                <input class="form-control" type="file" id="image" name="image">
              </div>
              <div class="row mt-2">
                  <div class="col-md-6">
                    <label class="labels">Name</label>
                    <input type="text" class="form-control" placeholder="first name" value="">
                  </div>
                  <div class="col-md-6">
                    <label class="labels">Surname</label>
                    <input type="text" class="form-control" value="" placeholder="surname">
                  </div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-12">
                    <label class="labels">Mobile Number</label>
                    <input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                  <div class="col-md-12">
                    <label class="labels">Address Line 1</label>
                    <input type="text" class="form-control" placeholder="enter address line 1" value="">
                  </div>
                  <div class="col-md-12">
                    <label class="labels">Address Line 2</label>
                    <input type="text" class="form-control" placeholder="enter address line 2" value="">
                  </div>
                  <div class="col-md-12">
                    <label class="labels">Postcode</label>
                    <input type="text" class="form-control" placeholder="enter address line 2" value="">
                  </div>
                  <div class="col-md-12">
                    <label class="labels">State</label>
                    <input type="text" class="form-control" placeholder="enter address line 2" value="">
                  </div>
                  <div class="col-md-12">
                    <label class="labels">Area</label>
                    <input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12">
                    <label class="labels">Email ID</label>
                    <input type="text" class="form-control" placeholder="enter email id" value="">
                  </div>
                  <div class="col-md-12"
                  ><label class="labels">Education</label>
                  <input type="text" class="form-control" placeholder="education" value="">
                </div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-6">
                    <label class="labels">Country</label>
                    <input type="text" class="form-control" placeholder="country" value="">
                  </div>
                  <div class="col-md-6">
                    <label class="labels">State/Region</label>
                    <input type="text" class="form-control" value="" placeholder="state">
                  </div>
              </div>
              <div class="mt-5 text-center">
                <button class="btn btn-primary profile-button" type="button">Update Profile</button>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>

@endsection


{{-- <div class="container">
  <div class="row">
      <div class="col-20">   --}}
          {{-- <img src="{{ asset('storage/' . $postproyek->image) }}" alt=""> --}}
          {{-- <p>{{ $daftarmasyarakat->nik }}</p>
          <p>{{ $daftarmasyarakat->nokk }}</p>
          <p>{{ $daftarmasyarakat->nama }}</p>
          <p>{{ $daftarmasyarakat->tempatlahir }}</p>
          <p>{{ $daftarmasyarakat->tanggallahir }}</p>
          <p>{{ $daftarmasyarakat->jeniskelamin }}</p>
          <p>{{ $daftarmasyarakat->agama }}</p>
          <p>{{ $daftarmasyarakat->dusun }}</p>
          <p>{{ $daftarmasyarakat->status }}</p>
          <p>{{ $daftarmasyarakat->pekerjaan }}</p>
          <p>{{ $daftarmasyarakat->notelpon }}</p>
          <p>{{ $daftarmasyarakat->alamat }}</p>
          <p>{{ $daftarmasyarakat->email }}</p>
          <a href="/masyarakat">Kembali Ke Halaman Daftar Masyarakat</a>
      </div>
  </div>
</div> --}}


{{-- @extends('layouts.masyarakat')

@section('content')

<h1>Edit Data Pribadi</h1><br>
<div class="col-lg-8">


    <form method="post" action="{{  route('datapribadi.update', $datapribadi->id)  }}">


        @method('put')
        @csrf   
        <div class="mb-3">
          <label for="nik" class="form-label">NIK</label>
          <input type="text" class="form-control" id="nik" name="nik"  autofocus value="{{ old('nik', $datapribadi->nik) }}">
        </div>

        <div class="mb-3">
          <label for="nokk" class="form-label">No KK</label>
          <input type="text" class="form-control" id="nokk" name="nokk"  autofocus value="{{ old('nokk', $datapribadi->nokk) }}">
        </div>

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama"  autofocus value="{{ old('nama', $datapribadi->nama) }}">
        </div>

        <div class="mb-3">
          <label for="tempatlahir" class="form-label">tempatlahir</label>
          <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"  autofocus value="{{ old('tempatlahir', $datapribadi->tempatlahir) }}">
        </div>

        <div class="mb-3">
          <label for="tanggallahir" class="form-label">tanggallahir</label>
          <input type="text" class="form-control" id="tanggallahir" name="tanggallahir"  autofocus value="{{ old('tanggallahir', $datapribadi->tanggallahir) }}">
        </div>

        <div class="mb-3">
          <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin"  autofocus value="{{ old('jeniskelamin', $datapribadi->jeniskelamin) }}">
        </div>

        <div class="mb-3">
          <label for="agama" class="form-label">Agama</label>
          <input type="text" class="form-control" id="agama" name="agama"  autofocus value="{{ old('agama', $datapribadi->agama) }}">
        </div>

        <div class="mb-3">
          <label for="dusun" class="form-label">Dusun</label>
          <input type="text" class="form-control" id="dusun" name="dusun"  autofocus value="{{ old('dusun', $datapribadi->dusun) }}">
        </div>

        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <input type="text" class="form-control" id="status" name="status"  autofocus value="{{ old('status', $datapribadi->status) }}">
        </div>

        <div class="mb-3">
          <label for="pekerjaan" class="form-label">Pekerjaan</label>
          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"  autofocus value="{{ old('pekerjaan', $datapribadi->pekerjaan) }}">
        </div>

        <div class="mb-3">
          <label for="notelpon" class="form-label">Nomor Telpon</label>
          <input type="text" class="form-control" id="notelpon" name="notelpon"  autofocus value="{{ old('notelpon', $datapribadi->notelpon) }}">
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat"  autofocus value="{{ old('alamat', $datapribadi->alamat) }}">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="text" class="form-control" id="email" name="email"  autofocus value="{{ old('email', $datapribadi->email) }}">
        </div>
        
        <div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input class="form-control" type="text" id="password" name="password"  autofocus value="{{ old('password') }}">
        </div>
        <button type="submit" class="btn btn-primary">update</button>
      </form>
</div>

@endsection --}}
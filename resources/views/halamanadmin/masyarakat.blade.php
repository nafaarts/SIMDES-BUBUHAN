@extends('layouts.admin')

@section('content')

@if(session()->has('succes'))

<script>
    swal("{{ session('succes') }}", "", "success");
</script>

{{-- <div class="alert alert-success" role="alert">
{{ session('succes') }}
</div> --}}

@endif
    <div class="container">
        {{-- <a href="masyarakat/create" class="btn btn-primary mb-4">Tambah Data</a> --}}
        <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambah">Tambah Data</a>
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>No KK</th>
                    <th>Nama</th>
                    <th>Nomor Telpon</th>
                    <th>Dusun</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datamasyarakat as $masyarakat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $masyarakat->nik }}</td>
                        <td>{{ $masyarakat->nokk }}</td>
                        <td>{{ $masyarakat->nama }}</td>
                        <td>{{ $masyarakat->notelpon }}</td>
                        <td>{{ $masyarakat->dusun }}</td>
                        <td>{{ $masyarakat->email}}</td>
                        <td>
                            <a href="{{ route('masyarakat.show', $masyarakat->id) }}" class="btn btn-info">
                                <i class="bi bi-eye"></i></span>
                            </a>
                            {{-- <button data-id="{{ $masyarakat->id }}" type="button" class="btn_detail btn btn-warning" data-toggle="modal" data-target="#contohModal">Lihat</button> --}}
                            
                            {{-- <form action="{{ route('masyarakat.destroy',  $masyarakat->id ) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('yakin?')"><i class="bi bi-x-square"></i></span></button>
                            </form> --}}

                            <form action="{{ route('masyarakat.destroy',  $masyarakat->id ) }}" method="post" class="d-inline" onsubmit="return confirmDelete(this)">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-x-square"></i></button>
                            </form> 
                        </td>
                    </tr>    
                @endforeach          
            </tbody>
        </table>
            {{-- <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Masyarakat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container col-sm-11 p-4">
                                {{-- <div class="card-body"> --}}
                                    {{-- <div class=""> --}}
                                        {{-- <p class="nik"></p>
                                        <p class="nokk"></p>
                                        <p class="nama"></p>
                                        <p class="tempatlahir"></p>
                                        <p class="tanggallahir"></p>
                                        <p class="agama"></p>
                                        <p class="agama"></p>
                                        <p class="dusun"></p>
                                        <p class="status"></p>
                                        <p class="pekerjaan"></p>
                                        <p class="notelpon"></p>
                                        <p class="alamat"></p>
                                        <p class="email"></p> --}}
                                    {{-- </div> --}}
                                {{-- </div> -}}
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="modal fade" id="tambah" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title">Tambah Data Masyarakat</div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="container">
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
                    
                            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
    </div>

    {{-- <script>
            let btn=document.querySelectorAll('.btn_detail');
        btn.forEach(element => {
            element.addEventListener('click',function () {
                let data = $(this).data("id");
                console.log(data);
                $.ajax({
                    url:'/api/detail-data/'+ data,
                    type:'get',
                    dataType:'json',
                    success: (function (result) {
                        console.log(result);
                        $(".nik").text("nik :"+result.nik);
                        $(".nokk").text("nokk :"+result.nokk);
                        $(".nama").text("nama :"+result.nama);
                        $(".tempatlahir").text("tempatlahir :"+result.tempatlahir);
                        $(".tanggallahir").text("tanggallahir :"+result.tanggallahir);
                        $(".jeniskelamin").text("jeniskelamin :"+result.jeniskelamin);
                        $(".agama").text("agama :"+result.agama);
                        $(".status").text("status :"+result.status);
                        $(".pekerjaan").text("pekerjaan :"+result.pekerjaan);
                        $(".notelpon").text("notelpon :"+result.notelpon);
                        $(".alamat").text("alamat :"+result.alamat);
                        $(".email").text("email :"+result.email);
                    })
                })
            })
        });
    </script> --}}

    <script>

        function confirmDelete(e) {
            swal({
                title: 'Apakah Kamu Yakin?',
                text: 'Data Akan Dihapus Secara Permanen!!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            })
            .then((willDelete) => {
                if (willDelete) {
                        // swal("", {
                        // icon: "success",
                        // });
                    e.submit()
                } else {
                    swal("Data Masih Tersimpan", {
                        icon: "success",
                    });
                }
            });
            return false
        }
    
    </script>
@endsection
@extends('layouts.admin')

@section('content')

    @if(session()->has('succes'))

    <script>
        swal("{{ session('succes') }}", "", "success");
    </script>

    @endif
<div class="container">
<div class="table-responsive col-lg-auto">
    {{-- <a href="perangkat/create" class="btn btn-primary mb-4">Tambah</a> --}}
    <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambah">Tambah Data</a>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Nomor Telpon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarperangkat as $perangkat)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $perangkat->nama }}</td>
                <td>{{ $perangkat->jabatan }}</td>
                <td>{{ $perangkat->notelpon }}</td>
                    <td>
                        <div class="d-flex" style="gap: 10px">
                            <a href="{{ route('perangkat.show', $perangkat->id) }}" class="btn btn-info">
                                <i class="bi bi-eye"></i></span>
                            </a>
                            <a href="{{ route('perangkat.edit', $perangkat->id) }}" class="btn btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            {{-- <form action="{{ route('perangkat.destroy',  $perangkat->id ) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('yakin?')"><i class="bi bi-x-square"></i></button>
                            </form>  --}}
                            <form action="{{ route('perangkat.destroy',  $perangkat->id ) }}" method="post" class="d-inline" onsubmit="return confirmDelete(this)">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-x-square"></i></button>
                            </form>
                    </div>
                    </td>
                </tr>    
            @endforeach          
        </tbody>
    </table>

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
                <form method="post" action="/perangkat" enctype="multipart/form-data">
                    @csrf   
            
                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Kegiatan</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
            
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="notelpon" class="form-label">Nomor Telpon</label>
                        <input type="text" class="form-control" id="notelpon" name="notelpon">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="edit" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Edit Data</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="container">
                <form method="post" action="{{  route('perangkat.update', $daftarperangkat->id)  }}">
                    @method('put')
                    @csrf   
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" required autofocus value="{{ old('nama', $daftarperangkat->nama) }}">
                    </div>
                    <div class="mb-3">
                      <label for="jabatan" class="form-label">Jabatan</label>
                      <input class="form-control" type="text" id="jabatan" name="jabatan" required autofocus value="{{ old('jabatan', $daftarperangkat->jabatan) }}">
                    <div class="mb-3">
                      <label for="notelpon" class="form-label">Nomor Telpon</label>
                      <input class="form-control" type="text" id="notelpon" name="notelpon" required autofocus value="{{ old('notelpon', $daftarperangkat->notelpon) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                  </form>
            </div>
            </div>
        </div>
    </div> --}}
</div>
</div>

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
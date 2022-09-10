@extends('layouts.admin')

@section('content')

 @if(session()->has('succes')) 

<script>
    swal("{{ session('succes') }}", "", "success");
</script>

@endif 
<div class="container">
<div class="table-responsive col-lg-auto">
    {{-- <a href="kegiatan/create" class="btn btn-primary mb-4">Tambah</a> --}}
    <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambah">Tambah Data</a>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>Judul Kegiatan</th>
                <th>Excerpt</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarkegiatan as $kegiatan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kegiatan->judul }}</td>
                    <td>{!! $kegiatan->excerpt !!}</td>
                    <td>
                        <div class="d-flex" style="gap: 10px">
                            <a href="{{ route('kegiatan.show', $kegiatan->id) }}" class="btn btn-info">
                                <i class="bi bi-eye"></i></span>
                            </a>
                            {{-- <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a> --}}
                            {{-- <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('yakin?')"><i class="bi bi-x-square"></i></button>
                            </form>  --}}
                            <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="post" class="d-inline" onsubmit="return confirmDelete(this)">
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

    <div class="modal fade bd-example-modal-lg" tabindex="-1" id="tambah" role="dialog" arialabelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Tambah Data</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="container">
                <form method="post" action="/kegiatan" enctype="multipart/form-data">
                    @csrf           
                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Kegiatan</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
            
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi Proyek</label>
                        <input id="isi" type="hidden" name="isi">
                        <trix-editor input="isi"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                </form>
            </div>
            </div>
        </div>
    </div>
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
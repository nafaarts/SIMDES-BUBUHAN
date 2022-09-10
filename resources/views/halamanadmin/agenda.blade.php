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
<div class="table-responsive col-lg-auto">
    {{-- <a href="agenda/create" class="btn btn-primary mb-4">Tambah</a> --}}
    <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambah">Tambah Data</a>
    {{-- <table class="table table-striped table-sm table-responsive">
        <thead>
            <tr>
                <th>NO</th>
                <th>Judul Agenda</th>
                <th>Tanggal Agenda</th>
                <th>action</th>
            </tr>
        </thead>

        <tbody>

        @foreach ($daftaragenda as $agenda)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $agenda->judulagenda }}</td>
                <td>{{ $agenda->tanggalagenda->isoFormat('DD MMMM Y') }}</td>
                <td>
                    <form action="{{ route('agenda.destroy', $agenda->id) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('yakin?')"><i class="bi bi-x-square"></i></button>
                    </form> 
                </td>
                @endforeach
            </tr>
        </tbody>
    </table> --}}
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>Judul Agenda</th>
                <th>Tanggal Agenda</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftaragenda as $agenda)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $agenda->judulagenda }}</td>
                <td>{{ $agenda->tanggalagenda->isoFormat('DD MMMM Y') }}</td>
                <td>
                            <form action="{{ route('agenda.destroy', $agenda->id) }}" method="post" class="d-inline" onsubmit="return confirmDelete(this)">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-x-square"></i></button>
                            </form> 
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
                <form method="post" action="/agenda">
                    @csrf 
                    <div class="mb-3">
                        <label for="judulagenda" class="form-label">Judul agenda</label>
                        <input type="text" class="form-control" id="judulagenda" name="judulagenda">
                    </div>
            
                    <div class="mb-3">
                        <label for="tanggalagenda" class="form-label">Tanggal Agenda</label>
                        <input type="date" class="form-control" id="tanggalagenda" name="tanggalagenda">
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
                swal("Data Masih Tersimpan");
            }
        });
        return false
    }

</script>
@endsection
@extends('layouts.admin')

@section('content')

@if(session()->has('succes'))

<script>
    swal("{{ session('succes') }}", "", "success");
</script>

@endif
    
<div class="container">
    {{-- <table class="table table-striped table-sm table-responsive">
      <thead>
            <tr>
                <th>NO</th>
                <th>No KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Surat</th>
                <th>Dusun</th>
                <th>Email</th>
                <th>Status</th>
                <th >action</th>
            </tr>
      </thead>

      <tbody>

        @foreach ($surat as $v)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $v->user->nokk }}</td>
                <td>{{ $v->user->nik }}</td>
                <td>{{ $v->user->nama }}</td>
                <td>{{ $v->jenis_surat }}</td>
                <td>{{ $v->user->dusun }}</td>
                <td>{{ $v->user->email }}</td>
                <td>{{ $v->status }}</td>
                <td >
                   <div class="d-flex" style="gap: 10px">
                     {{-- <a href="" class="btn btn-danger">
                        <i class="bi bi-check-circle-fill"></i>
                    </a> --}}
                    {{-- <form action="{{ route('surat.wa', $v->id) }}" method="post">
                        @method('post')
                        @csrf
                        <button class="btn @if($v->status == 'selesai') 
                        btn-success
                            @else 
                        btn-danger
                            @endif" type="submit">
                        <i class="bi bi-whatsapp"></i>
                        </button>
                    </form> --}}
                    {{-- <a href="{{ route('surat.show',  $v->id ) }}" class="btn btn-primary">
                        <i class="bi bi-eye"></i>
                    </a> --}}
                    
                    {{-- <a target="_blank" href="{{ asset('storage/public/'. $v->surat_path) }}"  class="btn btn-primary">
                        <i class="bi bi-eye"></i>
                    
                    </a> --}}
                    {{-- <a href="" class="btn btn-primary">
                        <i class="bi bi-chat-dots"></i>
                    </a> --}
                    <form action="{{ route('surat.destroy',  $v->id ) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('yakin?')"><span><i class="bi bi-x-circle-fill"></i></span></button>
                    </form>
                </td>
                @endforeach
                   </div>
            </tr>
        </tbody>
    </table> --}}
    <div class="table-responsive col-lg-auto">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>No KK</th>
                <th>Nama</th>
                <th>Surat</th>
                <th>Dusun</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surat as $v)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $v->user->nik }}</td>
                    <td>{{ $v->user->nokk }}</td>
                    <td>{{ $v->user->nama }}</td>
                    <td>{{ $v->jenis_surat }}</td>
                    <td>{{ $v->user->dusun }}</td>
                    <td>{{ $v->status }}</td>
                    <td>
                        <div class="d-flex" style="gap: 10px">
                            {{-- <a href="" class="btn btn-danger">
                            <i class="bi bi-check-circle-fill"></i>
                            </a> --}}
                            <form action="{{ route('surat.wa', $v->id) }}" method="post">
                                @method('post')
                                @csrf
                                <button class="btn @if($v->status == 'selesai') 
                                btn-success
                                    @else 
                                btn-danger
                                    @endif" type="submit">
                                <i class="bi bi-whatsapp"></i>
                                </button>
                            </form>                           
                            <a target="_blank" href="{{ asset('storage/'. $v->surat_path) }}"  class="btn btn-primary">
                                <i class="bi bi-eye"></i>                           
                            </a>
                            {{-- <a href="" class="btn btn-primary">
                            <i class="bi bi-chat-dots"></i>
                            </a> --}}
                            {{-- <form action="{{ route('surat.destroy',  $v->id ) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('yakin?')"><span><i class="bi bi-x-circle-fill"></i></span></button>
                            </form> --}}
                            <form action="{{ route('surat.destroy',  $v->id ) }}" method="post" class="d-inline" onsubmit="return confirmDelete(this)">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-x-square"></i></button>
                            </form> 
                    </td>
                </tr>    
            @endforeach          
        </tbody>
        {{-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> --}}
    </table>
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
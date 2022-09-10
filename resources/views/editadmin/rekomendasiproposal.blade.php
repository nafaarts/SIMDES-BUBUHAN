@extends('layouts.admin')

@section('content')

{{-- @if(session()->has('succes'))

<div class="alert alert-success" role="alert">
  {{ session('succes') }}
</div>

@endif --}}
    
<div class="table-responsive col-lg-auto">
    <a href="daftarproyek/create" class="btn btn-primary mb-4">Tambah Data</a>
    <table class="table table-striped table-sm table-responsive">
      <thead>
            <tr>
                <th>NO</th>
                <th>Judul Proyek</th>
                <th>Isi Proyek</th>
                <th>action</th>
            </tr>
      </thead>

      <tbody>

        {{-- @foreach ($daftarproyek as $proyek) --}}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    {{-- <a href="{{ route('daftarproyek.show', $proyek->id) }}" class="btn btn-info">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="" class="btn btn-warning">
                        <span data-feather="edit"></span>
                    </a>
                    <form action="{{ route('daftarproyek.destroy',  $proyek->id ) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('yakin?')"><span data-feather="x-circle"></span></button>
                    </form> --}}
                </td>
                {{-- @endforeach --}}
            </tr>
        </tbody>
    </table>
  </div>

@endsection
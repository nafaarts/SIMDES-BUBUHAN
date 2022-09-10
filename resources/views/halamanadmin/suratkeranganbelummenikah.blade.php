@extends('layouts.admin')

@section('content')
    
<div class="table-responsive col-lg-auto">
    <table class="table table-striped table-sm table-responsive">
      <thead>
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>No KK</th>
                <th>Nama</th>
                <th>No Telpon</th>
                <th>action</th>
            </tr>
      </thead>

      <tbody>

        {{-- @foreach ($daftarproyek as $proyek) --}}
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-info">
                        <i class="bi bi-check-circle-fill"></i>
                    </a>
                    <a href="" class="btn btn-success">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="" class="btn btn-primary">
                        <i class="bi bi-eye"></i>
                    </a>
                    <form action="" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('yakin?')"><span><i class="bi bi-x-circle-fill"></i></span></button>
                    </form>
                </td>
                {{-- @endforeach --}}
            </tr>
        </tbody>
    </table>
  </div>

@endsection
@extends('layouts.admin')

@section('content')

  <div class="container">
    <div class="table-responsive col-lg-auto">    
        <table id="example" class="table table-striped table-border" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>No KK</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>  
                    <th>Jenis Kelamin</th>  
                    <th>Agama</th>  
                    <th>Dusun</th>  
                    <th>Status</th>  
                    <th>Pekerjaan</th>  
                    <th>No Telpon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pekerjaan as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->nik }}</td>
                        <td>{{ $p->nokk }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->tempatlahir }}</td>
                        <td>{{ $p->tanggallahir->isoFormat('DD MMMM Y') }}</td>
                        <td>{{ $p->jeniskelamin }}</td>
                        <td>{{ $p->agama }}</td>
                        <td>{{ $p->dusun }}</td>
                        <td>{{ $p->status }}</td>
                        <td>{{ $p->pekerjaan }}</td>
                        <td>{{ $p->notelpon }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->email }}</td>                    
                    </tr>    
                @endforeach          
            </tbody>
        </table>
    </div>
</div>

@endsection
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
                @foreach ($belummenikah as $belum)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $belum->nik }}</td>
                        <td>{{ $belum->nokk }}</td>
                        <td>{{ $belum->nama }}</td>
                        <td>{{ $belum->tempatlahir }}</td>
                        <td>{{ $belum->tanggallahir->isoFormat('DD MMMM Y') }}</td>
                        <td>{{ $belum->jeniskelamin }}</td>
                        <td>{{ $belum->agama }}</td>
                        <td>{{ $belum->dusun }}</td>
                        <td>{{ $belum->status }}</td>
                        <td>{{ $belum->pekerjaan }}</td>
                        <td>{{ $belum->notelpon }}</td>
                        <td>{{ $belum->alamat }}</td>
                        <td>{{ $belum->email }}</td>                    
                    </tr>    
                @endforeach          
            </tbody>
        </table>
    </div>
</div>

@endsection
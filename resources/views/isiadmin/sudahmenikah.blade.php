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
                @foreach ($sudahmenikah as $sudah)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sudah->nik }}</td>
                        <td>{{ $sudah->nokk }}</td>
                        <td>{{ $sudah->nama }}</td>
                        <td>{{ $sudah->tempatlahir }}</td>
                        <td>{{ $sudah->tanggallahir->isoFormat('DD MMMM Y') }}</td>
                        <td>{{ $sudah->jeniskelamin }}</td>
                        <td>{{ $sudah->agama }}</td>
                        <td>{{ $sudah->dusun }}</td>
                        <td>{{ $sudah->status }}</td>
                        <td>{{ $sudah->pekerjaan }}</td>
                        <td>{{ $sudah->notelpon }}</td>
                        <td>{{ $sudah->alamat }}</td>
                        <td>{{ $sudah->email }}</td>                    
                    </tr>    
                @endforeach          
            </tbody>
        </table>
    </div>
</div>

@endsection
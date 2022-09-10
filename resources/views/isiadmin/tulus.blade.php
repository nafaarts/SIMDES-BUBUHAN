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
                @foreach ($dusuntulus as $tulus)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tulus->nik }}</td>
                        <td>{{ $tulus->nokk }}</td>
                        <td>{{ $tulus->nama }}</td>
                        <td>{{ $tulus->tempatlahir }}</td>
                        <td>{{ $tulus->tanggallahir->isoFormat('DD MMMM Y') }}</td>
                        <td>{{ $tulus->jeniskelamin }}</td>
                        <td>{{ $tulus->agama }}</td>
                        <td>{{ $tulus->dusun }}</td>
                        <td>{{ $tulus->status }}</td>
                        <td>{{ $tulus->pekerjaan }}</td>
                        <td>{{ $tulus->notelpon }}</td>
                        <td>{{ $tulus->alamat }}</td>
                        <td>{{ $tulus->email }}</td>                    
                    </tr>    
                @endforeach          
            </tbody>
        </table>
    </div>
</div>
@endsection
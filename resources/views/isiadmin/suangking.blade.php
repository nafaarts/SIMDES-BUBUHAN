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
                @foreach ($dusunsuangking as $suangking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $suangking->nik }}</td>
                        <td>{{ $suangking->nokk }}</td>
                        <td>{{ $suangking->nama }}</td>
                        <td>{{ $suangking->tempatlahir }}</td>
                        <td>{{ $suangking->tanggallahir->isoFormat('DD MMMM Y') }}</td>
                        <td>{{ $suangking->jeniskelamin }}</td>
                        <td>{{ $suangking->agama }}</td>
                        <td>{{ $suangking->dusun }}</td>
                        <td>{{ $suangking->status }}</td>
                        <td>{{ $suangking->pekerjaan }}</td>
                        <td>{{ $suangking->notelpon }}</td>
                        <td>{{ $suangking->alamat }}</td>
                        <td>{{ $suangking->email }}</td>                    
                    </tr>    
                @endforeach          
            </tbody>
        </table>
    </div>
</div>

@endsection
@extends('layouts.admin')

@section('content')
{{-- 
@if(session()->has('succes'))

<div class="alert alert-success" role="alert">
  {{ session('succes') }}
</div>

@endif --}}
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
            @foreach ($dusunkinali as $kinali)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kinali->nik }}</td>
                    <td>{{ $kinali->nokk }}</td>
                    <td>{{ $kinali->nama }}</td>
                    <td>{{ $kinali->tempatlahir }}</td>
                    <td>{{ $kinali->tanggallahir->isoFormat('DD MMMM Y') }}</td>
                    <td>{{ $kinali->jeniskelamin }}</td>
                    <td>{{ $kinali->agama }}</td>
                    <td>{{ $kinali->dusun }}</td>
                    <td>{{ $kinali->status }}</td>
                    <td>{{ $kinali->pekerjaan }}</td>
                    <td>{{ $kinali->notelpon }}</td>
                    <td>{{ $kinali->alamat }}</td>
                    <td>{{ $kinali->email }}</td>                    
                </tr>    
            @endforeach          
        </tbody>
    </table>
</div>
</div>
@endsection
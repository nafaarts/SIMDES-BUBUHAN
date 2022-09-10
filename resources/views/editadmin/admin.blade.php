@extends('layouts.admin')

@section('content')

<h1>Edit Data Admin</h1><br>
<div class="col-lg-8">
    <form method="post" action="{{  route('admin.update', $dataadmin->id)  }}">
        @method('put')
        @csrf   
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="text" class="form-control" id="email" name="email" required autofocus value="{{ old('email', $dataadmin->email) }}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input class="form-control" type="text" id="password" name="password" required autofocus value="{{ old('password', $dataadmin->password) }}">
        </div>
        <button type="submit" class="btn btn-primary">update</button>
      </form>
</div>

@endsection
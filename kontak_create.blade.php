@extends('template')
@section('content')
  <section class="main-section">
    <div class="content">
      <h1>Tambah Kontak</h1>
      <hr>
      @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
      @endif

      <form action="{{ route('kontak.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" name="nama" id="usr">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="nohp">No HP:</label>
          <input type="text" class="form-control" name="nohp" id="nohp">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <textarea name="alamat" class="form-control" id="alamat"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
      </form>
    </div>
  </section>
@endsection

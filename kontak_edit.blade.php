@extends('template')
@section('content')
  <section class="main-section">
    <div class="content">
      <h1>Ubah Kontak</h1>
      <hr>
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      @foreach($data as $datas)
      <form action="{{ route('kontak.update', $datas->id)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" name="nama" id="usr" value="{{ $datas->nama }}">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" name="email" id="email" value="{{ $datas->email }}">
        </div>
        <div class="form-group">
          <label for="nohp">No HP:</label>
          <input type="text" class="form-control" name="nohp" id="nohp" value="{{ $datas->nohp }}">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <textarea name="alamat" class="form-control" id="alamat">{{ $datas->nama }}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
      </form>
      @endforeach
    </div>
  </section>
@endsection

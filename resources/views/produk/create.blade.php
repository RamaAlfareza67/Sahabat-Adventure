@extends('layouts.app')

@section('deskripsi')
<h4>Produk Baru</h4>
<form action="{{ route('produk.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="nama" class="control-label">nama produk</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
        <label for="deskripsi" class="control-label">Deskripsi</label>
        <textarea name="deskripsi" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('deskripsi'))
            <span class="help-block">{{ $errors->first('deskripsi') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('produk.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
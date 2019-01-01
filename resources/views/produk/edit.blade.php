@extends('layouts.app')

@section('deskripsi')
<h4>Ubah Produkl</h4>
<form action="{{ route('produk.update', $produk->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="nama" class="control-label">Nama Produk</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $produk->nama}}">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
        <label for="deskripsi" class="control-label">deskripsi</label>
        <textarea name="deskripsi" cols="30" rows="5" class="form-control">{{ $produk->deskripsi }}</textarea>
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
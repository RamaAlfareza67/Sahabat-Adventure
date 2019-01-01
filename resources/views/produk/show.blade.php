@extends('layouts.app')

@section('deskripsi')
<h4>{{ $produk->nama }}</h4>
<p>{{ $produk->deskripsi }}</p>
<a href="{{ route('produk.index') }}" class="btn btn-default">Kembali</a>
@endsection
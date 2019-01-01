@extends('layouts.app')

@section('deskripsi')
    <a href="{{ route('produk.create') }}" class="btn btn-info btn-sm">produk baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama produk</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{ $produk->id }}</td>
                    <td><a href="{{ route('produk.show', $produk->id) }}">{{ $produk->nama }}</a></td>
                    <td>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
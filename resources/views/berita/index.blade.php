@extends('layouts.app')

@section('content')
<table class="table table-bordered" id="berita-table">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Kategori</th>
            <th>Waktu</th>
        </tr>
    </thead>
    <tbody>
        @foreach($berita as $b)
        <tr>
            <td>{{ $b->judul }}</td>
            <td>{{ Str::limit($b->isi, 50) }}</td>
            <td>{{ $b->kategori }}</td>
            <td>{{ $b->created_at->format('d M Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

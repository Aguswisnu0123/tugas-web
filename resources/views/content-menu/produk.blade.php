@extends('index')

@section('content')
<table class="table" style="padding: 10px">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Jumlah</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->jumlah }}</td>
            <td><a href="{{ route('hapus', $item->id) }}" class="btn btn-danger btn-flat btn-sm">Delete</a></td>
          </tr> 
        @endforeach
    </tbody>
  </table>
@endsection

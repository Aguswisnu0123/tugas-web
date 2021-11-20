@extends('index')

@section('content')
<div class="bagian-tambah" style="padding-left: 40px;">
    <form action="{{ route('produk.create') }}" method="post">
        @csrf
      <button class="btn btn-flat btn-primary">Tambah</button>
    </form>
  </div>
        <div class="bagian-table" style="padding: 40px;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Email</th>
                  <th scope="col">Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone</th>
                </tr>
              </thead>
                <tbody>
                  @foreach ($items as $item)
                  <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->description }}</td>
                          <td>
                            <div class="action d-flex">
                              <form action="{{ route('customer.edit', $product->id) }}" method="post" class="mr-2">
                                @method('put')
                                @csrf
                                  <button class="btn btn-flat btn-warning">Edit</button>
                              </form>
    
                              <form action="{{ route('customer.delete', $product->id) }}" method="post">
                                @method('delete')
                                @csrf
                                  <button class="btn btn-flat btn-danger" onclick="return confirm('Delete data?')">Hapus</button>
                              </form>
                            </div>
                          </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
</div>
@endsection
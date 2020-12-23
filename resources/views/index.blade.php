@extends('templates.templates')

@section('content')
<div class="container">
  <h1>Membuat web CRUD sederhana menggunakan Laravel</h1>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3>Data Produk</h3>
          <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Quantity</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $i=1;
              @endphp
              @foreach ($produks as $produk)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $produk->nama_produk }}</td>
                  <td>{{ $produk->keterangan }}</td>
                  <td>{{ $produk->harga }}</td>
                  <td>{{ $produk->qty }}</td>
                  <td class="text-center">
                    <form action="{{ route('produk.destroy',$produk->id) }}" method="POST">
                      <a class="btn btn-primary btn-custom" href="{{ route('produk.edit',$produk->id) }}">Edit</a>

                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-danger btn-custom" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
          </table>
          {{-- {{ $produks->links('vendor.pagination.bootstrap-4') }} --}}
        </div>
      </div>
    </div>
  </div>

  <form action="" method="post" id="formDelete">
    @csrf

    @method('DELETE')
    <input type="submit" value="delete" style="display: none;">
  </form>

</div>
@endsection
@extends('templates.templates')

@section('content')
    <div class="container">
      <div class="card mt-4">
        <div class="card-header">
          <h3>Tambah Produk</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('produk.store') }}" method="POST">
            @csrf
  
            <div class="form-group @error('nama_produk') has-eror @enderror">
              <label for="nama">Nama</label>
              <input class="form-control" type="text" name="nama_produk" id="" placeholder="Masukkan nama produk" value="{{ old('nama_produk') }}">
              @error('nama_produk')
                <span style="color: red;">{{$message}}</span>
              @enderror
            </div>
            
            <div class="form-group @error('keterangan') has-eror @enderror">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" type="text" name="keterangan" id="" rows="3" placeholder="Masukkan keterangan produk">{{ $produks->keterangan ?? old('keterangan') }}</textarea>
              @error('keterangan')
                <span style="color: red;">{{$message}}</span>
              @enderror
            </div>

            <div class="form-group @error('harga') has-eror @enderror">
              <label for="harga">Harga</label>
              <input class="form-control" type="text" name="harga" id="" placeholder="Masukkan harga" {{ old('harga') }}>
              @error('harga')
                <span style="color: red;">{{$message}}</span>
              @enderror
            </div>

            <div class="form-group @error('qty') has-eror @enderror">
              <label for="qty">Quantity</label>
              <input class="form-control" type="number" name="qty" id="" placeholder="Masukkan kuantitas produk" {{ old('qty') }}>
              @error('qty')
                <span style="color: red;">{{$message}}</span>
              @enderror
            </div>

            <div class="form-group">
              <input type="submit" value="Tambah Produk" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
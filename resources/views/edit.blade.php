@extends('templates.templates')

@section('content')
    <div class="container">
      <div class="card mt-4">
        <div class="card-header">
          <h3>Edit Produk</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('produk.update', $produks) }}" method="POST">
            @csrf
            
            @method('PUT')
            <div class="form-group  @error('nama_produk') has-eror @enderror">
              <label for="nama">Nama</label>
              <input class="form-control" type="text" name="nama_produk" id="" placeholder="Masukkan nama produk" value="{{ $produks->nama_produk ?? old('nama_produk') }}">
              @error('nama_produk')
                <span style="color: red;">{{$message}}</span>
              @enderror
            </div>
            
            <div class="form-group @error('keterangan') has-eror @enderror">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" type="text" name="keterangan" id="" rows="3">{{ $produks->keterangan ?? old('keterangan') }}</textarea>
              @error('keterangan')
                <span style="color: red;">{{$message}}</span>
              @enderror
            </div>

            <div class="form-group @error('harga') has-eror @enderror">
              <label for="harga">Harga</label>
              <input class="form-control" type="text" name="harga" id="" placeholder="Masukkan harga" value="{{ $produks->harga ?? old('harga') }}">
              @error('harga')
                <span style="color: red;">{{$message}}</span>
              @enderror
            </div>

            <div class="form-group @error('qty') has-eror @enderror">
              <label for="qty">Quantity</label>
              <input class="form-control" type="number" name="qty" id="" placeholder="Masukkan kuantitas produk" value="{{ $produks->qty ?? old('qty') }}">
              @error('qty')
                <span style="color: red;">{{$message}}</span>
              @enderror
            </div>

            <div class="form-group">
              <input type="submit" value="Edit Produk" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
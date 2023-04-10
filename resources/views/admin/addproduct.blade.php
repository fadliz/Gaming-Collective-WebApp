@extends('/admin/sidenav')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add Product</h1>
</div>
<form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Nama Product</label>
    <div class="input-group mb-3 mt-2">
      <input type="text" name="name" class="form-control" placeholder="Product name" aria-label="Product name" aria-describedby="basic-addon1">
    </div>
    <label for="price">Harga Product</label>
    <div class="input-group mb-3 mt-2">
      <span class="input-group-text">Rp</span>
      <input type="text" name="price" class="form-control">
    </div>
    <label for="kategori">Pilih Category</label>
    <div class="input-group mb-3 mt-2">
      <label class="input-group-text" for="kategori">Category</label>
      <select class="form-select" name="kategori" id="kategori">
        <option selected>Choose...</option>
        @foreach ($kategori as $item)
        <option value="{{$item->id}}">{{$item->nama}}</option>
        @endforeach
      </select>
    </div>
    <label for="description">Deskripsi Produk</label>
    <textarea class="form-control my-3" name="description" id="description" rows="3" placeholder="Write the text here..."></textarea>
    <label for="image">Tambah Gambar</label>
    <input name="image" id="image" class="form-control" type="file" id="formFileMultiple" multiple />
    <button type="submit" href="" class="btn btn-primary btn-md mt-5"> Add Product</button>
    <a href="{{ url('/items') }}" class="btn btn-outline-danger btn-md mt-5"> Cancel</a>
  </div>
</form>
  @endsection
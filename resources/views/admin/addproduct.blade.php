@extends('/admin/sidenav')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Product</h1>
</div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Nama Product</label>
    <div class="input-group mb-3 mt-2">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <label for="exampleFormControlTextarea1">Harga Product</label>
    <div class="input-group mb-3 mt-2">
        <span class="input-group-text">Rp</span>
        <input type="text" class="form-control">
      </div>
    <label for="exampleFormControlTextarea1">Pilih Category</label>
    <div class="input-group mb-3 mt-2">
        <label class="input-group-text" for="inputGroupSelect01">Category</label>
        <select class="form-select" id="inputGroupSelect01">
          <option selected>Choose...</option>
          <option value="1">Video games</option>
          <option value="2">Gaming gear</option>
          <option value="3">Accessories</option>
        </select>
      </div>
      <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
    <textarea class="form-control my-3" id="exampleFormControlTextarea1" rows="3" placeholder="Write the text here..."></textarea>
    <label for="exampleFormControlTextarea1">Tambah Gambar</label>
    <input class="form-control" type="file" id="formFileMultiple" multiple />
    <a href="" class="btn btn-primary btn-md mt-5"> Add Product</a>
    <a href="" class="btn btn-outline-danger btn-md mt-5"> Cancel</a>
  </div>
@endsection
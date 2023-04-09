@extends('/admin/sidenav')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Category</h1>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Tambah Category</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Category Name</span>
                <input type="text" class="form-control" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1">
              </div>
        </div>
    </div>
    <a href="" class="btn btn-primary btn-md mt-3"> Edit Product</a>
    <a href="" class="btn btn-outline-danger btn-md mt-3"> Cancel</a>
@endsection
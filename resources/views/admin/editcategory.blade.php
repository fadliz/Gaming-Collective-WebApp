@extends('/admin/sidenav')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Category</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('category.update', $kateg) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="CategoryName">Tambah Category</label>
                <div class="input-group mb-3 mt-2">
                    
                    <span class="input-group-text" id="basic-addon1">Category Name</span>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $kateg->nama) }}"
                        aria-label="Category name" aria-describedby="basic-addon1">
                </div>
            </div>
                <button type="submit" href="" class="btn btn-primary btn-md mt-5"> Edit Product</button>
        </form>
    </div>
    <a href="/AdminCategory" class="btn btn-outline-danger btn-md mt-3"> Cancel</a>
@endsection

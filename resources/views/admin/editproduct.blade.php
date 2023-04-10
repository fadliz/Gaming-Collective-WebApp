@extends('/admin/sidenav')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Product</h1>
    </div>
    <form action="{{ route('items.update', $item) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Nama Product</label>
            <div class="input-group mb-3 mt-2">
                <input type="text" name="name" class="form-control" value="{{ old('name', $item->name) }}"
                    aria-label="Product name" aria-describedby="basic-addon1">
            </div>
            <label for="price">Harga Product</label>
            <div class="input-group mb-3 mt-2">
                <span class="input-group-text">Rp</span>
                <input type="text" name="price" class="form-control" value="{{ old('price', $item->price) }}">
            </div>
            <label for="kategori">Pilih Category</label>
            <div class="input-group mb-3 mt-2">
                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected value="{{ $item->Category->id }}">{{ $item->Category->nama }}</option>
                    @foreach ($kategori as $kateg)
                        <option value="{{ $kateg->id }}">{{ $kateg->nama }}</option>
                    @endforeach
                </select>
            </div>
            <label for="description">Deskripsi Produk</label>
            <textarea class="form-control my-3" name="description" id="description" rows="3">{{ old('description', $item->description) }}</textarea>
            <label for="image">Tambah Gambar</label>
            <input name="image" id="image" class="form-control" type="file" id="formFileMultiple" multiple />
            <button type="submit" href="" class="btn btn-primary btn-md mt-5"> Edit Product</button>
    </form>
    <a href="{{ url('/items') }}" class="btn btn-outline-danger btn-md mt-5"> Cancel</a>
    </div>
@endsection

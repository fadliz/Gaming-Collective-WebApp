@extends('/admin/sidenav')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product</h1>
    </div>
    <a href="/AdminAddProduct" class="btn btn-primary btn-lg "><span data-feather="plus-circle" class="align-text-middle"></span> Add Product</a>
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Image Product</th>
              <th scope="col">Nama Product</th>
              <th scope="col">Category Product</th>
              <th scope="col">Harga Product</th>
              <th scope="col">Deskripsi Product</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
                
            <tr>
              <td>{{$loop->iteration}}</td>
              <td><img src="{{$item->image}}" height="100" alt=""></td>
              <td>{{$item->name}}</td>
              <td>{{$item->Category->nama}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->description}}</td>
              <td>
                <a href="{{ route('items.show', $item->id) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="{{ route('items.edit', $item->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="badge bg-danger" onclick="return confirm('Are you sure you want to delete this item?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>
            
            @endforeach
          </tbody>
        </table>
      </div>
@endsection
@extends('/admin/sidenav')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="addCategory">Tambah Category</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Category Name</span>
                    <input type="text" class="form-control" placeholder="Category" aria-label="Category"
                        aria-describedby="basic-addon1" name="category_name">
                </div>
            </div>
            <input type="submit" value="Add Category" class="mb-5">
            <a href="/Category" class="badge bg-info"><span data-feather="eye"></span></a>
        </form>
    </div>

    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategs as $kateg)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kateg->nama }}</td>
                        <td>
                            <a href="/AdminEditCategory/{{ $kateg->id }}" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

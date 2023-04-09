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
            <tr>
              <td>1</td>
              <td><img src="/image/gf image/fahri_GF_3.jpg" height="100" alt=""></td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>namaku bento</td>
              <td>
                <a href="" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/AdminEditProduct" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td><img src="/image/gf image/fahri_GF_2.jpg" height="100" alt=""></td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>namaku bento</td>
              <td>
                <a href="" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/AdminEditProduct" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/category.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
    <title>Gative - Game Collective</title>
</head>

<body>
    @extends('Sidebar')
    @section('content')
        <div class="back ps-5 pt-5">
            <a href="{{ url()->previous() }}"><span><i class='bx bx-chevron-left'></i></span>Back</a>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="mx-auto p-5">
                    <div class="card">
                        <div class="card-header">
                            <form action="/Category" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border-0">Category:</span>
                                            </div>
                                            <select class="form-control border-0 " id="kateg" name="kateg">

                                                <option selected value="{{ $temp->nama }}">{{ $temp->nama }}</option>
                                                @foreach ($kategori as $item)
                                                    @if ($temp->nama != $item->nama)
                                                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text border-0">Show:</span>
                                            </div>
                                            <select class="form-control border-0" id="" name="">
                                                <option value="">10</option>
                                                <option value="">20</option>
                                                <option value="">50</option>
                                                <option value="">70</option>
                                                <option value="">100</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- button buat submit category dan jumlah item -->
                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button type="submit" class="btn input-group-prepend" style="background-color: #4d4d4d;">Submit Order</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="hs__wrapper">
                                    <ul class="hs">
                                        @foreach ($produk as $item)
                                            <li class="hs__item">
                                                <div class="hs__item__image__wrapper">
                                                    <img class="hs__item__image" src="storage/{{ $item->image }}"
                                                        alt="" />
                                                </div>
                                                <div class="hs__item__description">
                                                    <span class="hs__item__title">{{ $item->name }}</span>
                                                    <span class="hs__item__subtitle">Rp
                                                        {{ number_format($item->price, 2, ',', '.') }}</span>
                                                </div>
                                                @if (auth()->check())
                                                    <form action="/Cart/{{ $item->id }}" method="get">
                                                        <input type="hidden" name="userid" id="userid"
                                                            value="{{ auth()->user()->id }}">
                                                        <button type="submit" class="button button5">add to cart</button>
                                                    </form>
                                                @else
                                                    <p>Please log in to add items to your cart.</p>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="pagination m-0">
                                            <li class="page-item disabled border-0">
                                                <a class="page-link border-0"
                                                    style="background-color: #1a1a1a !important; color: #fffdfd !important;"
                                                    href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link border-0" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link border-0" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link border-0" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link border-0" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-right mb-0 mt-1">Showing 1 to {{ count($produk) }} of
                                            {{ count($produk) }} (1 Pages)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endsection
        <script src="/category.js"></script>

</body>

</html>

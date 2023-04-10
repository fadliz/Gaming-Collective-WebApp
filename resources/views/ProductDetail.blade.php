<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="/ProductDetail.css" rel="stylesheet" />
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
        <a href="#"><span><i class='bx bx-chevron-left'></i></span>Back</a>
    </div>
    <div class="container sproduct ps-5 pt-0">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-2" src="/storage/{{$item->image}}" id="MainImg" alt="" />
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h3 style='font-weight : 700;'>
                    {{ $item->name }}
                </h3>
                <hr />
                <div class="time-and-bid pb-1">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Category : <a href="#">{{ $item->category->nama }}</a></span>
                </div>
    
                <hr />
                <h5>Deskripsi Produk</h5>
                <span class="deskripsi-produk">
                    {{ $item->description }}
                </span>
                <hr />
                <h3 class="detail-item-harga pb-5">Rp. {{ number_format($item->price, 2) }}</h3>
                <div class="box-button d-flex  align-items-center">
                    <form action="/addCart/{{$item->id}}" method="get">
                        <input type="hidden" name="userid" id="userid" value="{{auth()->user()->id}}">
                        <a href="/addCart/{{$item->id}}"><button class="button button5">add to cart</button></a>
                    </form>
                    <a href="#" class="bn3638 bn38 mx-2"><i class='bx bxs-heart bx-tada px-1'></i>Wishlist</a>
                </div>
            </div>
        </div>
        


    <hr style='visibility: hidden;'>
    <div class="container py-5">
        <div class="hs__wrapper">
            <div class="hs__header">
                <h2 class="hs__headline">Barang lainnya
                </h2>
                <div class="hs__arrows">
                    <a class="arrow disabled arrow-prev"></a>
                    <a class="arrow arrow-next"></a>
                </div>
            </div>
            <ul class="hs">
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_1.jpg" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">Add to Cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_2.jpg" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">Add to Cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_3.jpg" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">Add to Cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_4.webp" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">Add to Cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_5.webp" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">Add to Cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_6.webp" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">Add to Cart</button>
                </li>
            </ul>
        </div>
        <script src="/ProductDetail.js" charset="utf-8"></script>
    @endsection

</body>

</html>
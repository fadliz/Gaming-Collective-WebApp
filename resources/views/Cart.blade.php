<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/cart.css" rel="stylesheet" />
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
        @if(Auth::check())
            <div class="back ps-5 pt-5">
                <a href="#"><span><i class='bx bx-chevron-left'></i></span>Back</a>
            </div>
            @php
                $totalPrice = 0;
            @endphp
            <div class="cart-container p-5">
                <h3 style='font-weight : 700;'>Shopping Cart</h3>
                @foreach ($carts as $item)
                    @if($item->User_id == Auth::user()->id)
                        @php
                            $totalPrice += $item->item->price;
                        @endphp
                        <div class="product-card mt-5">
                            <div class="img-product">
                                <img src="storage/{{ $item->item->image }}" alt="">
                            </div>
                            <div class="product-detail ps-3 pt-2 pb-2">
                                <div class="product-name pb-1 " style='font-weight : 500;'>
                                    {{ $item->item->name }}
                                </div>
                                <p>Rp {{ number_format($item->item->price, 2, ',', '.') }}</p>
                                <div class="wishlist-btn">
                                    <a href="/Wishlist">Pindahkan ke wishlist</a>
                                    <span class="batas">|</span>
                                    <form action="{{ route('carts.destroy', $item) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this item?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Hapus barang</button>
                                    </form>
                                </div>
                                <div class="qty">
                                    <div class="counter">
                                        <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                        <input type="text" value="1">
                                        <span class="up" onClick='increaseCount(event, this)'>+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="chechout py-5">
                    <label style='font-size : 20px; font-weight : 500;'>Total Harga : </label>
                    <span>Rp {{ number_format($totalPrice, 2, ',', '.') }}</span>
                </div>
                <div class="box-button">
                    <a href="/Checkout" class="bn3637 bn37">Checkout</a>
                </div>
                <script src="/cart.js" charset="utf-8"></script>
            </div>
        @else
            <p>Please login to view your cart.</p>
        @endif
    @endsection
</body>


</html>

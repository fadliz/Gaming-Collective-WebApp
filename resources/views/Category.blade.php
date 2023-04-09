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
            <a href="#"><span><i class='bx bx-chevron-left'></i></span>Back</a>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="mx-auto p-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0">Category:</span>
                                        </div>
                                        <select class="form-control border-0" id="" name="">
                                            <option value="">Android</option>
                                            <option value="">Camera (A - Z)</option>
                                            <option value="">PC (A - Z)</option>
                                            <option value="">Controller (A - Z)</option>
                                            <option value="">Keyboard (A - Z)</option>
                                            <option value="">Mice (A - Z)</option>
                                            <option value="">Headset (A - Z)</option>
                                            <option value="">Chair (A - Z)</option>
                                            <option value="">PlayStation (Z - A)</option>
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
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="hs__wrapper">

                                    <ul class="hs">
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_1.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_2.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_3.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_4.webp"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_5.webp"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_6.webp"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                    </ul>
                                    <ul class="hs">
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_1.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_2.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_3.jpg"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_4.webp"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_5.webp"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                        <li class="hs__item">
                                            <div class="hs__item__image__wrapper">
                                                <img class="hs__item__image" src="/image/gf image/fahri_GF_6.webp"
                                                    alt="" />
                                            </div>
                                            <div class="hs__item__description">
                                                <span class="hs__item__title">fahri gf</span><span
                                                    class="hs__item__subtitle">hihi</span>
                                            </div>
                                            <button class="button button5">add to cart</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="pagination m-0">
                                            <li class="page-item disabled border-0">
                                                <a class="page-link border-0"
                                                    style="background-color: #1a1a1a !important;
                                        color: #fffdfd !important;"
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
                                        <p class="text-right mb-0 mt-1">Showing 1 to 12 of 12 (1 Pages)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
            </div>

            <script src="/category.js" charset="utf-8"></script>
        @endsection

</body>

</html>

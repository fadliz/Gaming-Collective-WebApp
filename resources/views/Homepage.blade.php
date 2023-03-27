<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/Homepage.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
    <title>Gative - Game Collective</title>
</head>

<body>
    @extends('Sidebar') @section('content')
    <div class="search-container p-5">
        <input type="text" placeholder="Search..." />
        <button type="submit">
                <i class='bx bx-search'></i>
            </button>
    </div>
    <div class="profile p-5">
        <span>Welcome, Jinx !</span>
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/image/gf image/fahri_GF_2.jpg" alt="" width="36" height="36" class="rounded-circle me-2" />
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li>
                <a class="dropdown-item" href="#">Message</a>
            </li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators ">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner px-5" role="listbox" style=" width:100%; height: 275px; !important;">
            <div class="carousel-item active">
                <img src="/image/Banner 1.jpg" class="d-flex w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/Banner 2.png" class="d-flex w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/image/Banner 3.jpg" class="d-flex w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>

    <div class="container">
        <div class="hs__wrapper">
            <div class="hs__header">
                <h2 class="hs__headline">List
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
                    <button class="button button5">add to cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_2.jpg" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">add to cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_3.jpg" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">add to cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_4.webp" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">add to cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_5.webp" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">add to cart</button>
                </li>
                <li class="hs__item">
                    <div class="hs__item__image__wrapper">
                        <img class="hs__item__image" src="/image/gf image/fahri_GF_6.webp" alt="" />
                    </div>
                    <div class="hs__item__description">
                        <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                    </div>
                    <button class="button button5">add to cart</button>
                </li>
            </ul>
        </div>
        <hr>
        
        <div class="container">
            <div class="hs__wrapper">
                <div class="hs__header">
                    <h2 class="hs__headline">List
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
                        <button class="button button5">add to cart</button>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="/image/gf image/fahri_GF_2.jpg" alt="" />
                        </div>
                        <div class="hs__item__description">
                            <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                        </div>
                        <button class="button button5">add to cart</button>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="/image/gf image/fahri_GF_3.jpg" alt="" />
                        </div>
                        <div class="hs__item__description">
                            <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                        </div>
                        <button class="button button5">add to cart</button>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="/image/gf image/fahri_GF_4.webp" alt="" />
                        </div>
                        <div class="hs__item__description">
                            <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                        </div>
                        <button class="button button5">add to cart</button>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="/image/gf image/fahri_GF_5.webp" alt="" />
                        </div>
                        <div class="hs__item__description">
                            <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                        </div>
                        <button class="button button5">add to cart</button>
                    </li>
                    <li class="hs__item">
                        <div class="hs__item__image__wrapper">
                            <img class="hs__item__image" src="/image/gf image/fahri_GF_6.webp" alt="" />
                        </div>
                        <div class="hs__item__description">
                            <span class="hs__item__title">fahri gf</span><span class="hs__item__subtitle">hihi</span>
                        </div>
                        <button class="button button5">add to cart</button>
                    </li>
                </ul>
            </div>


        <script src="/homepage.js"></script>
        @endsection

</body>

</html>
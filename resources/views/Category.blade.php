<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/category.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
    <title>Gative - Game Collective</title>
</head>

<body>
    @extends('Sidebar') 
    @section('content')
    <div class="back ps-5 pt-5">
        <a href="#"><span><i class='bx bx-chevron-left' ></i></span>Back</a>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Desktops (13)</a>
                        <a href="#" class="list-group-item list-group-item-action active">Laptops &amp; Notebooks (5)</a>
                        <a href="#" class="list-group-item list-group-item-action">&nbsp;&nbsp;&nbsp;- Macs (0)</a>
                        <a href="#" class="list-group-item list-group-item-action">&nbsp;&nbsp;&nbsp;- Windows (0)</a>
                        <a href="#" class="list-group-item list-group-item-action">Components (2)</a>
                        <a href="#" class="list-group-item list-group-item-action">Tablets (1)</a>
                        <a href="#" class="list-group-item list-group-item-action">Software (0)</a>
                        <a href="#" class="list-group-item list-group-item-action">Phones &amp; PDAs (3)</a>
                        <a href="#" class="list-group-item list-group-item-action">Cameras (2)</a>
                        <a href="#" class="list-group-item list-group-item-action">MP3 Players (4)</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Filter</div>
                    <div class="card-body p-1">
                        <div class="card border-0 b-3">
                            <div class="card-header p-2" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false">
                                <p class="m-0 h6">Brand</p>
                            </div>
                            <div class="card-body p-0 collapse show" id="collapseExample1">
                                <ul class="list-group list-group-flush" style="height:200px;overflow:auto;">
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Google</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Microsoft</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Apple</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Samsung</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Amazon</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Asus</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">LG</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Sony</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">MSI</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">HP</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item p-2 d-flex justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Compact</label>
                                        </div>
                                        <span class="badge badge-secondary badge-pill">14</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card border-0 b-3">
                            <div class="card-header p-2" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false">
                                <p class="m-0 h6">Price</p>
                            </div>
                            <div class="card-body p collapse show" id="collapseExample4">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="form-group text-right col-md-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-block btn-primary">Filter</button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Sort By:</span>
                                    </div>
                                    <select class="form-control" id="" name="">
                                        <option value="">Default</option>
                                        <option value="">Name (A - Z)</option>
                                        <option value="">Name (Z - A)</option>
                                        <option value="">Price (Low &gt; High)</option>
                                        <option value="">Price (High &gt; Low)</option>
                                        <option value="">Rating (Highest)</option>
                                        <option value="">Rating (Lowest)</option>
                                        <option value="">Model (A - Z)</option>
                                        <option value="">Model (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Show:</span>
                                    </div>
                                    <select class="form-control" id="" name="">
                                        <option value="">15</option>
                                        <option value="">25</option>
                                        <option value="">50</option>
                                        <option value="">75</option>
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
        </div>
                    <div class="card-footer p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="pagination m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" style="background-color: #1a1a1a !important;
                                        color: #fffdfd !important;" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
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
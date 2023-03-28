<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/ProductDetail.css" rel="stylesheet" />
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
    <div class="container sproduct ps-5 pt-0">
        <div class="row mt-5">
          <div class="col-lg-5 col-md-12 col-12">
            <img
              class="img-fluid w-100 pb-2"
              src="/image/gf image/fahri_GF_2.jpg"
              id="MainImg"
              alt=""
            />
            <div class="small-img-group">
              <div class="small-img-col">
                <img
                  src="/image/gf image/fahri_GF_4.webp"
                  width="100%"
                  class="small-img"
                  alt=""
                />
              </div>
              <div class="small-img-col">
                <img
                  src="/image/gf image/fahri_GF_1.jpg"
                  width="100%"
                  class="small-img"
                  alt=""
                />
              </div>
              <div class="small-img-col">
                <img
                  src="/image/gf image/fahri_GF_4.webp"
                  width="100%"
                  class="small-img"
                  alt=""
                />
              </div>
              <div class="small-img-col">
                <img
                  src="/image/gf image/fahri_GF_4.webp"
                  width="100%"
                  class="small-img"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12">
            <h3 style='font-weight : 700;'>
              Headset Cantik
            </h3>
            <hr />
            <div class="time-and-bid pb-1">
                <i class="bx bx-grid-alt"></i>
                <span class="link_name">Category : <a href="#">Headset</a></span>
            </div>
            
  
            <hr />
            <h5>Deskripsi Produk</h5>
            <span class="deskripsi-produk">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </span>
            <hr />
            <h3 class="detail-item-harga pb-5">Rp. 3.000.000,00</h3>
            <div class="box-button">
              <a href="#" class="bn3637 bn37">Add to Cart</a>
              
            </div>
          </div>
        </div>
      </div>
      <script src="/ProductDetail.js" charset="utf-8"></script>
      
    @endsection

</body>

</html>
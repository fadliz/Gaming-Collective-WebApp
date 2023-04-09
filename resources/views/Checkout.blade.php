<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/cart.css" rel="stylesheet" />
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
        <div class="container bg-default p-5">
            <h4 class="my-4">
              Alamat Pengiriman
            </h4>
            <form>
              <div class="form-row">
                <label for="adress">Alamat</label>
                <input
                  type="text"
                  class="form-control"
                  id="adress"
                  placeholder="Contoh : Jl. Segar Hurip No.12"
                  required
                />
                <div class="invalid-feedback">
                  Tolong masukan alamat.
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 form-group">
                  <label for="city">Kota / Kabupaten</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Kota-name"
                    placeholder= "Contoh : Kota Bandung"
                    required
                  />
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-4 form-group">
                  <label for="city">Kecamatan</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Kecamatan-name"
                    placeholder="Contoh : Kecamatan Bojongsoang"
                    required
                  />
                  <div class="invalid-feedback">
                    Masukkan kota/kabupaten yang benar.
                  </div>
                </div>
                <div class="col-md-4 form-group">
                  <label for="postcode">Kode Pos</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Kodepos-name"
                    placeholder="Contoh : 40287"
                    required
                  />
                  <div class="invalid-feedback">
                    Masukkan kode pos.
                  </div>
                </div>
              </div>
              <hr />
              <h4 class="mb-4">Payment</h4>
              <div class="form-check">
                <input
                  type="radio"
                  class="form-check-input"
                  id="credit"
                  name="payment-method"
                  checked
                  required
                />
                <label for="credit" class="form-check-label">Credit Card</label>
              </div>
              <div class="form-check">
                <input
                  type="radio"
                  class="form-check-input"
                  id="debit"
                  name="payment-method"
                  required
                />
                <label for="debit" class="form-check-label">Debit Card</label>
              </div>
              <div class="form-check">
                <input
                  type="radio"
                  class="form-check-input"
                  id="paypal"
                  name="payment-method"
                  required
                />
                <label for="paypal" class="form-check-label">PayPal</label>
              </div>
              <div class="row mt-4">
                <div class="col-md-6 form-group">
                  <label for="card-name">Atas Nama Kartu</label>
                  <input
                    type="text"
                    class="form-control"
                    id="card-name"
                    placeholder
                    required
                  />
                  <div class="invalid-feedback">
                    Masukkan atas nama kartu.
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="card-no">Nomor Kartu</label>
                  <input
                    type="text"
                    class="form-control"
                    id="card-no"
                    placeholder
                    required
                  />
                  <div class="invalid-feedback">
                    Masukkan nomor kartu
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-5 form-group">
                  <label for="expiration">Expire Date</label>
                  <input
                    type="text"
                    class="form-control"
                    id="card-name"
                    placeholder
                    required
                  />
                  <div class="invalid-feedback">
                    Masukkan expire date
                  </div>
                </div>
                <div class="col-md-5 form-group">
                  <label for="ccv-no">Kode Keamanan</label>
                  <input
                    type="text"
                    class="form-control"
                    id="sec-no"
                    placeholder
                    required
                  />
                  <div class="invalid-feedback">
                    Masukkan kode keamanan.
                  </div>
                </div>
              </div>
              <hr class="mb-4" />
              <button class="btn btn-primary bt-lg btn-block" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Bayar
              </button>
            </form>
          </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0" style="color : #fffdfd !important;  background-color : #333333 !important; ">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Berhasil !</h1>
                        <button type="button" class="btn-close" style="background-color : #fffdfd;" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Transaksi berhasil</p>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="/HistoryPembelian"><button type="button" class="btn btn-primary">Liat history pembelian</button></a>
                    </div>
                </div>
            </div>
        </div>
    @endsection

</body>

</html>
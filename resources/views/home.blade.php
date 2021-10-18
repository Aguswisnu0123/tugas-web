<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- akhir bootstrap 4 -->

    <!-- google font -->
    <!-- poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <!-- akhir poppins -->
    <!-- akhir google font -->

    <!-- css sendiri -->
    <link rel="stylesheet" href="css/style1.css" />
    <!-- akhir css sendiri -->

    <title>VRentcar</title>
  </head>
  <body>
    <!-- nav atas -->
    <section class="bg-blue poppins-12 text-light">
      <div class="container py-2 pr-4">
        <div class="row">
          <div class="col-sm-12 text-lg-right text-sm-center">Tel/Wa: 085785793036 | hallo@vrentcar.com</div>
        </div>
      </div>
    </section>
    <!-- akhir nav atas -->

    <!-- navigasi -->
    <section id="navBar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
        <div class="container">
          <a class="navbar-brand poppins" href="#" style="font-size: 24px; font-weight: 550">VRentcar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav poppins">
              <li class="nav-item active">
                <a class="nav-link" href="#">Tentang Kami</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Armada Mobil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Booking Mobil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Kontak Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- akhir navigasi -->

    <!-- banner -->
    <section class="bg-lightblue pt-5 pb-1">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="text-light poppins pb-4" style="font-size: 48px; font-weight: 600">
              Rental Mobil <br />
              Surabaya
            </h1>
            <p class="poppins text-light">
              Rental mobil Surabaya murah akan lebih mudah jika memesannya secara online di Vrentcar. Kami menyediakan sewa mobil lepas kunci maupun dengan sopir. Tersedia rental mobil mewah dan mobil standar dengan durasi harian, mingguan
              hingga sewa mobil bulanan.
            </p>
          </div>
          <div class="col-sm-6">
            <img src="img/banner1.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- akhir banner -->

    <!-- <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card p-2">
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-5 col-sm-5">
                    <h3 style="line-height: 1.3px; letter-spacing: 0px; font-weight: 600; font-size: 32px" class="poppins mt-3 mb-4">Honda Brio</h3>
                    <img src="img/mobil2.png" alt="" / style="max-width: min-content;">
                  </div>

                  <div class="col-xs-7 col-sm-7">
                    <div class="card bg-blue poppins">
                      <div class="card-body text-light">Harga Sewa Mulai : Rp 600.000 / Perhari</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- armada mobil -->
    <section class="my-5 poppins">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <img src="img/mobil1.png" alt="" class="img-fluid" />
                </div>
                <div class="col-md-8">
                  <div class="card bg-blue poppins mt-3 mr-3 mb-0 ml-3">
                    <div class="card-body text-light poppins">Harga Sewa Mulai : Rp 600.000 / Perhari</div>
                  </div>
                  <h2 class="card-title mt-5 ml-3" style="line-height: 1px; font-weight: bold">Honda Brio</h2>
                  <p style="color: rgb(38, 90, 126)" class="ml-3">Automatic - Bensin - 4 Seat</p>
                  <h5 class="mb-0 font-weight-bold ml-3">Pilihan Warna</h5>
                  <p class="ml-3">Hitam - Putih</p>
                  <div class="row mb-3 mr-1 poppins ml-1">
                    <div class="col">
                      <!-- <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(222, 222, 223)">Detail Harga</button> -->
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Detail Harga</button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Harga</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h5 style="color: #002a42">Lepas Kunci</h5>
                              <p>-> Rp 500.000 / Perhari</p>
                              <h5 style="color: #002a42">Dengan Sopir</h5>
                              <p>-> Rp 600.000 / Perhari</p>
                              <hr />
                              <p>
                                Catatan : <br />
                                Harga Sudah Termasuk Full BBM, Pengembalian Unit Mobil Harus Kembali Dalam Keadaan BBM Penuh Kembali.
                              </p>
                              <hr />
                              <p class="font-weight-bold">Wajib Baca Syarat & Ketentuan Sewa</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              <button type="button" class="btn btn-primary">Baca S&K Sewa</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <!-- <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(255, 187, 0)">Sewa Sekarang</button> -->
                      <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(255, 187, 0)" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Sewa Sekarang</button>
                      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel1">Form Sewa Mobil</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label for="nama-customer" class="col-form-label">Nama Lengkap:</label>
                                  <input type="text" class="form-control" id="nama-customer" />
                                </div>
                                <div class="form-group">
                                  <label for="nomer" class="col-form-label">Nomer Telepon / Whatsapp:</label>
                                  <input type="text" class="form-control" id="nomer" />
                                </div>
                                <div class="form-group">
                                  <label for="tanggal-sewa" class="col-form-label">Tanggal Mulai Sewa:</label>
                                  <input type="date" class="form-control" id="tanggal-sewa" />
                                </div>
                                <div class="form-group">
                                  <label for="Pengembalian" class="col-form-label">Tanggal Pengembalian Mobil:</label>
                                  <input type="date" class="form-control" id="Pengembalian" />
                                </div>
                                <div class="form-group">
                                  <label for="tipe-sewa" class="col-form-label">Tipe Sewa</label>
                                  <select name="small_select" id="small_select" class="form-control form-control-sm mb-3">
                                    <option value="small_select">Lepas Kunci</option>
                                    <option value="small_select">Mobil + Driver</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="serah-terima" class="col-form-label">Alamat Serah Terima Mobil:</label>
                                  <textarea class="form-control" id="serah-terima" placeholder="Isi alamat lengkap serah terima mobil"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="catatan" class="col-form-label">Alamat Serah Terima Mobil:</label>
                                  <textarea
                                    class="form-control"
                                    id="catatan"
                                    placeholder="silahkan tambahkan catatan jika pilihan armada yang anda inginkan tidak ada.
                                  "
                                  ></textarea>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Kirim (Booking Mobil)</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5 poppins">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <img src="img/mobil1.png" alt="" class="img-fluid" />
                </div>
                <div class="col-md-8">
                  <div class="card bg-blue poppins mt-3 mr-3 mb-0 ml-3">
                    <div class="card-body text-light poppins">Harga Sewa Mulai : Rp 600.000 / Perhari</div>
                  </div>
                  <h2 class="card-title mt-5 ml-3" style="line-height: 1px; font-weight: bold">Honda Brio</h2>
                  <p style="color: rgb(38, 90, 126)" class="ml-3">Automatic - Bensin - 4 Seat</p>
                  <h5 class="mb-0 font-weight-bold ml-3">Pilihan Warna</h5>
                  <p class="ml-3">Hitam - Putih</p>
                  <div class="row mb-3 mr-1 poppins ml-1">
                    <div class="col">
                      <!-- <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(222, 222, 223)">Detail Harga</button> -->
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Detail Harga</button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Harga</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h5 style="color: #002a42">Lepas Kunci</h5>
                              <p>-> Rp 500.000 / Perhari</p>
                              <h5 style="color: #002a42">Dengan Sopir</h5>
                              <p>-> Rp 600.000 / Perhari</p>
                              <hr />
                              <p>
                                Catatan : <br />
                                Harga Sudah Termasuk Full BBM, Pengembalian Unit Mobil Harus Kembali Dalam Keadaan BBM Penuh Kembali.
                              </p>
                              <hr />
                              <p class="font-weight-bold">Wajib Baca Syarat & Ketentuan Sewa</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              <button type="button" class="btn btn-primary">Baca S&K Sewa</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <!-- <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(255, 187, 0)">Sewa Sekarang</button> -->
                      <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(255, 187, 0)" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Sewa Sekarang</button>
                      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel1">Form Sewa Mobil</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label for="nama-customer" class="col-form-label">Nama Lengkap:</label>
                                  <input type="text" class="form-control" id="nama-customer" />
                                </div>
                                <div class="form-group">
                                  <label for="nomer" class="col-form-label">Nomer Telepon / Whatsapp:</label>
                                  <input type="text" class="form-control" id="nomer" />
                                </div>
                                <div class="form-group">
                                  <label for="tanggal-sewa" class="col-form-label">Tanggal Mulai Sewa:</label>
                                  <input type="date" class="form-control" id="tanggal-sewa" />
                                </div>
                                <div class="form-group">
                                  <label for="Pengembalian" class="col-form-label">Tanggal Pengembalian Mobil:</label>
                                  <input type="date" class="form-control" id="Pengembalian" />
                                </div>
                                <div class="form-group">
                                  <label for="serah-terima" class="col-form-label">Alamat Serah Terima Mobil:</label>
                                  <textarea class="form-control" id="serah-terima" placeholder="Isi alamat lengkap serah terima mobil"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="catatan" class="col-form-label">Alamat Serah Terima Mobil:</label>
                                  <textarea
                                    class="form-control"
                                    id="catatan"
                                    placeholder="silahkan tambahkan catatan jika pilihan armada yang anda inginkan tidak ada.
                                  "
                                  ></textarea>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Kirim (Booking Mobil)</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="my-5 poppins">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <img src="img/mobil1.png" alt="" class="img-fluid" />
                </div>
                <div class="col-md-8">
                  <div class="card bg-blue poppins mt-3 mr-3 mb-0 ml-3">
                    <div class="card-body text-light poppins">Harga Sewa Mulai : Rp 600.000 / Perhari</div>
                  </div>
                  <h2 class="card-title mt-5 ml-3" style="line-height: 1px; font-weight: bold">Honda Brio</h2>
                  <p style="color: rgb(38, 90, 126)" class="ml-3">Automatic - Bensin - 4 Seat</p>
                  <h5 class="mb-0 font-weight-bold ml-3">Pilihan Warna</h5>
                  <p class="ml-3">Hitam - Putih</p>
                  <div class="row mb-3 mr-1 poppins ml-1">
                    <div class="col">
                      <!-- <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(222, 222, 223)">Detail Harga</button> -->
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Detail Harga</button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Harga</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h5 style="color: #002a42">Lepas Kunci</h5>
                              <p>-> Rp 500.000 / Perhari</p>
                              <h5 style="color: #002a42">Dengan Sopir</h5>
                              <p>-> Rp 600.000 / Perhari</p>
                              <hr />
                              <p>
                                Catatan : <br />
                                Harga Sudah Termasuk Full BBM, Pengembalian Unit Mobil Harus Kembali Dalam Keadaan BBM Penuh Kembali.
                              </p>
                              <hr />
                              <p class="font-weight-bold">Wajib Baca Syarat & Ketentuan Sewa</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                              <button type="button" class="btn btn-primary">Baca S&K Sewa</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <!-- <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(255, 187, 0)">Sewa Sekarang</button> -->
                      <button type="button" class="btn btn-lg btn-block" style="background-color: rgb(255, 187, 0)" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Sewa Sekarang</button>
                      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel1">Form Sewa Mobil</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="form-group">
                                  <label for="nama-customer" class="col-form-label">Nama Lengkap:</label>
                                  <input type="text" class="form-control" id="nama-customer" />
                                </div>
                                <div class="form-group">
                                  <label for="nomer" class="col-form-label">Nomer Telepon / Whatsapp:</label>
                                  <input type="text" class="form-control" id="nomer" />
                                </div>
                                <div class="form-group">
                                  <label for="tanggal-sewa" class="col-form-label">Tanggal Mulai Sewa:</label>
                                  <input type="date" class="form-control" id="tanggal-sewa" />
                                </div>
                                <div class="form-group">
                                  <label for="Pengembalian" class="col-form-label">Tanggal Pengembalian Mobil:</label>
                                  <input type="date" class="form-control" id="Pengembalian" />
                                </div>
                                <div class="form-group">
                                  <label for="serah-terima" class="col-form-label">Alamat Serah Terima Mobil:</label>
                                  <textarea class="form-control" id="serah-terima" placeholder="Isi alamat lengkap serah terima mobil"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="catatan" class="col-form-label">Alamat Serah Terima Mobil:</label>
                                  <textarea
                                    class="form-control"
                                    id="catatan"
                                    placeholder="silahkan tambahkan catatan jika pilihan armada yang anda inginkan tidak ada.
                                  "
                                  ></textarea>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Kirim (Booking Mobil)</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- akhir armada mobil (armada mobil nantinya dibuat dinamis dimana jumlah mobilnya bisa ditambah & dikurangi memalui dashboard admin) -->

    <section style="background: linear-gradient(100.94deg, #087dc2 -20.25%, rgba(8, 183, 194, 0) 109.56%)" class="my-5 poppins">
      <div class="container">
        <div class="row">
          <div class="col-10 mx-auto my-5">
            <div class="card">
              <div class="card-body">
                <h2>Ketentuan Umum</h2>
                <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> + </a> <span class="mx-2">S & K Sewa Lepas Kunci</span></p>
                <div class="collapse" id="collapseExample">
                  <div class="card card-body my-3">
                    <h3 class="mb-4">Syarat Untuk Perusahaan</h3>
                    <ul>
                      <li>Fotocopy: Akte Pendirian, SIUP, TDP, NPWP, HO, Domisili Perusahaan (menunjukkan aslinya).</li>
                      <li>Fotocopy: KTP pengguna dan KTP Direktur Perusahaan (menunjukkan aslinya).</li>
                      <li>Fotocopy : SIM A, Rekening Listrik, Rekening Telepon.</li>
                      <li>Uang jaminan Rp 4.000.000 atau barang yang setara.</li>
                    </ul>
                    <h3 class="mb-4 mt-4">Syarat Untuk Perorangan</h3>
                    <h5>1. Pelajar</h5>
                    <ul>
                      <li>3 KTP (Asli).</li>
                      <li>3 Kartu Pelajar (Asli).</li>
                      <li>3 SIM C (Asli).</li>
                      <li>KTP+Kartu Keluarga Orang Tua (Asli).</li>
                      <li>Motor + STNK Tahun 2010 keatas dan pajak masih berlaku.</li>
                      <li>Bersedia menunjukkan SIM A.</li>
                      <li>Bersedia untuk disurvei.</li>
                    </ul>
                    <h5>2. Mahasiswa</h5>
                    <ul>
                      <li>3 KTP (Asli).</li>
                      <li>3 KTM (Asli).</li>
                      <li>3 SIM C (Asli).</li>
                      <li>Motor + STNK Tahun 2010 keatas dan pajak masih berlaku.</li>
                      <li>Bersedia menunjukkan SIM A.</li>
                      <li>Bersedia untuk disurvei.</li>
                    </ul>
                    <h5>3. Belum Berkeluarga</h5>
                    <ul>
                      <li>3 KTP (Asli)</li>
                      <li>3 NPWP (Asli)</li>
                      <li>3 ID CARD tempat bekerja (Asli)</li>
                      <li>Uang Jaminan Rp 4.000.000 atau barang yang setara</li>
                      <li>Bersedia menunjukkan SIM A</li>
                    </ul>
                    <h5>4. Sudah Berkeluarga</h5>
                    <ul>
                      <li>KTP Suami dan Istri (Asli).</li>
                      <li>NPWP Suami atau Istri (Asli).</li>
                      <li>Kartu Keluarga/C1 (Asli).</li>
                      <li>Buku Nikah (Asli).</li>
                      <li>Deposit uang jaminan sebesar 4.000.000 atau barang berharga yang setara.</li>
                      <li>Bersedia menunjukkan SIM A.</li>
                    </ul>
                    <h6>5. Orang Asing (Foreigner)</h6>
                    <ul>
                      <li>2 National ID card</li>
                      <li>2 Passport</li>
                      <li>2 KITAP or KITAS Document</li>
                      <li>Copy of Driving Licenses</li>
                      <li>Guarantee Deposit (4.000.000 IDR)</li>
                    </ul>
                  </div>
                </div>
                <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample"> + </a> <span class="mx-2">Keterangan Tarif Sewa</span></p>
                <div class="collapse" id="collapseExample1">
                  <div class="card card-body">
                    <ul>
                      <li>Tambahan overtime dikenakan 10% dari biaya sewa mobil.</li>
                      <li>Belum termasuk parkir, tiket masuk, retribusi, makan sopir.</li>
                      <li>Tarif pemakaian dalam kota, pemakaian luar kota akan dikenakan biaya tambahan.</li>
                      <li>Harga sewa tidak berlaku untuk musim liburan, high season dan public holiday.</li>
                      <li>Tarif perday terhitung tarif flat yaitu batas penggunaan maksimal pukul 22.00 WIB.</li>
                      <li>Pilihan mobil sewa lepas kunci harus mengikuti syarat dan ketentuan dari kami, dan wajib mempunyai EKTP dan NPWP.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container poppins">
        <div class="row">
          <div class="col-md-6"><img src="img/konten1.png" alt="" / style="width: 500px;"></div>
          <div class="col-md-6">
            <p style="font-weight: 600; font-size: 48px; line-height: 48px; letter-spacing: 1%">Kenapa Memilih V-Rentcar ?</p>
            <p>
              Nikmati kemudahan rental mobil di berbagai kota lebih leluasa bersama VRentcar. Ada banyak pilihan sewa mobil murah dengan tipe terbaik dan sopir berpengalaman yang siap mengantarkan Anda ketujuan. Perjalanan bisnis, liburan,
              atau acara pernikahan serahkan semua urusan transportasi Anda kepada kami.
            </p>
            <ul>
              <li class="fas fa-check-circle">Armada / mobil terawat dengan baik</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <footer class="page-footer font-small blue-grey lighten-5">
      <div class="bg-blue">
        <div class="container">
          <!-- Grid row-->
          <div class="row py-4 d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
              <h6 class="mb-0">Get connected with us on social networks!</h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right">
              <!-- Facebook -->
              <a class="fb-ic">
                <i class="fab fa-facebook-f white-text mr-4"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter white-text mr-4"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fab fa-google-plus-g white-text mr-4"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class="fab fa-linkedin-in white-text mr-4"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram white-text"> </i>
              </a>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row-->
        </div>
      </div>
    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Icon fontawesome -->
    <script src="https://kit.fontawesome.com/152f4733ba.js" crossorigin="anonymous"></script>
    <!-- akhir fontawesome -->
  </body>
</html>

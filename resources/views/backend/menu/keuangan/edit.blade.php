@extends('backend.layouts.app')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Keuangan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Keuangan</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-8">
        <div class="card card-primary card-tabs">
          <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
              <li class="pt-2 px-3"><h3 class="card-title">App Tambak</h3></li>
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-two-pengeluaran-tab" data-toggle="pill" href="#custom-tabs-two-pengeluaran" role="tab" aria-controls="custom-tabs-two-pengeluaran" aria-selected="false">Pengeluaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-two-pemasukan-tab" data-toggle="pill" href="#custom-tabs-two-pemasukan" role="tab" aria-controls="custom-tabs-two-pemasukan" aria-selected="false">Pemasukan</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-two-tabContent">
              <div class="tab-pane fade active show" id="custom-tabs-two-pengeluaran" role="tabpanel" aria-labelledby="custom-tabs-two-pengeluaran-tab">
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="buku">Buku</label>
                      <input type="text" class="form-control" id="buku" placeholder="Nama Buku">
                    </div>
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control">
                        <option>Bagi Hasil</option>
                        <option>Bahan Bakar</option>
                        <option>Bahan Kimia</option>
                        <option>Benur</option>
                        <option>Biaya Tebar Benur</option>
                        <option>Biaya Transportasi</option>
                        <option>Gaji Karyawan</option>
                        <option>Gaji Management</option>
                        <option>Konstruksi</option>
                        <option>Konsumsi</option>
                        <option>Listrik</option>
                        <option>Maintenance</option>
                        <option>Pakan</option>
                        <option>Panen</option>
                        <option>Pengeluaran Lain-Lain</option>
                        <option>Peralatan</option>
                        <option>Persiapan Kolam</option>
                        <option>Piutang</option>
                        <option>Probiotik</option>
                        <option>Sampling</option>
                        <option>Sewa Lahan</option>
                        <option>Sosial</option>
                        <option>Sumber Daya Manusia</option>
                        <option>THR Karyawan</option>
                        <option>Tenaga Cuci Kolam </option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="invoice">Nomor Invoice</label>
                      <input type="text" class="form-control" id="invoice">
                    </div>
                    <div class="row">
                      <div class="col-sm-3"> 
                        <div class="form-group">
                          <label>Produk</label>
                          <select class="form-control">
                            <option>Produk1</option>
                            <option>Produk2</option>
                            <option>Produk3</option>
                            <option>Produk4</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="harga_satuan">Harga Per Satuan</label>
                          <input type="text" class="form-control" id="harga_satuan" placeholder="Rp.">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="qty">Qty</label>
                          <input type="text" class="form-control" id="qty" placeholder="0">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="total_item">Total Per Item</label>
                          <input type="text" class="form-control" id="total_item" placeholder="Rp." disabled>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="total">Total</label>
                      <input type="text" class="form-control" id="total" placeholder="Rp." disabled>
                    </div>
                    <br>
                    <hr>
                    <div class="form-group">
                      <label>Tanggal Jatuh Tempo (Opsional)</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6"> 
                        <div class="form-group">
                          <label for="pembayaaran">Pembayaran</label>
                          <input type="text" class="form-control" id="pembayaaran" placeholder="Rp.">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Isi Lunas</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Metode Pembayaran</label>
                          <select class="form-control">
                            <option>Transfer</option>
                            <option>Cash</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="sisa_hutang">Sisa Hutang</label>
                      <input type="text" class="form-control" id="sisa_hutang" placeholder="Rp." disabled>
                    </div>
                    <div class="form-group">
                      <label for="catatan">Catatan</label>
                      <input type="text" class="form-control" id="catatan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Nota</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer float-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="submit" class="btn btn-primary">Simpan dan Buat Baru</button>
                  </div>
                </form>  
              </div>
              <div class="tab-pane fade" id="custom-tabs-two-pemasukan" role="tabpanel" aria-labelledby="custom-tabs-two-pemasukan-tab">
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="buku">Buku</label>
                      <input type="text" class="form-control" id="buku" placeholder="Nama Buku">
                    </div>
                    <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control">
                        <option>Hutang</option>
                        <option>Modal</option>
                        <option>Pendapatan Lain</option>
                        <option>Penjualan Panen</option>
                        <option>Saldo Budidaya</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Tanggal</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6"> 
                        <div class="form-group">
                          <label for="nominal">Nominal</label>
                          <input type="text" class="form-control" id="nominal" placeholder="Rp.">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Metode Pembayaran</label>
                          <select class="form-control">
                            <option>Transfer</option>
                            <option>Cash</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="total">Total</label>
                      <input type="text" class="form-control" id="total" disabled>
                    </div>
                    <div class="form-group">
                      <label for="catatan">Catatan</label>
                      <input type="text" class="form-control" id="catatan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Nota</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer float-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="submit" class="btn btn-primary">Simpan dan Buat Baru</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end left column -->

      <!-- right column -->
      <div class="col-md-4">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Informasi</h3>
          </div>
          <!-- /.card-header -->
            <div class="card-body">
              <div class="form-group">
                <label>Dibuat</label>
                <input class="form-control" type="text" placeholder="----" disabled>
              </div>
              <div class="form-group">
                <label>Terakhir Diubah</label>
                <input class="form-control" type="text" placeholder="----" disabled>
              </div>
            </div>
            <!-- /.card-body -->
        </div>
      </div>
      <!-- end right column -->
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Papan Informasi -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Papan Informasi</h6>
            </div>
            <div class="card-body">
                <!-- Tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Semua Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk Saya</a>
                    </li>
                </ul>
                <!-- Add Product Button and Search -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahProdukModal">Tambah Produk</button>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Table -->
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Produk</th>
                                <th>Kode Produk</th>
                                <th>Kuantitas</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data produk, nanti bisa di-loop dengan data sebenarnya -->
                            <tr>
                                <td>1</td>
                                <td>Produk A</td>
                                <td>001</td>
                                <td>100</td>
                                <td>Rp 10.000</td>
                                <td>Rp 15.000</td>
                            </tr>
                            <!-- Tambahkan baris data lainnya di sini -->
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary">Prev</button>
                    <span>1/10</span>
                    <button class="btn btn-primary">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Modal Tambah Produk -->
    <div class="modal fade" id="tambahProdukModal" tabindex="-1" role="dialog" aria-labelledby="tambahProdukModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahProdukModalLabel">Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nama-produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama-produk">
                        </div>
                        <div class="form-group">
                            <label for="kode-produk">Kode Produk</label>
                            <input type="text" class="form-control" id="kode-produk">
                        </div>
                        <div class="form-group">
                            <label for="kuantitas">Kuantitas</label>
                            <input type="number" class="form-control" id="kuantitas">
                        </div>
                        <div class="form-group">
                            <label for="harga-beli">Harga Beli</label>
                            <input type="number" class="form-control" id="harga-beli">
                        </div>
                        <div class="form-group">
                            <label for="harga-jual">Harga Jual</label>
                            <input type="number" class="form-control" id="harga-jual">
                        </div>
                        <div class="form-group">
                            <label for="nama-pemilik">Nama Pemilik</label>
                            <input type="text" class="form-control" id="nama-pemilik">
                        </div>
                        <div class="form-group">
                            <label for="gambar-produk">Gambar Produk</label>
                            <input type="file" class="form-control-file" id="gambar-produk">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush

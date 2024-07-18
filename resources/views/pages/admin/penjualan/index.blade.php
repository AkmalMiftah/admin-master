@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Papan Informasi</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Penjualan / Admin</h6>
                <button class="btn btn-primary" data-toggle="modal" data-target="#addSaleModal">Tambah</button>
                <button class="btn btn-success">Download</button>
                <div class="float-right">
                    <input type="text" class="form-control" placeholder="Cari">
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Produk</th>
                                <th>Nama Pemilik</th>
                                <th>Kuantitas</th>
                                <th>Tgl Terjual</th>
                                <th>Marketplace</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data produk, nanti bisa di-loop dengan data sebenarnya -->
                            <tr>
                                <td>1</td>
                                <td>Produk A</td>
                                <td>Stanciu</td>
                                <td>100</td>
                                <td>23/07/2024</td>
                                <td>Lazada</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between">
            <button class="btn btn-secondary">Prev</button>
            <span>100/2032</span>
            <button class="btn btn-secondary">Next</button>
        </div>
    </div>
    <!-- /.container-fluid -->

    <!-- Modal -->
    <div class="modal fade" id="addSaleModal" tabindex="-1" role="dialog" aria-labelledby="addSaleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSaleModalLabel">Tambah Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="productName">Nama Produk</label>
                            <input type="text" class="form-control" id="productName">
                        </div>
                        <div class="form-group">
                            <label for="marketplace">Marketplace</label>
                            <input type="text" class="form-control" id="marketplace">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Kuantitas</label>
                            <input type="number" class="form-control" id="quantity">
                        </div>
                        <div class="form-group">
                            <label for="saleDate">Tanggal Terjual</label>
                            <input type="date" class="form-control" id="saleDate">
                        </div>
                        <div class="form-group">
                            <label for="ownerName">Nama Pemilik</label>
                            <input type="text" class="form-control" id="ownerName">
                        </div>
                        <button type="button" class="btn btn-primary">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
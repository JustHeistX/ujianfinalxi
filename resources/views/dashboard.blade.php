@extends('layouts.app')
  
@section('title', 'Dashboard - ADMIN INVENTARIS AIR MU')
  
@section('contents')
  <div class="row">
    <!-- Fitur yang Ditawarkan -->
    <div class="col-lg-6 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Fitur yang Ditawarkan</h6>
        </div>
        <div class="card-body">
          <ul>
            <li>Manajemen Inventaris yang Mudah</li>
            <li>Pelacakan Barang Secara Real-time</li>
            <li>Laporan dan Analisis Detail</li>
            <li>Notifikasi Stok Barang Menipis</li>
            <li>Pengelolaan Supplier dan Pelanggan</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Peringatan Update -->
    <div class="col-lg-6 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Peringatan Update</h6>
        </div>
        <div class="card-body">
          <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">Update Diperlukan!</h4>
            <p>Ada pembaruan terbaru untuk sistem inventaris. Pastikan untuk memperbarui ke versi terbaru untuk fitur dan keamanan yang lebih baik.</p>
            <hr>
            <a href="#" class="btn btn-primary">Update Sekarang</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Terakhir Input Barang -->
    <div class="col-lg-12 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Terakhir Input Barang</h6>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Oleh</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Barang A</td>
                <td>Kategori 1</td>
                <td>50</td>
                <td>Admin</td>
                <td>25-05-2024</td>
              </tr>
              <tr>
                <td>Barang B</td>
                <td>Kategori 2</td>
                <td>30</td>
                <td>Admin</td>
                <td>24-05-2024</td>
              </tr>
              <tr>
                <td>Barang C</td>
                <td>Kategori 3</td>
                <td>20</td>
                <td>Admin</td>
                <td>23-05-2024</td>
              </tr>
              <tr>
                <td>Barang D</td>
                <td>Kategori 1</td>
                <td>10</td>
                <td>Admin</td>
                <td>22-05-2024</td>
              </tr>
              <tr>
                <td>Barang E</td>
                <td>Kategori 2</td>
                <td>60</td>
                <td>Admin</td>
                <td>21-05-2024</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

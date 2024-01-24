@extends('layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Reservasi Hotel</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ }}" class="btn btn-primary btn=md" title="Reservasi">
                            + Reservasi
                        </a>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Transaksi</th>
                                        <th>IdPengunjung</th>
                                        <th>Jumlah Kamar</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Tanggal Keluar</th>
                                        <th>Lama Nginap</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>>
                        <tbody>
                            @foreach ($buku as $item)
                            <tr>
                                <td>{{}}
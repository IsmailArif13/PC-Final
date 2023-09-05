@extends('admin/app')

@section('main')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Dashboard</h1>
            <p></p>
        </div>

        <div class="row">

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-inbox icon-home bg-primary text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Total Produk</p>
                                <h5>{{$produk}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Total Pemesanan</p>
                                <h5>{{$order}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Total Artikel</p>
                                <h5>{{$artikel}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center">
                                <i class="fas fa-id-card  icon-home bg-warning text-light"></i>
                            </div>
                            <div class="col-8">
                                <p>Total User</p>
                                <h5>{{$user}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pemesanan Terbaru</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Tanggal Pemesanan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $item)
                                    <tr>
                                        <th scope="row">{{$item->nama}}</th>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->telepon}}</td>
                                        <td>
                                            @foreach($item->produk as $o)
                                            <span class="badge alert-info">
                                                {{$o->produk->name}}
                                            </span>
                                            @endforeach
                                        </td>
                                        <td>{{$item->created_at->format('Y-m-d')}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{route('order.destroy', $item->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mb-3">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

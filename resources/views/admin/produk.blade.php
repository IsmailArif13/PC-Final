@extends('admin/app')

@section('main')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Produk Jasa</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#tambahproduk">
                            Tambah
                        </button>

                        <div class="modal fade text-left" id="tambahproduk" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel1">Tambah Produk Jasa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('produk.store')}}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Nama Produk</label>
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($produk as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-secondary mb-3"
                                                    data-bs-toggle="modal" data-bs-target="#editproduk{{$item->id}}">
                                                    Edit
                                                </button>

                                                <div class="modal fade text-left" id="editproduk{{$item->id}}"
                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Produk Jasa</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('produk.update', $item->id)}}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('PATCH')
                                                                    <div class="mb-3">
                                                                        <label>Nama Produk</label>
                                                                        <input type="text" class="form-control"
                                                                            name="name" value="{{$item->name}}"
                                                                            required>
                                                                    </div>
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Submit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{route('produk.destroy', $item->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
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

@extends('admin/app')

@section('main')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Order</h1>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telepon</th>
                                        <th scope="col">Produk Jasa</th>
                                        <th scope="col">Tanggal Pemesanan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item->nama}}</td>
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
                                                <!-- <a href="{{route('sertif', $item->id)}}" class="btn btn-primary">Kirim Sertifikat</a> -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#sertif{{$item->id}}">
                                                    Kirim Sertifikat
                                                </button>

                                                <div class="modal fade text-left" id="sertif{{$item->id}}" tabindex="-1" role="dialog"
                                                    aria-labelledby="lsertif{{$item->id}}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="lsertif{{$item->id}}">Kirim Sertifikat</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{route('sertif', $item->id)}}" method="post">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    @foreach($item->produk as $o)
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="produk[]" id="inlineCheckbox{{$o->produk_id}}" value="{{$o->produk_id}}" checked>
                                                                        <label class="form-check-label" for="inlineCheckbox{{$o->produk_id}}">{{$o->produk->name}}</label>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Close</span>
                                                                    </button>
                                                                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                        <span class="d-none d-sm-block">Submit</span>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button onclick="return document.getElementById('del{{$item->id}}').submit();" class="btn btn-danger">Hapus</button>
                                                <form action="{{route('order.destroy', $item->id)}}" method="post" id="del{{$item->id}}">
                                                    @csrf
                                                    @method('DELETE')
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

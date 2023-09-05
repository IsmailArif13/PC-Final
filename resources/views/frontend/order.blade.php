@extends('frontend/app')

@section('content')
<div class="blog-page area-padding">
    <div class="container" style="margin-top: 4em">
        <h2 class="text-center">Pesan Jasa</h2>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="alert alert-info">
            Setelah pemesanan berhasil, cek email dari kami untuk informasi lebih lanjut.
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="{{route('order.store')}}" method="post" class="contactForm">
                            @csrf
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{ auth()->user()->name }}" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="text" name="telepon" class="form-control" required/>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                <label>Produk Jasa</label>
                                @foreach($produk as $item)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="produk[]" id="inlineCheckbox{{$item->id}}" value="{{$item->id}}">
                                    <label class="form-check-label" for="inlineCheckbox{{$item->id}}">{{$item->name}}</label>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="submit-button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection

@extends('admin/app')

@section('main')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Artikel</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('artikel.create')}}" class="btn btn-primary mb-3">Tambah Artikel</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Teks Artikel</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($artikel as $item)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->slug}}</td>
                                        <td>{{ Str::limit(strip_tags($item->text), 240);  }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="/artikel/{{$item->slug}}" class="btn btn-info mb-3">Lihat</a>
                                                <a href="{{route('artikel.edit', $item->id)}}" class="btn btn-secondary mb-3">Edit</a>
                                                <form action="{{route('artikel.destroy', $item->id)}}" method="post">
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

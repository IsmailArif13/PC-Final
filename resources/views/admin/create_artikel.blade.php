@extends('admin/app')

@section('main')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Tambah Artikel</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label>Teks Artikel</label>
                                <textarea name="text" id="summernote"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('assets/modules/summernote/summernote-lite.css')}}">
@endpush

@push('js')
<script src="{{asset('assets/modules/summernote/summernote-lite.min.js')}}"></script>
<script>
    $('#summernote').summernote({
        tabsize: 2,
        height: 400,
    })
</script>
@endpush

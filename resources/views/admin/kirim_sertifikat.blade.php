@extends('admin/app')

@section('main')
<div class="content-start transition">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Kirim Sertifikat</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('kirim-sertifikat')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Email Customer</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label>File Sertifikat</label>
                                <input type="file" class="form-control" name="file" required>
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

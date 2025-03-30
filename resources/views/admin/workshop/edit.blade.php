@extends('admin.layout.app')

@section('title', 'Admin - Data Workshop')

@section('content')
    <div class="row">

        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Workshop</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.workshop.update', $workshop->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Workshop</label>
                            <input type="text" class="form-control input-default @error('nama') is-invalid @enderror"
                                name="nama" placeholder="Nama Workshop" value="{{ $workshop->nama }}">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control input-default @error('harga') is-invalid @enderror"
                                name="harga" placeholder="Harga" value="{{ $workshop->harga }}">
                            @error('harga')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="des" id="editor" class="form-control @error('des') is-invalid @enderror" cols="30"
                                rows="10">{{ $workshop->des }}</textarea>
                            @error('des')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input type="file" name="thumbnail"
                                class="form-file @error('thumbnail') is-invalid @enderror">
                            @error('thumbnail')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection

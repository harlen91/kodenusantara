@extends('admin.layout.app')

@section('title', 'Admin - Edit Proyek')

@section('content')
    <div class="row">

        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Proyek</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.proyek.update', $proyek->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Proyek</label>
                            <input type="text" class="form-control input-default @error('nama') is-invalid @enderror"
                                name="nama" placeholder="Nama Proyek" value="{{ $proyek->nama }}">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="des" id="editor" class="form-control @error('des') is-invalid @enderror" cols="30"
                                rows="10">{{ $proyek->des }}</textarea>
                            @error('des')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-file @error('foto') is-invalid @enderror">
                            @error('foto')
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

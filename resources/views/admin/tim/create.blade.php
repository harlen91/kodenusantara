@extends('admin.layout.app')

@section('title', 'Admin - Tambah Tim')

@section('content')
    <div class="row">

        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Tim</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tim.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama tim</label>
                            <input type="text" class="form-control input-default @error('nama') is-invalid @enderror"
                                name="nama" placeholder="Nama tim" value="{{ @old('nama') }}">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                                <option value="">--Pilih--</option>
                                <option value="Direktur">Direktur</option>
                                <option value="Komisaris">Komisaris</option>
                                <option value="Head IT">Head IT</option>
                                <option value="Programmer">Programmer</option>
                            </select>
                            @error('jabatan')
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

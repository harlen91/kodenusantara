@extends('admin.layout.app')

@section('title', 'Admin - Tambah Bank')

@section('content')
    <div class="row">

        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Bank</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.bank.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Bank</label>
                            <input type="text" class="form-control input-default @error('nama') is-invalid @enderror"
                                name="nama" placeholder="Nama bank" value="{{ @old('nama') }}">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nomor Rekening</label>
                            <input type="text" class="form-control input-default @error('rekening') is-invalid @enderror"
                                name="rekening" placeholder="Nomor Rekening" value="{{ @old('rekening') }}">
                            @error('rekening')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Atas Nama Tabungan</label>
                            <input type="text" class="form-control input-default @error('atasnama') is-invalid @enderror"
                                name="atasnama" placeholder="Atas Nama Tabungan" value="{{ @old('atasnama') }}">
                            @error('atasnama')
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

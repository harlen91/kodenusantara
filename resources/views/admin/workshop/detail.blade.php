@extends('admin.layout.app')

@section('title', 'Admin - Detail Pembayaran Workshop')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Pembayaran Workshop</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Nama Peserta
                        </div>
                        <div class="col-md-8">
                            : {{ $bayar->nama }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Email
                        </div>
                        <div class="col-md-8">
                            : {{ $bayar->email }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Ponsel
                        </div>
                        <div class="col-md-8">
                            : {{ $bayar->ponsel }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Rekening Pengirim
                        </div>
                        <div class="col-md-8">
                            : {{ $bayar->rekening }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Bank Pengirim
                        </div>
                        <div class="col-md-8">
                            : {{ $bayar->bank }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            Nominal Transfer
                        </div>
                        <div class="col-md-8">
                            : @currency($bayar->nominal)
                        </div>
                    </div>
                    <form action="{{ route('admin.workshop.proses') }}" method="post">
                        <input type="hidden" name="kode" value="{{ $bayar->id }}">
                        @csrf
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status"
                                class="form-control @error('status') is-invalid @enderror">
                                <option value="">--Pilih--</option>
                                <option value="terima">terima</option>
                                <option value="tolak">tolak</option>
                            </select>
                            @error('status')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3" id="hasil">

                        </div>
                        <button type="submit" class="btn btn-success">Proses</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Resi Transfer</h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('transfer/' . $bayar->resi) }}" style="width: 100%;  max-width: 500px; height:450px;"
                        class="img-fluid rounded-top d-block mx-auto" alt="" />

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        $('document').ready(function() {
            console.log('mulai');
            $('#status').change(function() {
                const x = $(this).val();
                $('#hasil').html('');
                if (x == 'tolak') {
                    $('#hasil').append(`
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" />
                        @error('keterangan')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        `);
                }

            });
        });
    </script>
@endsection

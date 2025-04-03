<!doctype html>
<html lang="en">

<head>
    <title>Pendaftaran Workshop {{ $workshop->nama }} - Edukasi Kode Nuasantara</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="row">
                <h1 class="text-center">Form Pendaftaran Workshop</h1>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">Form Pendaftaran Workshop</div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $workshop->nama }}</h4>
                            <form action="{{ route('workshop.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="kode" value="{{ $workshop->id }}">
                                <div class="mb-3">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" id="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ @old('nama') }}">
                                    @error('nama')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ @old('email') }}">
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="ponsel">Ponsel</label>
                                    <input type="text" name="ponsel" id="ponsel"
                                        class="form-control @error('ponsel') is-invalid @enderror"
                                        value="{{ @old('ponsel') }}">
                                    @error('ponsel')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="harga">Harga</label>
                                    <input type="text" name="harga" id="harga"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        value="{{ $workshop->harga }}" readonly>
                                    @error('harga')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <h6>Informasi Pembayaran</h6>
                                <div class="mb-3">
                                    <label for="rekening">Nomor Rekening Anda</label>
                                    <input type="text" name="rekening" id="rekening"
                                        class="form-control @error('rekening') is-invalid @enderror"
                                        value="{{ @old('rekening') }}">
                                    @error('rekening')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="bank">Nama Bank Anda</label>
                                    <input type="text" name="bank" id="bank"
                                        class="form-control @error('bank') is-invalid @enderror"
                                        value="{{ @old('bank') }}">
                                    @error('bank')
                                        <div class="text-danger"> {{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="resi">Bukti Transfer</label>
                                    <input type="file" name="resi" id="ponsel"
                                        class="form-control @error('resi') is-invalid @enderror"
                                        value="{{ @old('resi') }}">
                                    @error('resi')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <p class="fw-bold text-success">Silahkan transfer biaya pendaftaran sebesar harga yang
                                    sudah
                                    ditentukan melalui daftar Bank
                                    yang ada...</p>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        Daftar Sekarang!
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Informasi Bank Transfer</div>
                        <div class="card-body">
                            <h4 class="card-title mb-3">Daftar Bank</h4>
                            @foreach ($bank as $data)
                                <h6 class="mt-3">BANK {{ $data->nama }}</h6>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        No Rekening
                                    </div>
                                    <div class="col-md-8">
                                        : {{ $data->rekening }}
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        Atas Nama
                                    </div>
                                    <div class="col-md-8">
                                        : {{ $data->atas_nama }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 mt-3">
                <a href="{{ route('workshop') }}" class="btn btn-success">
                    Kembali
                </a>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
</body>

</html>

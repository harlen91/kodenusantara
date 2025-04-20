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
                            <form action="{{ route('workshop.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="kode" value="{{ $workshop->id }}">
                                <div class="mb-3">
                                    <label for="depan">Nama Depan</label>
                                    <input type="text" name="depan" id="depan"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ @old('depan') }}">
                                    @error('depan')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="belakang">Nama Belakang</label>
                                    <input type="text" name="belakang" id="depan"
                                        class="form-control @error('belakang') is-invalid @enderror"
                                        value="{{ @old('belakang') }}">
                                    @error('belakang')
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
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        Daftar Sekarang!
                                    </button>
                                </div>

                            </form>
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

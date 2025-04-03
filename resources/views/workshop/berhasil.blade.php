<!doctype html>
<html lang="en">

<head>
    <title>Pendaftaran Workshop - Edukasi Kode Nuasantara</title>
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
                <h1 class="text-center">Pendaftaran Workshop</h1>
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">Pendaftaran Berhasil!</div>
                        <div class="card-body">
                            @session('success')
                                <div class="alert alert-success" role="alert">
                                    <h4 class="card-title"> {{ session('success') }}</h4>
                                </div>
                            @endsession

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    Kode Pendaftaran
                                </div>
                                <div class="col-md-8 fw-bold">
                                    : {{ $peserta->kode }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    Nama Workshop
                                </div>
                                <div class="col-md-8 fw-bold">
                                    : {{ $peserta->workshop->nama }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    Nama
                                </div>
                                <div class="col-md-8">
                                    : {{ $peserta->nama }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    Email
                                </div>
                                <div class="col-md-8">
                                    : {{ $peserta->email }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    Ponsel
                                </div>
                                <div class="col-md-8">
                                    : {{ $peserta->ponsel }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    Status Pendaftaran
                                </div>
                                <div class="col-md-8">
                                    : {{ $peserta->status }} -
                                    @if ($peserta->status == 'wait')
                                        Menunggu Verifikasi Admin Workshop
                                    @elseif($peserta->status == 'terimas')
                                        Pembayaran diterima!
                                    @else
                                        @php
                                            echo $peserta->keterangan;
                                        @endphp
                                    @endif
                                </div>
                            </div>
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

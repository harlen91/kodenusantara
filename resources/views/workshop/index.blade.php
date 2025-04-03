<!doctype html>
<html lang="en">

<head>
    <title>List Workshop - Edukasi Kode Nuasantara</title>
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
            <h1 class="text-center mb-3">Daftar Workshop Edukasi Kode Nusantara</h1>
            @session('error')
                <div class="alert alert-danger" role="alert">
                    <h4 class="card-title"> {{ session('error') }}</h4>
                </div>
            @endsession
            @foreach ($workshop as $data)
                <div class="col-md-6">
                    <div class="card mt-4">
                        <img class="card-img-top" src="{{ asset('thumbnail/' . $data->thumbnail) }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">{{ $data->nama }}</h4>
                            {!! $data->des !!}
                            <div class="d-grid gap-2">
                                <a href="{{ route('workshop.daftar', $data->id) }}" class="btn btn-primary">
                                    Daftar
                                </a>
                                <a href="{{ route('workshop.cek', $data->id) }}" class="btn btn-success">
                                    Cek Info Pembayaran
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
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

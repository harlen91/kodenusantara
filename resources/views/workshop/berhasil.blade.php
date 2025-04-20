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

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-ZnuQRGNg9a7l28KF"></script>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="row">
                <h1 class="text-center">Pendaftaran Workshop</h1>
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">Pendaftaran Berhasil!</div>
                        <div class="card-body">
                            @php
                                $token = base64_encode('SB-Mid-server-YthVtjTKgJKqZLOBL9FPZ1u_:');
                                $url = 'https://api.sandbox.midtrans.com/v2/' . $peserta->kode . '/status';
                                $header = [
                                    'Accept: application/json',
                                    'Authorization: Basic ' . $token,
                                    'Content-Type: application/json',
                                ];
                                $method = 'GET';
                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_URL, $url);
                                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, false);
                                curl_setopt($ch, CURLINFO_HEADER_OUT, true);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                $result = curl_exec($ch);
                                // dd($result);
                                $hasil = json_decode($result, true);
                            @endphp
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
                                    : {{ $peserta->nama_depan . ' ' . $peserta->nama_belakang }}
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
                                    :
                                    @php
                                        if ($hasil['status_code'] == '404') {
                                            echo 'Belum Dibayar!';
                                        } else {
                                            if ($hasil['transaction_status'] == 'pending') {
                                                echo 'Menunggu Pembayaran!';
                                            } elseif ($hasil['transaction_status'] == 'cancel') {
                                                echo 'Pembayaran Batal';
                                            } elseif ($hasil['transaction_status'] == 'settlement') {
                                                echo 'Sudah Bayar!';
                                            } elseif ($hasil['transaction_status'] == 'capture') {
                                                echo 'Sudah Bayar, Memerlukan waktu untuk verifikasi pembayaran';
                                            }
                                        }
                                    @endphp
                                </div>
                            </div>
                            @if ($hasil['status_code'] != '200')
                                <div class="row mb-3">
                                    <div class="d-grid gap-2">
                                        <a href="#" id="pay-button" class="btn btn-primary">Lakukan
                                            Pembayaran!</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="snap-container" class="mx-auto"></div>
                </div>
            </div>
            <div class="d-grid gap-2 mt-3">
                <a href="{{ route('workshop') }}" class="btn btn-success">
                    Kembali
                </a>
            </div>

        </div>
        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function() {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
                // Also, use the embedId that you defined in the div above, here.
                window.snap.embed('{{ $peserta->token }}', {
                    embedId: 'snap-container'
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
</body>

</html>

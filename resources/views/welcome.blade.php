@extends('layout.app')
@section('title', 'Edukasi Kode Nusantara')

@section('content')
    <div class="container-fluid py-4 py-xl-5" id="about">
        <div class="row gy-4 gy-md-0">
            <div
                class="col-md-6 col-lg-6 col-xl-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div class="pr" style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold">Welcome!</h2>
                    <p class="text-start my-3">Tempat di mana inovasi dan pengetahuan bertemu untuk menciptakan masa
                        depan yang lebih baik melalui teknologi. Kami berkomitmen untuk memberikan edukasi berkualitas
                        tinggi dalam bidang teknologi informasi dan pengembangan perangkat lunak.</p><a
                        class="btn btn-primary btn-lg text-bg-secondary me-2" role="button" href="#">Button</a><a
                        class="btn btn-outline-primary btn-lg link-secondary" role="button" href="#">Button</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="img-fluid w-100 fit-cover" style="min-height: 300px;"
                        src="{{ asset('assets/img/5a9d38c6-066d-4503-8e9e-3f8334fe7cb3.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5" id="fitur">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Fitur</h2>
                <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc.
                    Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div
                        class="bs-icon-lg bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                        <i class="fa fa-youtube-play"></i>
                    </div>
                    <div class="px-3">
                        <h4>YouTube Channel</h4>
                        <p>Kami memiliki channel YouTube yang menyediakan berbagai konten edukatif seputar pemrograman,
                            teknologi, dan pengembangan perangkat lunak. Di sini, Anda dapat menemukan tutorial, tips,
                            dan trik yang bermanfaat untuk meningkatkan keterampilan Anda dalam dunia IT.</p><a
                            href="#">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div
                        class="bs-icon-lg bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                        <i class="fa fa-mortar-board"></i>
                    </div>
                    <div class="px-3">
                        <h4>Workshop</h4>
                        <p>Edukasi Kode Nusantara menyelenggarakan workshop secara berkala yang dirancang untuk
                            memberikan pengalaman belajar langsung. Workshop kami mencakup berbagai topik, mulai dari
                            pemrograman dasar hingga pengembangan aplikasi lanjutan. Bergabunglah dengan kami untuk
                            mendapatkan pengetahuan praktis dan jaringan dengan para profesional di bidangnya.</p><a
                            href="{{ route('workshop') }}">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div
                        class="bs-icon-lg bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <div class="px-3">
                        <h4>Konsultan IT</h4>
                        <p>Edukasi Kode Nusantara juga menyediakan layanan konsultasi IT untuk membantu bisnis Anda
                            dalam merencanakan dan mengimplementasikan solusi teknologi yang tepat. Kami akan bekerja
                            sama dengan Anda untuk memahami kebutuhan spesifik dan memberikan rekomendasi yang sesuai.
                        </p><a href="#">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div
                        class="bs-icon-lg bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                        <i class="material-icons">devices</i>
                    </div>
                    <div class="px-3">
                        <h4>Software Development</h4>
                        <p>Kami menawarkan layanan pengembangan perangkat lunak yang dapat disesuaikan dengan kebutuhan
                            bisnis Anda. Tim kami terdiri dari para ahli yang berpengalaman dalam menciptakan solusi
                            perangkat lunak yang efisien dan efektif, mulai dari aplikasi web hingga aplikasi mobile.
                        </p><a href="#">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div
                        class="bs-icon-lg bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                        <i class="fa fa-file-archive-o"></i>
                    </div>
                    <div class="px-3">
                        <h4>Jurnal Karya Ilmiah</h4>
                        <p>Kami mengundang penulis dan peneliti untuk berkolaborasi dengan kami dalam menerbitkan
                            karya-karya yang berkualitas dan bermanfaat bagi masyarakat.</p><a href="#">Learn
                            More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="text-center d-flex flex-column align-items-center align-items-xl-center">
                    <div
                        class="bs-icon-lg bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon lg">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="px-3">
                        <h4>Publisher</h4>
                        <p>Kami berkomitmen untuk mendukung pengembangan ilmu pengetahuan dengan menerbitkan buku</p><a
                            href="#">Learn More&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right">
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Why Us?</h2>
                <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra
                    nunc. Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="d-flex p-3">
                    <div
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm">
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="px-2">
                        <h5 class="mb-0 mt-1"><strong>Pengalaman</strong>: Kami memiliki tim yang berpengalaman dan
                            ahli di bidangnya.</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex p-3">
                    <div
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm">
                        <i class="fa fa-thumbs-o-up"></i>
                    </div>
                    <div class="px-2">
                        <h5 class="mb-0 mt-1"><strong>Kualitas</strong>: Kami berkomitmen untuk memberikan produk dan
                            layanan berkualitas tinggi.</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex p-3">
                    <div
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm">
                        <i class="fa fa-certificate"></i>
                    </div>
                    <div class="px-2">
                        <h5 class="mb-0 mt-1"><strong>Inovasi</strong>: Kami selalu mengikuti perkembangan terbaru
                            dalam teknologi untuk memberikan solusi yang relevan.</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex p-3">
                    <div
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon sm">
                        <i class="fa fa-linode"></i>
                    </div>
                    <div class="px-2">
                        <h5 class="mb-0 mt-1"><strong>Komunitas</strong>: Bergabunglah dengan komunitas kami dan
                            dapatkan akses ke jaringan profesional dan sumber daya yang berharga.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5" id="project">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Project</h2>
                <p class="w-lg-50">Proyek pembangunan aplikasi yang pernah dikerjakan oleh Tim Edukasi Kode Nusantara</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            @foreach ($proyek as $data)
                <div class="col">
                    <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;"
                            src="{{ asset('foto/' . $data->foto) }}">
                        <div class="py-4">
                            <h4>{{ $data->nama }}</h4>
                            {{-- <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="container py-4 py-xl-5" id="team">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Our Team</h2>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
            @foreach ($tim as $data)
                <div class="col">
                    <div class="card border-0 shadow-none">
                        <div class="card-body d-flex align-items-center p-0"><img
                                class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130"
                                src="{{ asset('tim/' . $data->foto) }}">
                            <div>
                                <h5 class="fw-bold text-secondary mb-0">{{ $data->nama }}</h5>
                                <p class="text-muted mb-1">{{ $data->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <section id="kontak" class="position-relative py-4 py-xl-5">
        <div class="container-fluid position-relative">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Contact us</h2>
                    <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra
                        nunc. Vestibulum dui eget ultrices.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100">
                        <div class="d-flex align-items-center p-3">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="px-2">
                                <h6 class="mb-0">Phone</h6>
                                <p class="mb-0">+123456789</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="px-2">
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0">info@example.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary text-bg-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin-fill">
                                </svg>
                            </div>
                            <div class="px-2">
                                <h6 class="mb-0">Location</h6>
                                <p class="mb-0">12 Example Street</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post">
                            <div class="mb-3"><input class="form-control" type="text" id="name-1"
                                    name="name" placeholder="Name"></div>
                            <div class="mb-3"><input class="form-control" type="email" id="email-1"
                                    name="email" placeholder="Email"></div>
                            <div class="mb-3">
                                <textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div><button class="btn btn-primary text-bg-secondary d-block w-100" type="submit">Send
                                </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-dark bg-light border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5"
                data-bs-theme="light">
                <div class="text-center text-lg-start py-3 py-lg-1">
                    <h2 class="fw-bold mb-2"><strong>Subscribe to our newsletter</strong></h2>
                    <p class="mb-0">Imperdiet consectetur dolor.</p>
                </div>
                <form class="d-flex justify-content-center flex-wrap my-2" method="post">
                    <div class="my-2"><input class="form-control" type="email" name="email"
                            placeholder="Your Email"></div>
                    <div class="my-2"><button class="btn btn-primary text-bg-secondary ms-sm-2"
                            type="submit">Subscribe </button></div>
                </form>
            </div>
        </div>
    </section>
@endsection

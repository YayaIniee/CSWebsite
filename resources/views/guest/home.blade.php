@extends('layout.guest')

@section('content')
<div class="container-fluid p-0 m-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carousel1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carousel2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carousel3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container justify-content-center align-items-center">
    <h2 class="title text-center py-4">Why Computer Science?</h2>
    <div class="row">
        <div class="col-xl-5 text-center">
            <img src="https://id-media.apjonlinecdn.com/wysiwyg/blog/best-hp-laptops-for-programming/Programmer_Coding_on_Laptop.jpg" class="img-fluid rounded-3">
        </div>
        <div class="col-xl-7">
            <div class="accordion" id="Cees">
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#Cees">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#Cees">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#Cees">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="swiper hover-swipe swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-container">
                            <img class="card-img-top" src="..." alt="Card image cap">
                        </div>
                        <div class="portofoli_info">
                            <div class="profile_avatar">
                                <img class="card-img-top" src="..." alt="Avatar image">
                            </div>
                            <div class="portofolio_category">
                                <span>Mobile</span>
                            </div>
                            <div class="potrofolio_project">
                                <span>Cashfet</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-container">
                            <img class="card-img-top" src="..." alt="Card image cap">
                        </div>
                        <div class="portofoli_info">
                            <div class="profile_avatar">
                                <img class="card-img-top" src="..." alt="Avatar image">
                            </div>
                            <div class="portofolio_category">
                                <span>Mobile</span>
                            </div>
                            <div class="potrofolio_project">
                                <span>Cashfet</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-container">
                            <img class="card-img-top" src="..." alt="Card image cap">
                        </div>
                        <div class="portofoli_info">
                            <div class="profile_avatar">
                                <img class="card-img-top" src="..." alt="Avatar image">
                            </div>
                            <div class="portofolio_category">
                                <span>Mobile</span>
                            </div>
                            <div class="potrofolio_project">
                                <span>Cashfet</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid mt-5 py-5 px-3 primary-color text-white" id="prestasi">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Prestasi Mahasiswa</h1>
            </div>
        </div>
        <div class="row mt-4 text-dark">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Abdullah Ammar</h5>
                        <p class="card-text">Lomba Poster Digital ASTRO ( Aksi, Seni, Teknologi, dan Olahraga ) Competition 2018</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('images/carousel2.jpg') }}" class="card-img-top" alt="Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Naufal Rasyid</h5>
                        <p class="card-text">ITechno Cup 2018 “Shining Indonesia with Technology”, Web Developer Senior</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('images/carousel1.jpg') }}" class="card-img-top" alt="Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Mita Nurul Yatimah</h5>
                        <p class="card-text">Program Kreativitas Mahasiswa 2020
                            Judul Proposal: Analisis Perbandingan Efektivitas Sistem Pakar dalam Mendiagnosis Penyakit Stroke di Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('images/carousel3.jpg') }}" class="card-img-top" alt="Image 4">
                    <div class="card-body">
                        <h5 class="card-title">Risnawati</h5>
                        <p class="card-text">Program Kreativitas Mahasiswa 2020
                            Judul Proposal: GUFITECH (Get Your Farming Tools Tech) - Upaya Untuk Meningkatkan Produktivitas Pertanian Sebagai Solusi Mengurangi Nilai Impor Pangan Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
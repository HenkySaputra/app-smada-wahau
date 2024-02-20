@include('components.user.header')

<section class="hero_section ">
    <div class="hero-container container">
        <div class="hero_detail-box">
            <h3>
                Welcome to
                Website
            </h3>
            <h1>
                SMAN 2 Muara Wahau
            </h1>
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in
                some form, by injected humour, or randomised
            </p>
            <div class="hero_btn-continer">
                <a href="" class="call_to-btn btn_white-border">
                    <span>
                        Login
                    </span>
                    <img src="{{ asset('user/assets/images/right-arrow.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="hero_img-container">
            <div>
                <img src="{{ asset('user/assets/images/sekolah.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
</div>
<!-- end header section -->

<!-- about section -->
<section class="about_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            Tentang Sekolah
        </h2>
        <p class="text-center">
            There are many variations of passages of Lorem Ipsum available, but the majority hThere are many variations
            of
            passages of Lorem Ipsum available, but the majority h
        </p>
        <div class="about_img-box ">
            <img src="{{ asset('user/assets/images/kids.jpg') }}" alt="" class="img-fluid w-100">
        </div>
        <div class="d-flex justify-content-center mt-5">
            <a href="" class="call_to-btn  ">
                <span>
                    Read More
                </span>
                <img src="{{ asset('user/images/right-arrow.png') }}" alt="">
            </a>
        </div>
    </div>
</section>


<!-- about section -->



<!-- landing section -->
<section class="landing_section layout_padding">
    <div class="container">
        <h2 class="main-heading">
            SMA Negri 2 Muara Wahau

        </h2>
        <h2 class="main-heading number_heading">
            Semua Pengumuman Terbaru Ada di Website ini

        </h2>
        <p class="landing_detail text-center">
            Mari bersama-sama membangun SMA Negri 2 Muara Wahau dengan suka cita dan damai sentosa

        </p>
    </div>
</section>

<!-- end landing section -->

@include('components.user.footer')

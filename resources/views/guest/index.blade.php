@extends('guest.layouts.app')

@section('content')
<div class="container-carousel" id="beranda">
    <div id="carouselLandingPage" class="carousel slide carousel-page" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('assets/img/guest-assets/bghome.jpg') }}'); ">
                    <div class="layer-overlay"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end div carousel page -->
    <div class="col-md-9 ftco-animate carousel-title" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mt-4 mb-4 sub-title" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Rukun Warga 03<br></strong> Kelurahan Pedalangan</h1>
        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" class="sub-title">Find out where to stay, what's the updated news, and travel packages in Karimun</p>
    </div>
</div>

<section class="ftco-section" id="tentang">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <h2 class="mb-4"><strong>Tentang</strong> Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <img class="img img-fluid" src="{{ asset('assets/img/guest-assets/bghome.jpg') }}" alt="images">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                        mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                        mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" id="kegiatan">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <h2 class="mb-4"><strong>Kegiatan</strong></h2>
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top text-center">
                <a class="btn btn-floating mr-3" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a class="btn btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    </div>
                </div>
                </div>
                
                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    </div>
                </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    </div>
                </div>
                </div>
                
                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    </div>
                </div>
                </div>

            </div>
            <!--/.Second slide-->

            

            </div>
            <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </div>
</section>

<section class="ftco-section" id="galeri">
    <div class="container">
        <h2 class="mb-4"><strong>Galeri</strong></h2>
        <div class="headergaleri">
            <div class="row">
                <div class="container">
                    <div class="slidegaleri"
                    style="background-image: url('https://images.unsplash.com/photo-1567618890770-5fba551e55fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1568&q=80');">
                    <!-- <h3>Greenland</h3> -->
                    </div>
                    <div class="slidegaleri" style="
                        background-image: url('https://images.unsplash.com/photo-1544220830-7da42df1ff8d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80');
                    ">
                    <!-- <h3>Texas</h3> -->
                    </div>
                    <div class="slidegaleri" style="
                        background-image: url('https://images.unsplash.com/photo-1622983472977-c6f47788c7be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80');
                    ">
                    <!-- <h3>Honsu</h3> -->
                    </div>
                    <div class="slidegaleri" style="
                        background-image: url('https://images.unsplash.com/photo-1623180921692-204e49f5a34e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1568&q=80');
                    ">
                    <!-- <h3>Hania</h3> -->
                    </div>
                    <div class="slidegaleri" style="
                        background-image: url('https://images.unsplash.com/photo-1622983473068-37c2e7d04432?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80');
                    ">
                    <!-- <h3>The Andes mountains</h3> -->
                    </div>
                </div>
            </div>
        </div>
        <script>
            function slidesPlugin(activeSlide = 0) {
                const slides = document.querySelectorAll(".slidegaleri");

                slides[activeSlide].classList.add("active");

                for (const slide of slides) {
                    slide.addEventListener("click", () => {
                        clearActiveClasses();
                        slide.classList.add("active");
                    });
                }

                function clearActiveClasses() {
                    slides.forEach((slide) => {
                        slide.classList.remove("active");
                    });
                }
            }

            slidesPlugin(2);
        </script>
    </div>
</section>

<section class="ftco-section bg-light" id="covid">
  <div class="container">
    <div class="row justify-content-start mb-5 pb-3">
        <h2 class="mb-3"><strong>Pendataan</strong> Covid</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vero amet hic quam deserunt consequatur? 
            Numquam, ipsam non amet debitis voluptas sint, quibusdam alias deleniti blanditiis molestias repudiandae qui veniam.
        </p>
        <a class="btn btn-primary mt-1" href="" style="">Link Pendataan</a>
    </div>
  </div>
</section>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


@endsection
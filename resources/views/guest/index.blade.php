@extends('guest.layouts.app', ['title' => 'Rukun Warga 03 - Kelurahan Pedalangan'])

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
        <h1 class="mt-4 mb-4 sub-title" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Rukun Warga 03<br></strong> Kelurahan Pedalangan<br> Kecamatan Banyumanik</h1>
        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" class="sub-title">Selamat datang di website profil RW 03 Kelurahan Pedalangan Kecamatan Banyumanik <br> Kota Semarang, Jawa Tengah</p>
    </div>
</div>

<section class="ftco-section" id="tentang" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <h2 class="mb-4"><strong>Tentang</strong> Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <img class="img img-fluid" src="{{ asset('assets/img/guest-assets/about.jpg') }}" alt="images" style="width=100; height:auto">
                </div>
                <div class="col-md-8">
                    <p>Kelurahan Pedalangan Kecamatan Banyumanik mempunyai beberapa Rukun Warga (RW) di dalamnya. Salah satunya yaitu RW 03 
                        yang dibentuk melalui musyawarah pengurus rukun tetangga (RT). RW 03 ini bertujuan untuk memelihara dan 
                        melestarikan nilai-nilai kehidupan masyarakat. RW 03 juga berfungsi sebagai pengkoordinasi antar warga, 
                        jembatan aspirasi antar sesama masyarakat dengan pemerintah daerah dan menjadi penegah penyelesaian 
                        masalah-masalah kemsyarakatan yang dihadapi warga. RW 3 membantu untuk mewujudkan visi dari kelurahan pedalangan yaitu 
                        terwujudnya kelurahan yang dinamis, bersinergi, berkualitas dengan mengedepankan pelayanan prima.Di RW 03 terdapat 6 RT 
                        yaitu RT 01, RT 02, RT 03, RT 04, RT 05 dan RT 07. Berikut adalah nama - nama dari ketua RW 03 dan seluruh ketua RT yang ada di RW 03 :
                        <li>Ketua RW 03 : Bp. Raminto</li>
                        <li>Ketua RT 01 : Bp. Satimin</li>
                        <li>Ketua RT 02 : Bp. Pardimin</li>
                        <li>Ketua RT 03 : Bp. Dwi Kuryanto</li>
                        <li>Ketua RT 04 : Bp. Aryanto</li>
                        <li>Ketua RT 05 : Bp. Kusniyanto</li>
                        <li>Ketua RT 07 : Bp. Daryono</li> <br>
                        Dari berbagai RT yang ada, menimbulkan terbentuknya beberapa kegiatan kemasyarakatan baik itu ditingkat RW maupun ditingkat RT.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" id="kegiatan" data-aos="fade-up">
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
                    <img class="card-img-top img-fluid"
                    src="{{ asset('assets/img/guest-assets/kegiatan/1.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Lomba Proklim Tingkat Nasional</h4>
                    <p class="card-text">Lomba proklim tingkat nasional secara virtual</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/2.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Bantuan Sembako Warga dan Keadaan Ketersediaan Pangan</h4>
                    <p class="card-text">Bantuan sembako warga dan keadaan petersediaan pangan di lumbung RW.03</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/3.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Pemberian Bantuan Kelompok PKK</h4>
                    <p class="card-text">Pemberian bantuan ketua kelompok PKK RW kepada kader posyandu remaja</p>
                    </div>
                </div>
                </div>
                
                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/4.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Pelatihan Pengendalian Penyakit Tanaman</h4>
                    <p class="card-text">Pelatihan pengendalian penyakit tanaman yang diikuti perwakilan dari RW 03</p>
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
                    src="{{ asset('assets/img/guest-assets/kegiatan/5.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Pertemuan Rutin PKK</h4>
                    <p class="card-text">Pertemuan PKK yang secara rutin dan bekelanjutan dilaksanakan</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/6.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Lomba Kampung Siaga Candi Hebat</h4>
                    <p class="card-text">Lomba kampung siaga candi hebat tingkat kota semarang</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/7.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Lomba Administrasi PKK Kelurahan</h4>
                    <p class="card-text">Lomba administrasi PKK kelurangan dengan perwakilan dari RW 03 dan mendapat juara 1</p>
                    </div>
                </div>
                </div>
                
                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/8.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Sosialisasi Survey Mawasdiri</h4>
                    <p class="card-text">Sosialisasi survey mawasdiri yang dihadiri oleh peserta RW 03</p>
                    </div>
                </div>
                </div>
            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/9.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Lomba Pembuatan Masker</h4>
                    <p class="card-text">Peserta lomba pembuatan masker dan penyerahan hadiah lomba juara 2 dan juara 3 dari RW 03</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/10.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Penyerahan Faceshield</h4>
                    <p class="card-text">Ketua PKK RW.03 menyerahkan bantuan faceshield kepada ketua posrem</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/11.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Penyerahan Bantuan Kepada Anak Yatim</h4>
                    <p class="card-text">Penyerahan bantuan kepada anak yatim</p>
                    </div>
                </div>
                </div>
                
                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/12.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Raker PKK Kelurahan</h4>
                    <p class="card-text">Perwakilan dari RW 03 mengikuti raker PKK kelurahan</p>
                    </div>
                </div>
                </div>
            </div>
            <!--/.Third slide-->

            <!--Fourth slide-->
            <div class="carousel-item">

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/13.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Lomba Kelompok Tani Dahlia</h4>
                    <p class="card-text">Mengikuti lomba kelompok tani dahlia yang dihadiri ibu wakil walikota dan mendapatkan juara 1</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/14.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Doa Bersama</h4>
                    <p class="card-text">Kegiatan doa bersama di balai RW 03</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/15.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Pelatihan Pembuatan Souvenir</h4>
                    <p class="card-text">Kegiatan pelatihan pembuatan souvenir</p>
                    </div>
                </div>
                </div>
                
                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/16.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Bazar</h4>
                    <p class="card-text">Kegiatan bazar oleh ibu - ibu RW 03</p>
                    </div>
                </div>
                </div>
            </div>
            <!--/.Fourth slide-->

            <!--Fifth slide-->
            <div class="carousel-item">

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/17.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Senam Hipertensi</h4>
                    <p class="card-text">Mengikuti kegiatan senam hipertensi di balai RW 03</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/18.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Lomba Rumah Sehat</h4>
                    <p class="card-text">Perwakilan RW 03 mengikuti lomba rumah sehat</p>
                    </div>
                </div>
                </div>

                <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                    <img class="card-img-top"
                    src="{{ asset('assets/img/guest-assets/kegiatan/19.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">Pelaksanaan Jalan Nasional</h4>
                    <p class="card-text">Sebelum pelaksanaan jalan nasional dilakukan apel, setelah itu melaksanakan kegiatan</p>
                    </div>
                </div>
                </div>
            </div>
            <!--/.Fifth slide-->
            </div>
            <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </div>
</section>

<section class="ftco-section" id="galeri" data-aos="fade-up">
    <div class="container">
        <h2 class="mb-4"><strong>Galeri</strong></h2>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/1.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/1.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/2.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/2.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/3.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/3.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/4.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/4.jpeg') }}" alt="images"></a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/5.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/5.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/6.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/6.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/7.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/7.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/8.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/8.jpeg') }}" alt="images"></a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/9.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/9.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/10.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/10.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/11.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/11.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/12.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/12.jpeg') }}" alt="images"></a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/13.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/13.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/14.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/14.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/15.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/15.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/16.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/16.jpeg') }}" alt="images"></a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/17.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/17.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/18.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/18.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/kegiatan/19.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/19.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/1.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/kegiatan/1.jpeg') }}" alt="images"></a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/2.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/2.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/3.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/3.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/4.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/4.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/5.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/5.jpeg') }}" alt="images"></a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/6.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/6.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/7.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/7.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/8.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/8.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/9.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/9.jpeg') }}" alt="images"></a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/10.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/10.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/11.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/11.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/12.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/12.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/13.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/13.jpeg') }}" alt="images"></a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/14.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/14.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/15.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/15.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/16.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/16.jpeg') }}" alt="images"></a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ asset('assets/img/guest-assets/galeri/17.jpeg') }}" target="_blank" rel="noopener noreferrer"><img class="img img-fluid" src="{{ asset('assets/img/guest-assets/galeri/17.jpeg') }}" alt="images"></a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light" id="covid" data-aos="fade-up">
  <div class="container mt-5">
    <div class="row justify-content-start mb-5 pb-3">
        <h2 class="mb-3"><strong>Pendataan</strong> Covid-19</h2>
        <p>Pendataan covid ini untuk mengetahui serta mendata jumlah warga yang terpapar covid-19 yang ada di RW 3. Hal ini diperuntukkan agar dari pengurus setempat
            dapat menentukan kebijakan yang tepat untuk dilaksanakan. Untuk melakukan pendataan silahkan tekan tombol dibawah ini.
        </p>
        <a class="btn btn-primary mt-1" href="/pendataancovid-19" style="">Link Pendataan</a>
    </div>
  </div>
</section>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script>
    AOS.init();
</script>
@endsection
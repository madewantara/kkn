@extends('guest.layouts.app', ['title' => 'Pendataan Covid-19 - Rukun Warga 03'])

@section('content')
<div class="container-carousel">
    <div id="carouselLandingPage" class="carousel slide carousel-page" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-wrap layer js-fullheight" style="background-image: url('{{ asset('assets/img/guest-assets/bghome.jpg') }}'); ">
                    <div class="layer-overlay"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9 ftco-animate carousel-title" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="sub-title" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Pendataan<br></strong>Covid-19</h1>
        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" class="sub-title">Pendataan covid-19 rukun warga 03 Kelurahan Pedalangan Kecamatan Banyumanik<br> Kota Semarang, Jawa Tengah</p>
    </div>
</div>

<section class="ftco-section ftco-degree-bg" data-aos="fade-up">
    <div class="container mb-5" style="display:block;">
        <h2>FORM PENDATAAN COVID</h2><hr>
        <form class="form-create" id="needs-validation" role="form" method="POST" action="{{ Route('storecovid19') }}" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';" novalidate>
            @csrf
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputName">Nama Lengkap</label>
                        <input type="text" name="inputName" id="inputName" class="form-control rounded" placeholder="Nama Lengkap" required>
                        <div class="invalid-feedback">*Lengkapi nama lengkap dengan benar.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputStatus">Status</label>
                        <select id="inputStatus" name="inputStatus" class="form-control rounded" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="Positif">Positif</option>
                            <option value="Negatif">Negatif</option>
                        </select>
                        <div class="invalid-feedback">*Pilih salah satu status.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputKeterangan">Keterangan</label>
                        <select id="inputKeterangan" name="inputKeterangan" class="form-control rounded" required>
                            <option value="">-- Pilih Keterangan --</option>
                            <option value="Status Baru">Status Baru</option>
                            <option value="Memperbaharui Status">Memperbaharui Status</option>
                        </select>
                        <div class="invalid-feedback">*Pilih salah satu keterangan.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputGejala">Gejala</label>
                        <input type="text" name="inputGejala" id="inputGejala" class="form-control rounded" placeholder="Gejala" required>
                        <div class="invalid-feedback">*Lengkapi gejala dengan benar.</div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary float-right" type="submit" id="submit">Submit</button>
        </form>
        <script>
            ! function() {
                "use strict";
                window.addEventListener("load", function() {
                    var e = document.getElementById("needs-validation");
                    e.addEventListener("submit", function(t) {
                        !1 === e.checkValidity() && (t.preventDefault(), t.stopPropagation()), e.classList.add("was-validated")
                    }, !1)
                }, !1)
            }()
        </script>
    </div>
</section> <!-- .section -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@if (session('status'))
    <script>
        window.onload = () => {
        showNotification('bottom', 'right', 'success', '<?php echo session('status') ?>');
        };
    </script>
@endif
<script>
    AOS.init();
</script>
@endsection

@push('scripts')
    <script src="{{ asset("assets/vendor/bootstrap-notify/bootstrap-notify.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/bootstrap-notify/notification.js") }}"></script>
@endpush


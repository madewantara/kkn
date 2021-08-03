@extends('layouts.app', ['active' => 'Data Covid-19'])

@section('title', 'Tambah Data Covid-19')

@section('content')
    @include('layouts.headers.main')
    
    <div class="container-fluid">
        <a class="back" href="{{ Route('covids.index') }}"><i class="fas fa-chevron-left mt-4"></i> Back</a>
        <form class="form-create" id="needs-validation" role="form" method="POST" action="{{ Route('covids.store') }}" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';" novalidate>
            @csrf
            <div class="card mt-4">
                <div class="card-header">
                    <h1 class="c-grey-900 mt-4 text-center">FORM PENDATAAN COVID</h1> 
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Nama Lengkap</label>
                                <input type="text" name="inputName" id="inputName" class="form-control rounded" placeholder="Nama Lengkap" required value="{{ old('inputName') }}">
                                <div class="invalid-feedback">*Lengkapi nama lengkap dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" name="inputStatus" class="form-control rounded" required value="{{ old('inputStatus') }}">
                                    <option value="none">-- Pilih Status --</option>
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
                                <select id="inputKeterangan" name="inputKeterangan" class="form-control rounded" required value="{{ old('inputKeterangan') }}">
                                    <option value="none">-- Pilih Keterangan --</option>
                                    <option value="Status Baru">Status Baru</option>
                                    <option value="Memperbaharui Status">Memperbaharui Status</option>
                                </select>
                                <div class="invalid-feedback">*Lengkapi keterangan dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputGejala">Gejala</label>
                                <input type="text" name="inputGejala" id="inputGejala" class="form-control rounded" placeholder="Gejala" required value="{{ old('inputGejala') }}">
                                <div class="invalid-feedback">*Lengkapi gejala dengan benar.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary float-right" type="submit" id="submit">Submit</button>
                </div>
            </div>
        </form>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset("assets/vendor/bootstrap-notify/bootstrap-notify.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/bootstrap-notify/notification.js") }}"></script>
    <script src="{{ asset("assets/vendor/quill/dist/quill.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/dropzone/dist/min/dropzone.min.js") }}"></script>
    <script src="{{ asset('argon') }}/js/quill-script.js"></script>
    <script src="{{ asset('argon') }}/js/dropzone-script.js"></script>

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
@endpush
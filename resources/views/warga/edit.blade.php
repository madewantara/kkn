@extends('layouts.app', ['active' => 'Data Warga'])

@section('title', 'Ubah Data Warga')

@section('content')
    @include('layouts.headers.main')
    
    <div class="container-fluid">
        <a class="back" href="{{ Route('wargas.index') }}"><i class="fas fa-chevron-left mt-4"></i> Back</a>
        <form class="form-create" id="needs-validation" role="form" method="POST" action="{{ Route('wargas.update', ['warga' => $wargas->warga_id]) }}" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';" novalidate>
            @csrf
            @method('put')
            <div class="card mt-4">
                <div class="card-header">
                    <h1 class="c-grey-900 mt-4 text-center">FORM DATA WARGA</h1>    
                </div>  
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nokk">Nomor Kartu Keluarga</label>
                                <input type="text" name="nokk" id="nokk" class="form-control rounded" placeholder="Nama Lengkap" required value="{{ old('nokk') ?? $wargas->nokk}}">
                                <div class="invalid-feedback">*Lengkapi nomor kartu keluarga dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nik">Nomor Induk Kependudukan (NIK)</label>
                                <input type="text" name="nik" id="nik" class="form-control rounded" placeholder="Nama Lengkap" required value="{{ old('nik') ?? $wargas->nik}}">
                                <div class="invalid-feedback">*Lengkapi nomor induk kependudukan (NIK) dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="form-control rounded" placeholder="Nama Lengkap" required value="{{ old('name') ?? $wargas->name}}">
                                <div class="invalid-feedback">*Lengkapi nama lengkap dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ttl">Tempat/Tanggal Lahir</label>
                                <input type="text" name="ttl" id="ttl" class="form-control rounded" placeholder="Tempat/Tanggal Lahir" required value="{{ old('ttl') ?? $wargas->ttl}}">
                                <div class="invalid-feedback">*Lengkapi tempat/tanggal lahir dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="kelamin">Jenis Kelamin</label>
                                <select id="kelamin" name="kelamin" class="form-control rounded" required value="{{ old('kelamin') ?? $wargas->kelamin}}">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki - Laki" <?php if ($wargas->kelamin == "Laki - Laki"){echo "selected";}?>>Laki - Laki</option>
                                    <option value="Perempuan" <?php if ($wargas->kelamin == "Perempuan"){echo "selected";}?>>Perempuan</option>
                                    <option value="Lainnya" <?php if ($wargas->kelamin == "Lainnya"){echo "selected";}?>>Lainnya</option>
                                </select>
                                <div class="invalid-feedback">*Lengkapi jenis kelamin dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select id="agama" name="agama" class="form-control rounded" required value="{{ old('agama') ?? $wargas->agama }}">
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="Islam" <?php if ($wargas->agama == "Islam"){echo "selected";}?>>Islam</option>
                                    <option value="Kristen" <?php if ($wargas->agama == "Kristen"){echo "selected";}?>>Kristen</option>
                                    <option value="Katolik" <?php if ($wargas->agama == "Katolik"){echo "selected";}?>>Katolik</option>
                                    <option value="Hindu" <?php if ($wargas->agama == "Hindu"){echo "selected";}?>>Hindu</option>
                                    <option value="Buddha" <?php if ($wargas->agama == "Buddha"){echo "selected";}?>>Buddha</option>
                                    <option value="Konghucu" <?php if ($wargas->agama == "Konghucu"){echo "selected";}?>>Konghucu</option>
                                    <option value="Lainnya" <?php if ($wargas->agama == "Lainnya"){echo "selected";}?>>Lainnya</option>
                                </select>
                                <div class="invalid-feedback">*Lengkapi agama dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control rounded" placeholder="Pekerjaan" required value="{{ old('pekerjaan') ?? $wargas->pekerjaan}}">
                                <div class="invalid-feedback">*Lengkapi pekerjaan dengan benar.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control rounded" placeholder="Alamat" required value="{{ old('alamat') ?? $wargas->alamat}}">
                                <div class="invalid-feedback">*Lengkapi alamat dengan benar.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary float-right" type="submit" id="submit">Submit</button>
                </div>
            </div>
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
        @include('layouts.footers.auth')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-notify/notification.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('argon') }}/js/quill-script.js"></script>
    <script src="{{ asset('argon') }}/js/dropzone-script.js"></script>
@endpush
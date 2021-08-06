@extends('layouts.app', ['active' => 'Data Covid-19'])

@section('title', 'Kelola Data Covid-19')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
    @include('layouts.headers.main')
    
    <div class="container-fluid">
        <div class="card mt-5 pl-5 pr-5 pt-4 pb-4">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ Route('covids.create') }}" type="button" class="btn btn-primary btn-sm animation-on-hover float-right mb-2">+ Tambah Data</a>
                </div>
            </div>
            <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered display" style="width: 100%">
                <thead class="text-center align-middle">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Gejala</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot class="text-center align-middle">
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Gejala</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($covid as $covid)
                        <tr>
                            <td class="text-center align-middle">{{ $loop->iteration }}.</td>
                            <td class="text-center align-middle">{{ $covid->nama }}</td>
                            <td class="text-center align-middle">{{ $covid->status }}</td>
                            <td class="text-center align-middle">{{ $covid->keterangan }}</td>
                            <td class="text-center align-middle">{{ $covid->gejala }}</td>
                            <td class="text-center align-middle">
                                <a href="{{ route('covids.edit', ['covid' => $covid->covids_id]) }}" class="btn btn-warning btn-sm ">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ Route('covids.destroy', ['covid' => $covid->covids_id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm text-white" 
                                            onclick=" return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>

    @if (session('status'))
        <script>
            window.onload = () => {
                showNotification('bottom', 'right', 'success', '<?php echo session('status') ?>');
            };
        </script>
    @endif
@endsection

@push('scripts')
    <script src="{{ asset("assets/vendor/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/datatables.net-buttons/js/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/datatables.net-buttons/js/buttons.flash.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/datatables.net-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/datatables.net-select/js/dataTables.select.min.js") }}""></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.js"></script>

    <script src="{{ asset("assets/vendor/bootstrap-notify/bootstrap-notify.min.js") }}"></script>
    <script src="{{ asset("assets/vendor/bootstrap-notify/notification.js") }}"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable( {
                "pagingType": "numbers",
                responsive: true,
            } );
        } );
    </script>
@endpush
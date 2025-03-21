@extends('layouts.admin')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="icon bi bi-award"></i> Manajemen Lomba</h1>
            <p>Laman untuk manajemen data lomba</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="/lomba">Manajemen Lomba</a></li>
        </ul>
    </div>

    <!-- Card Manajemen Lomba -->
    <div class="container-fluid">
        <!-- Tabel Lomba -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                            data-bs-target="#modalTambahLomba">
                            Tambah <i class="bi bi-plus-square"></i>
                        </button>
                        @if (session('sukses'))
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-success">
                                    <button class="btn-close" type="button"
                                        data-bs-dismiss="alert"></button>{{ session('sukses') }}
                                </div>
                            </div>
                        @endif
                        @if (session('failed'))
                            <div class="bs-component">
                                <div class="alert alert-dismissible alert-danger">
                                    <button class="btn-close" type="button"
                                        data-bs-dismiss="alert"></button>{{ session('failed') }}
                                </div>
                            </div>
                        @endif
                        <table class="table table-bordered" id="tabelLomba">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">nisn</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Nama Lomba</th>
                                    <th scope="col">Penyelenggara</th>
                                    <th scope="col">Tingkat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Sertif</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lomba as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->Kelas }}</td>
                                        <td>{{ $item->lomba }}</td>
                                        <td>{{ $item->penyelenggara }}</td>
                                        <td>{{ $item->tingkat }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                                        <td>
                                            @if ($item->sertifikat)
                                                <img src="{{ asset('storage/sertifikat/' . $item->sertifikat) }}"
                                                    style="height: 50px;width:100px;">
                                            @else
                                                <span>No sertifikat found!</span>
                                            @endif
                                        </td>

                                        @if ($item->status == 'Tidak Disetujui')
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#modalSetujuLomba-{{ $item->id }}">
                                                        <i class="bi bi-exclamation-triangle"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        @else
                                            <td class="text-center">
                                                <button @readonly(true) class="btn btn-success" type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalSetujuLomba-{{ $item->id }}">
                                                    <i class="bi bi-check2-all"></i>
                                                </button>
                                            </td>
                                        @endif

                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#modalLihatLomba-{{ $item->id }}">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditLomba-{{ $item->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusLomba-{{ $item->id }}">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                        @include('admin.includes.lomba.modalHapusLomba')
                                        @include('admin.includes.lomba.modalEditLomba')
                                        @include('admin.includes.lomba.modalLihatLomba')
                                        @include('admin.includes.lomba.modalSetujuLomba')
                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tabel Lomba -->
    </div>
    @include('admin.includes.lomba.modalTambahLomba')
    <!-- End Card Manajemen Lomba -->
@endsection

@push('script')
    {{-- Datatables --}}
    <script type="text/javascript" src=" {{ asset('admins/js/plugins/jquery.dataTables.min.js') }} "></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $('#tabelLomba').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>
    </script>
@endpush

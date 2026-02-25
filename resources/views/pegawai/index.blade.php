@extends('app')
@section('content')
    <div class="row">
        <div class="col">

            <div class="card-box">
                @if (session('success'))
                    <div class="alert alert-success" id="success-alert" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- HEADER FLEX -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="header-title mb-0">Data Pegawai</h4>

                    <a href="{{ route('pegawai.create') }}" class="btn btn-primary btn-rounded">
                        Tambah Data
                    </a>
                </div>

                <!-- TABLE -->
                <div class="table-responsive">
                    <table class="table table-striped mb-0" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>NIK</th>
                                <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->nama_pegawai }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->umur }}</td>
                                    <td>
                                        {{ $item->tempat_lahir }},
                                        {{ \Carbon\Carbon::parse($item->tanggal_lahir)->locale('id')->translatedFormat('d F Y') }}
                                    </td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <a href="{{ route('pegawai.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#hapusModal{{ $item->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        {{-- <button class="btn btn-icon waves-effect text-danger" type="button"
                                            data-bs-toggle="modal" data-bs-target="#hapusModal{{ $item->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button> --}}
                                        {{-- <button type="submit" class="btn btn-icon waves-effect text-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    <!-- END wrapper -->


    @foreach ($pegawai as $item)
        <!-- Modal -->
        <div class="modal fade" id="hapusModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('pegawai.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-header">
                            <h5 class="modal-title" id="hapusModal">Lanjutkan Penghapusan Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Data akan terhapus secara permanen, klik <strong>Lanjutkan</strong> untuk menghapus data</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

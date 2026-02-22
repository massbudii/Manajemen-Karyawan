@extends('app')
@section('content')


    <div class="row">
        <div class="col">

            <div class="card-box">

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
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    <!-- END wrapper -->
@endsection

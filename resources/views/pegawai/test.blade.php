@extends('app')

@section('content')


        <h4 class="mb-3">Data Kawasan</h4>

        {{-- ALERT --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- BUTTON TAMBAH --}}
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
            + Tambah Kawasan
        </button>

        {{-- TABLE --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kawasan</th>
                    <th>Type Unit</th>
                    <th>Status</th>
                    <th width="200px">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>

                        <td>
                            <strong>{{ $item->nama_kawasan }}</strong><br>
                            <small class="text-muted">{{ $item->alamat }}</small>
                        </td>

                        <td>
                            @foreach ($item->typeUnits as $type)
                                <span class="badge bg-info me-1">
                                    {{ $type->nama_type }}
                                </span>
                            @endforeach
                        </td>

                        <td>
                            @if ($item->status == 'aktif')
                                <span class="badge bg-success">Aktif</span>
                            @else
                                <span class="badge bg-secondary">Selesai</span>
                            @endif
                        </td>

                        <td>
                            {{-- EDIT --}}
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalEdit{{ $item->id }}">
                                Edit
                            </button>

                            {{-- HAPUS --}}
                            <form action="{{ route('kawasan.delete', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button style="border:none; background:none; color:red;"
                                    onclick="return confirm('Hapus data ini?')">
                                    🗑
                                </button>
                            </form>

                            {{-- MASUK --}}
                            <button class="btn btn-info btn-sm" onclick="return cekStatus('{{ $item->status }}')">
                                Masuk
                            </button>
                        </td>
                    </tr>

                    {{-- MODAL EDIT --}}
                    <div class="modal fade" id="modalEdit{{ $item->id }}">
                        <div class="modal-dialog">
                            <form method="POST" action="{{ route('kawasan.update', $item->id) }}">
                                @csrf

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Edit Kawasan</h5>
                                    </div>

                                    <div class="modal-body">

                                        <div class="mb-2">
                                            <label>Nama Kawasan</label>
                                            <input type="text" name="nama_kawasan" value="{{ $item->nama_kawasan }}"
                                                class="form-control">
                                        </div>

                                        <div class="mb-2">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control">{{ $item->alamat }}</textarea>
                                        </div>

                                        <div class="mb-2">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="aktif" {{ $item->status == 'aktif' ? 'selected' : '' }}>
                                                    Aktif</option>
                                                <option value="selesai" {{ $item->status == 'selesai' ? 'selected' : '' }}>
                                                    Selesai</option>
                                            </select>
                                        </div>

                                        <div class="mb-2">
                                            <label>Type Unit</label>
                                            <select name="type_unit_id[]" class="form-control" multiple>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}"
                                                        {{ $item->typeUnits->contains($type->id) ? 'selected' : '' }}>
                                                        {{ $type->nama_type }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-primary">Update</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

    </div>

    {{-- MODAL TAMBAH --}}
    <div class="modal fade" id="modalTambah">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('kawasan.store') }}">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Tambah Kawasan</h5>
                    </div>

                    <div class="modal-body">

                        <div class="mb-2">
                            <label>Nama Kawasan</label>
                            <input type="text" name="nama_kawasan" class="form-control">
                        </div>

                        <div class="mb-2">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control"></textarea>
                        </div>

                        <div class="mb-2">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="aktif">Aktif</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label>Type Unit</label>
                            <select name="type_unit_id[]" class="form-control" multiple>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">
                                        {{ $type->nama_type }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary">Simpan</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    {{-- JS VALIDASI --}}
    <script>
        function cekStatus(status) {
            if (status === 'selesai') {
                alert('Tidak bisa melakukan transaksi, kawasan sudah selesai pembangunan!');
                return false;
            }
        }
    </script>
@endsection

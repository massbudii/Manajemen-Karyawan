@extends('app')
@section('content')
    <div class="row">
        <div class="col-lg-6 mx-auto ">

            <div class="card-box">
                <h4 class="header-title">Form Edit Karyawan</h4>
                <p class="sub-header">
                    Silahkan isi data di form bawah ini
                </p>

                <form class="parsley-examples" action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_pegaawai">Nama Pegawai <span class="text-danger">*</span></label>
                        <input type="text" name="nama_pegawai" parsley-trigger="change"
                            class="form-control @error('nama_pegawai')
                                is-invalid
                            @enderror" value="{{ $pegawai->nama_pegawai}}" id="nama_pegawai">

                        @error('nama_pegawai')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nik">NIK<span class="text-danger">*</span></label>
                        <input type="text" name="nik" parsley-trigger="change"
                            class="form-control @error('nik')
                            is-invalid
                        @enderror" value="{{ $pegawai->nik }}" id="nik">

                        @error('nik')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="umur">Umur<span class="text-danger">*</span></label>
                        <input id="umur" type="text" name="umur" class="form-control @error('umur')
                            is-invalid
                        @enderror" value="{{ $pegawai->umur }}">

                        @error('umur')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="form-group ">
                        <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-control @error('jenis_kelamin')
                            is-invalid
                        @enderror"  name="jenis_kelamin">
                            <option value="">---Pilih Jenis Kelamin---</option>
                            <option value="laki-laki" {{ $pegawai->jenis_kelamin == 'laki-laki' ? 'selected'  : ''  }}>Laki-laki</option>
                            <option value="perempuan" {{ $pegawai->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>

                            @error('jenis_kelamin')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
                        <input id="tanggal_lahir" type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir')
                            is-invalid
                        @enderror" value="{{ $pegawai->tanggal_lahir }}">

                        @error('tanggal_lahir')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
                        <input id="tempat_lahir" type="text" name="tempat_lahir" class="form-control @error('tempat_lahir')
                            is-invalid
                        @enderror" value="{{ $pegawai->tempat_lahir }}">

                        @error('tempat_lahir')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat<span class="text-danger">*</span></label>
                        <input id="alamat" type="text" name="alamat" class="form-control @error('alamat')
                            is-invalid
                        @enderror" value="{{ $pegawai->alamat }}">

                        @error('alamat')
                            <small class="tect-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group text-right mb-0">
                        <button class="btn btn-gradient waves-effect waves-light" type="submit">
                            Simpan
                        </button>
                    </div>

                </form>
            </div> <!-- end card-box -->
        </div>
        <!-- end col -->


    </div>
@endsection

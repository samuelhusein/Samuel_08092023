<div class="p2">
    <div class="form-group">
        <div>
            <label for="name">Nama Pegawai</label>
            <input type="text" name="pegawai_nama" value="{{ $data->pegawai_nama }}" id="pegawai_nama" class="form-control">
        </div>
        <div>
            <label for="name">Jabatan</label>
            <input type="text" name="pegawai_jabatan" value="{{ $data->pegawai_jabatan }}" id="pegawai_jabatan" class="form-control">
        </div>
        <div>
            <label for="name">Umur</label>
            <input type="text" name="pegawai_umur" value="{{ $data->pegawai_umur }}" id="pegawai_umur" class="form-control">
        </div>
        <div>
            <label for="name">Alamat</label>
            <textarea name="pegawai_alamat" id="pegawai_alamat" class="form-control">{{ $data->pegawai_alamat }}</textarea>
        </div>
    </div>
    <div class="form-group pt-2">
        <button class="btn btn-warning" onClick="update({{ $data->pegawai_id }})">Update</button>
    </div>
</div>

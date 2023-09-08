<table class="table">
    <tr>
        <th>Nama Pegawai</th>
        <th>Jabatan Pegawai</th>
        <th>Umur Pegawai</th>
        <th>Alamat Pegawai</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->pegawai_nama }}</td>
            <td>{{ $item->pegawai_jabatan }}</td>
            <td>{{ $item->pegawai_umur }}</td>
            <td>{{ $item->pegawai_alamat }}</td>

            <td>
                <button class="btn btn-warning" onClick="show({{ $item->pegawai_id }})">Edit</button>
                <button class="btn btn-danger" onClick="destroy({{ $item->pegawai_id }})">Delete</button>
            </td>
        </tr>
    @endforeach
</table>

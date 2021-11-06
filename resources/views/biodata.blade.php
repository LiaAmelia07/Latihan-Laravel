<html>
    <head>
        <title>Menampilkan Biodata</title>
    </head>
<body>
    <center><h2>Biodata Teman Saya</h2>
    <table border=1>
        <th>Id</th>
        <th>Nama Lengkap</th>
        <th>Tempat Lahir</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
            <tr>
            @foreach($data as $data2)
            <td>{{ $data2['id']}} </td>
            <td>{{ $data2['nama_lengkap']}} </td>
            <td>{{ $data2['tempat_lahir']}} </td>
            <td>{{ $data2['tanggal_lahir']}}</td>
            <td>{{ $data2['jenis_kelamin']}}</td>
            </tr>
            @endforeach
    </table>
    </center>
</body>
</html>
